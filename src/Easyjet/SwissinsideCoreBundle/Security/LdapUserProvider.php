<?php

    namespace App\Easyjet\SwissinsideCoreBundle\Security;

    use App\Easyjet\SwissinsideCoreBundle\Entity\User;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
    use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
    use Symfony\Component\Security\Core\User\UserInterface;
    use Symfony\Component\Security\Core\User\UserProviderInterface;
    use Symfony\Component\Security\Core\Exception\AuthenticationException;
    use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

    class LdapUserProvider implements UserProviderInterface
    {
        /**
         * @var EntityManager
         */
        private $entityManager;
        private $useAdRights;

        public function __construct(EntityManagerInterface $entityManager, $useAdRights = false)
        {
            $this->entityManager = $entityManager;
            $this->useAdRights = $useAdRights;
        }

        /**
         * @param string $username
         * @return UserInterface|void
         * @see loadUserByUsername(string $username)
         */
        public function loadUserByUsername($username)
        {
            $user = $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findOneBy(array('logUser' => $username));
            return $user;
        }

        /**
         * search user against ldap and returns the matching App\Easyjet\SwissinsideCoreBundle\Entity\User. The $user entity will be created if not exists.
         * @param TokenInterface $token
         * @return User|object|null
         */
        public function authenticate(TokenInterface $token)
        {
            if ($token->getError()) {
                throw new AuthenticationException($token->getError());
            }
            if ($token->getEmpno()) {
                $user = $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findOneBy(array('logUser' => $token->getEmpno()));
                if (!$user) {
                    $token->setEmpno('external-'.$token->getEmpno());
                    $user = $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findOneBy(array('logUser' => $token->getEmpno()));   
                    if (!$user) {
                        $ad = $token->getAdObject();

                        $user = \App\Easyjet\SwissinsideCoreBundle\Entity\User::newExternal(
                                $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\TypesEftr')->findOneBy(array('type' => 'EC'))
                        );
                        $prenom = '';

                        if (isset($ad['givenname'][0])) {
                            $prenom = $ad['givenname'][0];
                        }
                        $nom = '';
                        if (isset($ad['sn'][0])) {
                            $nom = $ad['sn'][0];
                        }

                        $email = '';
                        if (isset($ad['mail'][0])) {
                            $email = $ad['mail'][0];
                        }
                        if (!$prenom && !$nom) {
                            $prenom = $ad['displayname'][0];
                        }

                        $user->setLogUser($token->getEmpno())
                            ->setPwdUser(md5(uniqid()))
                            ->setLastname($nom)
                            ->setFirstname($prenom)
                            ->setEmailUser($email)
                            ->setManuel(1);
                        //\Iabsis\DebugBundle\Utils\Dump::show($user);exit;
                        $this->entityManager->persist($user);
                        $this->entityManager->flush();
                    }
                }
            }

            try {
                $user = $this->loadUserByUsername($token->getEmpno());
            } catch (\Exception $e) {
                throw new AuthenticationException('Connection against the active directory success... but your account was not found into swissinside. Please contact an administrator.');
            }
            
            $adGroups = array();
            if ($this->useAdRights) {
                $adObject = $token->getAdObject();
                if (isset($adObject['memberof'])) {
                    $groupCount = $adObject['memberof']['count'];
                    if ($groupCount > 0) {
                        for ($i = 0; $i < $groupCount; ++$i) {
                            $adGroups[] = $adObject['memberof'][$i];
                        }
                    }
                }
                if ($adObject !== null) {
                    \App\Easyjet\SwissinsideCoreBundle\Classes\Roles::updateRightsFromAd($user, $this->entityManager, $adGroups);
                }

                if (!$user->getAccessLevel() || !$user->getActive()) {
                    throw new AuthenticationException('This account is disable into the swissinside server. Please contact an administrator');
                }
            } else {
                if (!$user->getAccessLevel() || !$user->getActive()) {
                    throw new AuthenticationException('This account is disable into the swissinside server. Please contact an administrator');
                }
            }

            \App\Easyjet\SwissinsideCoreBundle\Classes\Roles::getForUser($user, $this->entityManager);
            
            $authenticatedToken = new ActiveDirectoryUserToken($user->getRoles());
            $authenticatedToken->setUser($user);
            $authenticatedToken->setEmpno($token->getEmpno());
            $authenticatedToken->setAuthenticated(true);

            return $authenticatedToken;
        }

        /**
         * Refreshes the user after being reloaded from the session.
         *
         * When a user is logged in, at the beginning of each request, the
         * User object is loaded from the session and then this method is
         * called. Your job is to make sure the user's data is still fresh by,
         * for example, re-querying for fresh User data.
         *
         * If your firewall is "stateless: true" (for a pure API), this
         * method is not called.
         *
         * @return UserInterface
         */
        public function refreshUser(UserInterface $user)
        {
          
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }
        return $user;

        // Return a User object after making sure its data is "fresh".
        // Or throw a UsernameNotFoundException if the user no longer exists.
        throw new \Exception('TODO: fill in refreshUser() inside ' . __FILE__);
        }

        /**
         * Tells Symfony to use this provider for this User class.
         */
        public function supportsClass($class)
        {
            return User::class === $class || is_subclass_of($class, User::class);
        }
    }