<?php

namespace App\Easyjet\SwissinsideCoreBundle\Listener;

use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\ORM\EntityManagerInterface;
use App\Security\ActiveDirectoryUserToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class InitControllerListener
{
    /**
     * Set environement in order to allow old uman functions to use the mysql_* functions.
     *
     * @param string $mysqlHost
     * @param string $mysqlLogin
     * @param string $mysqlPassword
     * @param string $mysqlDb
     *
     * @throws \Easyjet\SwissinsideCoreBundle\Listener\Exception
     */
    private $em;
    private $tokenStorage;

    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct($mysqlHost, $mysqlLogin, $mysqlPassword, $mysqlDb, EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage)
    {
        $this->em = $entityManager;
        $this->tokenStorage = $tokenStorage;
        try {
            $conn = mysqli_connect($mysqlHost, $mysqlLogin, $mysqlPassword, $mysqlDb);
            $conn->query('SET NAMES utf8');
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function onControlerFound(\Symfony\Component\HttpKernel\Event\ControllerEvent $event)
    {
        // Management of the transition phase
        $token = $this->tokenStorage->getToken();
        if (isset($token) && $token->getUser() && $token->getUser()->getUsername()) {
            $myself = $this->em->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findByLogUser($token->getUsername());
            $_SESSION['TRANSITION_STATUS'] = 'after';
        }

        // Updating groups at the time of AD transition
        if (isset($_SESSION) && !empty($_SESSION['TRANSITION_STATUS']) && $_SESSION['TRANSITION_STATUS'] == 'current') {
            try {
                $sql = 'UPDATE 
                            types_users 
                        LEFT JOIN applications ON types_users.id_appli = applications.id
                        SET types_users.ad_group="CN=EZS Swissinside - Staff travel User,OU=Ressources,OU=Security Groups,OU=EZS Users,DC=europe,DC=EASYJET,DC=LOCAL"
                        WHERE 
                            applications.initiaux = "STRV" AND 
                            types_users.type="User" AND 
                            (types_users.ad_group IS NULL or types_users.ad_group = "")';

                $stmt = $this->em->getConnection()->prepare($sql);
                $stmt->execute();

                $sql = 'UPDATE 
                            types_users 
                        LEFT JOIN applications ON types_users.id_appli = applications.id
                        SET types_users.ad_group="CN=EZS Swissinside - Staff travel Admin,OU=Ressources,OU=Security Groups,OU=EZS Users,DC=europe,DC=EASYJET,DC=LOCAL"
                        WHERE 
                            applications.initiaux = "STRV" AND 
                            types_users.type="Admin" AND 
                            (types_users.ad_group IS NULL or types_users.ad_group = "")';

                $stmt = $this->em->getConnection()->prepare($sql);
                $stmt->execute();

                $sql = 'UPDATE 
                            types_users 
                        LEFT JOIN applications ON types_users.id_appli = applications.id
                        SET types_users.ad_group="CN=EZS Swissinside - OTP Admin,OU=Ressources,OU=Security Groups,OU=EZS Users,DC=europe,DC=EASYJET,DC=LOCAL"
                        WHERE 
                            applications.initiaux = "OTP" AND 
                            types_users.type="Admin" AND 
                            (types_users.ad_group IS NULL or types_users.ad_group = "")';

                $stmt = $this->em->getConnection()->prepare($sql);
                $stmt->execute();
            } catch (\Exception $e) {
            }
        }

        // Updating groups at the time of AD transition
        if (isset($_SESSION) && !empty($_SESSION['TRANSITION_STATUS']) && $_SESSION['TRANSITION_STATUS'] == 'after') {
            $sql = 'UPDATE 
                        types_users 
                    LEFT JOIN applications ON types_users.id_appli = applications.id
                    SET types_users.ad_group="CN=EZS Swissinside - CEM User,OU=Ressources,OU=Security Groups,OU=EZS Users,DC=europe,DC=EASYJET,DC=LOCAL"
                    WHERE 
                        applications.initiaux = "CEM" AND 
                        types_users.type="User" AND 
                        (types_users.ad_group IS NULL or types_users.ad_group = "")';

            $stmt = $this->em->getConnection()->prepare($sql);
            $stmt->execute();

            $sql = 'UPDATE 
                        types_users 
                    LEFT JOIN applications ON types_users.id_appli = applications.id
                    SET types_users.ad_group="CN=EZS Swissinside - CEM Base or Line Manager,OU=Ressources,OU=Security Groups,OU=EZS Users,DC=europe,DC=EASYJET,DC=LOCAL"
                    WHERE 
                        applications.initiaux = "CEM" AND 
                        types_users.type="Base or line manager" AND 
                        (types_users.ad_group IS NULL or types_users.ad_group = "")';

            $stmt = $this->em->getConnection()->prepare($sql);
            $stmt->execute();

            $sql = 'UPDATE 
                        types_users 
                    LEFT JOIN applications ON types_users.id_appli = applications.id
                    SET types_users.ad_group="CN=EZS Swissinside - FDTR User,OU=Ressources,OU=Security Groups,OU=EZS Users,DC=europe,DC=EASYJET,DC=LOCAL"
                    WHERE 
                        applications.initiaux = "FDTR" AND 
                        types_users.type="User" AND 
                        (types_users.ad_group IS NULL or types_users.ad_group = "")';

            $stmt = $this->em->getConnection()->prepare($sql);
            $stmt->execute();

            $sql = 'UPDATE 
                        types_users 
                    LEFT JOIN applications ON types_users.id_appli = applications.id
                    SET types_users.ad_group="CN=EZS Swissinside - FDTR Admin,OU=Ressources,OU=Security Groups,OU=EZS Users,DC=europe,DC=EASYJET,DC=LOCAL"
                    WHERE 
                        applications.initiaux = "FDTR" AND 
                        types_users.type="Admin" AND 
                        (types_users.ad_group IS NULL or types_users.ad_group = "")';

            $stmt = $this->em->getConnection()->prepare($sql);
            $stmt->execute();
        }
    }
}
