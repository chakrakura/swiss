<?php

namespace App\Easyjet\UmanBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Doctrine\ORM\EntityManagerInterface;


class AdMailSynchCommand extends Command
{
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     *
     * @var \Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface
     */
    private $params;

    protected function configure(): void
    {
        $this
            // ...
            ->setName('easyjet:ad-mail-synch')
            ->setDescription('Import the email adresses from AD to swissinside');
    }

    public function __construct(EntityManagerInterface $entityManager, ParameterBagInterface $params)
    {
        $this->entityManager = $entityManager;
        $this->params = $params;

        parent::__construct();
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $ldapServer   =  $this->params->get("ldap_server");
        $ldapBind     =  $this->params->get("ldap_bind");
        $ldapFind     =  $this->params->get("ldap_find_by_emp_id");
        $ldapRoot     =  $this->params->get("ldap_root");
        $ldapUser     =  $this->params->get("ldap_ad_user");
        $ldapPassword =  $this->params->get("ldap_ad_password");
       
        try {

            $ldapConnexion = @ldap_connect($ldapServer) or die("Unable to connect");

            ldap_set_option($ldapConnexion, LDAP_OPT_REFERRALS, 0);
            ldap_set_option($ldapConnexion, LDAP_OPT_PROTOCOL_VERSION, 3);

            if (!$ldapConnexion) {
                throw new AuthenticationException('Unable to contact the Active directory server. Please try later.');
            }

            $binding = \ldap_bind($ldapConnexion, \preg_replace("/%u/", $ldapUser, $ldapBind), $ldapPassword);
            if (!$binding) {
                throw new \Exception('Unable to authenticate against the active directory server.');
            }

            $sql = "SELECT id_user, log_user FROM users WHERE log_user!='' AND active_user=1";
            $stmt = $this->entityManager->getConnection()->prepare($sql);
            $users = $stmt->executeQuery()->fetchAllAssociative();

            foreach ($users as $user) {

                $LdapRetrievedUser = \ldap_search($ldapConnexion, $ldapRoot, \preg_replace("/%u/", $user['log_user'], $ldapFind));
                $infos = \ldap_get_entries($ldapConnexion, $LdapRetrievedUser);

                if ($infos['count'] > 0) {
                    if (!isset($infos[0]["mail"]) || !isset($infos[0]["mail"][0]) || !\trim($infos[0]["mail"][0])) {
                        continue;
                    }
                    $sql = "UPDATE users SET email_user=:email WHERE id_user=:id_user";
                    $updateStmt =  $this->entityManager->getConnection()->prepare($sql);
                    $updateStmt->bindParam("email", $infos[0]["mail"][0]);
                    $updateStmt->bindParam("id_user", $user['id_user'], \PDO::PARAM_INT);
                    $updateStmt->executeQuery();

                    $output->writeLn($user['log_user'] . " user update with the new '" . $infos[0]["mail"][0] . "' email");
                }
            }
            return Command::SUCCESS;
        } catch (\Exception $e) {
            $output->writeln("Error during process : " . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
