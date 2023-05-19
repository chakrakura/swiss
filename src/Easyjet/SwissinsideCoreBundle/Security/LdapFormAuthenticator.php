<?php

namespace App\Easyjet\SwissinsideCoreBundle\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\RequestStack;

use App\Easyjet\SwissinsideCoreBundle\Security\AdRightsManagement;

class LdapFormAuthenticator extends AbstractFormLoginAuthenticator
{
    use TargetPathTrait;

    /**
     * @var EntityManager
     */
    private $entityManager;
    private $urlGenerator;

    private $csrfTokenManager;

    protected $ldapServerAddress;
    protected $ldapAdRights;

    /**
     * @var string Ldap connexion string
     */
    protected $ldapBind;
    protected $ldapFind;

    /**
     * @var string Root folder of the ldap directory
     */
    protected $ldapRoot;
    /**
     * @var string Active directory administrator username
     */
    protected $ldapAdminUsername;
    /**
     * @var string Active directory administrator password
     */
    protected $ldapAdminPassword;
    protected $allowUserToSwitchUser;
    protected $ldapFindByEmployeeId;
    protected $ldapManageableGroupsFilter;
    protected $ldapAdManagerGroup;
    protected $antiBruteForceMaxNbAttempts;
    protected $antiBruteForceLockTime;
    private $requestStack;

    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, CsrfTokenManagerInterface $csrfTokenManager, string $ldapServerAddress, string $ldapAdRights, string $ldapFind, string $ldapBind, string $ldapRoot, string $ldapAdminUsername, string $ldapAdminPassword, string $allowUserToSwitchUser, string $ldapFindByEmployeeId, string $ldapManageableGroupsFilter, string $ldapAdManagerGroup, string $antiBruteForceMaxNbAttempts, string $antiBruteForceLockTime, RequestStack $requestStack)
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->ldapServerAddress = $ldapServerAddress;
        $this->ldapAdRights = $ldapAdRights;
        $this->ldapFind = $ldapFind;
        $this->ldapBind = $ldapBind;
        $this->ldapRoot = $ldapRoot;
        $this->ldapAdminUsername = $ldapAdminUsername;
        $this->ldapAdminPassword = $ldapAdminPassword;
        $this->allowUserToSwitchUser = $allowUserToSwitchUser;
        $this->ldapFindByEmployeeId = $ldapFindByEmployeeId;
        $this->ldapManageableGroupsFilter = $ldapManageableGroupsFilter;
        $this->ldapAdManagerGroup = $ldapAdManagerGroup;
        $this->antiBruteForceMaxNbAttempts = $antiBruteForceMaxNbAttempts ? $antiBruteForceMaxNbAttempts : 5;
        $this->antiBruteForceLockTime = $antiBruteForceLockTime ? $antiBruteForceLockTime : 30;
        $this->requestStack = $requestStack;
    }


    public function supports(Request $request)
    {
        if ($request->query->get('redirectTo')) {
            $url = urldecode($request->query->get('redirectTo'));
            if (substr($url, 0, 1)) {
                $request->getSession()->set("REDIRECT_AFTER_LOGIN", $url);
            }
        }
        return '_swissinside_login' === $request->attributes->get('_route') && $request->isMethod('POST');
    }


    public function getCredentials(Request $request)
    {
        $credentials = [
            'username' => $request->request->get('_username'),
            'password' => $request->request->get('_password'),
            'csrf_token' => $request->request->get('_csrf_token'),
        ];
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['username']
        );
        return $credentials;
    }


    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $session = $this->requestStack->getSession();
        if (empty($session->get('user_switch_allowed'))) {
            $switchUser = false;
        }
        if (!$this->allowUserToSwitchUser) {
            $switchUser = false;
        }

        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }
        
        $username = $credentials['username'];
        $password = $credentials['password'];

        $ldapConnexion = @ldap_connect($this->ldapServerAddress);
        $token = new \App\Easyjet\SwissinsideCoreBundle\Security\ActiveDirectoryUserToken();
        
        ldap_set_option($ldapConnexion, LDAP_OPT_REFERRALS, 0);
        ldap_set_option($ldapConnexion, LDAP_OPT_PROTOCOL_VERSION, 3);

        if (!$ldapConnexion) {
            throw new AuthenticationException('Unable to contact the Active directory server. Please try later.');
        }

        $swissinsideUser = $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findOneBy(array('logUser' => $username));
        if (!$swissinsideUser) {
            // Auto create external user if not found
            $swissinsideUser = $this->getExternalUser($ldapConnexion, $username);
        }

        if ($swissinsideUser) {
            $this->entityManager->persist($swissinsideUser);
            $this->entityManager->flush();
        } else {
            throw new AuthenticationException('Unable to create the external user. Maybe the user does not exist in AD or his employee ID is not set');
        }

        // Reset locking status if time passed
        $swissinsideUser->reinitLock();
        $this->entityManager->persist($swissinsideUser);
        $this->entityManager->flush();

        if ($swissinsideUser->getLockedUntil()) {
            throw new AuthenticationException('This account is currently locked. Please wait before to try again');
        }

        $binding = @ldap_bind($ldapConnexion, preg_replace('/%u/', $username, $this->ldapBind), $password);
        if (!$binding) {
            $swissinsideUser->loginFailure($this->antiBruteForceMaxNbAttempts, $this->antiBruteForceLockTime);
            $this->entityManager->persist($swissinsideUser);
            $this->entityManager->flush();
            throw new AuthenticationException('Unable to authenticate against the active directory server.');
        } else {
            $swissinsideUser->reinitLock(true);
            $this->entityManager->persist($swissinsideUser);
            $this->entityManager->flush();
        }
        $LdapRetrievedUser = ldap_search($ldapConnexion, $this->ldapRoot, preg_replace('/%u/', $username, $this->ldapFind));
        $info = ldap_get_entries($ldapConnexion, $LdapRetrievedUser);

        if ($info['count'] == 0) {
            throw new AuthenticationException('Unable to retrieve users data from the Active directory server.');
        }

        if ($info['count'] > 1) {
            throw new AuthenticationException('It seems that many %s correspondances has been found from Active directory server. Authentification aborted');
        }

        $empno = isset($info[0]['employeeid']) ? $info[0]['employeeid'][0] : '';

        if (strlen(trim($empno)) < 3) {
            throw new AuthenticationException("EmployeeId in AD must meet the standard (at least 3 non blank characters) but it doesn't. Please contact an Administrator.");
        }
        //$empno = "700215";
        if (!$empno) {
            throw new AuthenticationException('Employee Id not found into the Active directory user entry. Please contact an administrator');
        }

        $token->empno = $empno;
        $token->setUser($empno);
        $token->setAdObject($info[0]);

        $authToken = $userProvider->authenticate($token);

        // Check application that user has right to manage
        $ldapUser = $info[0];

        $_SESSION['SESS_AD_RIGHTS_ACCESS'] = false;

        if ($this->ldapAdRights) {
            $adRightsManagement = new AdRightsManagement($this->ldapServerAddress, preg_replace('/%u/', $this->ldapAdminUsername, $this->ldapBind), $this->ldapAdminPassword, $this->ldapRoot, $this->entityManager);
            
            $_SESSION['SESS_AD_RIGHTS_ACCESS'] = in_array($this->ldapAdManagerGroup, $ldapUser['memberof']);
            if ($_SESSION['SESS_AD_RIGHTS_ACCESS']) {
                $authToken->getUser()->addRole('ROLE_SWISSINSIDE_AD_GROUP_MANAGER');
            }
            $_SESSION['SESS_AD_RIGHTS_ACTIVATED'] = true;
        } else {
            $_SESSION['sess_admin_ldap_groups'] = array();
            $_SESSION['SESS_AD_RIGHTS_ACTIVATED'] = false;
        }
        
        // Authentification
        $_SESSION['sess_login'] = $token->getEmpno();
        $_SESSION['sess_password'] = $authToken->getUser()->getPassword();
        $_SESSION['sess_droits'] = $authToken->getUser()->getAccessLevel();
        $session->set('user_switch_allowed', 1);

        if (!$swissinsideUser) {
            throw new CustomUserMessageAuthenticationException('Username could not be found.');
        }

        return $swissinsideUser;
    }


    public function checkCredentials($credentials, UserInterface $user)
    {
        //in this scenario, this method is by-passed since user authentication need to be managed before in getUser method.
        return true;
    }


    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $providerKey)) {
            if ($request->getSession()->get('REDIRECT_AFTER_LOGIN')) {
                return new RedirectResponse($request->getSession()->get('REDIRECT_AFTER_LOGIN'));
            } else {
                return new RedirectResponse($targetPath);
            }
        }
        return new RedirectResponse($this->urlGenerator->generate('index'));
    }

    protected function getLoginUrl()
    {
        return $this->urlGenerator->generate('_swissinside_login');
    }

    private function getExternalUser($ldapConnexion, $username)
    {
        $binding = @ldap_bind($ldapConnexion, preg_replace('/%u/', $this->ldapAdminUsername, $this->ldapBind), $this->ldapAdminPassword);
        if (!$binding) {
            throw new AuthenticationException('Unable to authenticate against the active directory server.');
        }
        $LdapRetrievedUser = ldap_search($ldapConnexion, $this->ldapRoot, preg_replace('/%u/', $username, $this->ldapFind));
        $info = ldap_get_entries($ldapConnexion, $LdapRetrievedUser);
        
        $user = \App\Easyjet\SwissinsideCoreBundle\Entity\User::newExternal(
                $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\TypesEftr')->findOneBy(array('type' => 'EC'))
        );
        $prenom = '';

        $empno = isset($info[0]['employeeid']) ? $info[0]['employeeid'][0] : '';
        if (strlen(trim($empno)) < 3) {
            return null;
        }

        if (isset($info[0]['givenname'][0])) {
            $prenom = $info[0]['givenname'][0];
        }
        $nom = '';
        if (isset($info[0]['sn'][0])) {
            $nom = $info[0]['sn'][0];
        }

        $email = '';
        if (isset($info[0]['mail'][0])) {
            $email = $info[0]['mail'][0];
        }
        if (!$prenom && !$nom) {
            $prenom = $info[0]['displayname'][0];
        }

        $user->setLogUser('external-'.$empno)
            ->setPwdUser(md5(uniqid()))
            ->setLastname($nom)
            ->setFirstname($prenom)
            ->setEmailUser($email)
            ->setManuel(1);
        
        $swissinsideUser = $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findOneBy(array('logUser' => $user->getLogUser()));
        if ($swissinsideUser) {
            return $swissinsideUser;
        } else {
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            return $this->entityManager->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findOneBy(array('logUser' => $user->getLogUser()));
        }
    }

    
}