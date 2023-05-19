<?php

/**** File launch every night, it will manage :
 ***** - Synchronization of user tables
 ***** - switching the leavers to inactive in the easyjet applications
 ***** - Sending of various automatic emails
 ****/

namespace App\Easyjet\UmanBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;

class UmanMaintenanceCronCommand extends Command
{

    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;


    protected function configure(): void
    {
        $this
            // ...
            ->setName('easyjet:uman-maintenance-cron')
            ->setDescription('Synchronization of user tables');
    }

    public function __construct(EntityManagerInterface $entityManager)
    {
        // Inject it in the constructor and update the value on the class
        $this->entityManager = $entityManager;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        date_default_timezone_set("Europe/London");
        ini_set('memory_limit', '1024M');
        error_reporting(0);

        $adMailSyncSuccess = true;
       
        // Launch the mail adresses synchronisation from AD to swissinside
        system("php bin/console easyjet:ad-mail-synch", $returnedVar);
      
        if ($returnedVar != 0) {
            $adMailSyncSuccess = false;
        }

        // Creation of the list of rights for all applications
        $applicationsRights = NULL;

        $sql = "SELECT applications.nom, MIN(types_users.id) AS id_type
                FROM applications, types_users
                WHERE applications.id = types_users.id_appli
                GROUP BY id_appli";

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $applications = $stmt->executeQuery()->fetchAllAssociative();

        $inEleave = '';

        foreach ($applications as $application) {

            $applicationsRights[$application['nom']] = $application['id_type'];
            if ($application['nom'] == "eLeave") {
                $inEleave .= "," . $application['id_type'];
            }
        }
        $inEleave = substr($inEleave, 1);

        // Creation of rights for new entrants starting today for non-offices
        $sql = "SELECT * FROM users 
                WHERE engagement_date='" . date("Y-m-d") . "' 
                AND date_validation!='0000-00-00' 
                AND (type_employe = 2 OR type_employe = 3)";

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $users = $stmt->executeQuery()->fetchAllAssociative();

        foreach ($users as $user) {

            $sql = "DELETE FROM assoc_droits_users 
                    WHERE id_user='" . $user['id_user'] . "'";
            $this->entityManager->getConnection()->prepare($sql)->executeQuery();

            // Association of rights in the uMan database
            $sql = "INSERT INTO assoc_droits_users (id_user, id_type_user)
                    VALUES
                            ('" . $user['id_user'] . "', '" . $applicationsRights['UManager'] . "')," . // uMan
                "('" . $user['id_user'] . "', '" . $applicationsRights['eFTR'] . "')," . // eFTR
                "('" . $user['id_user'] . "', '" . $applicationsRights['eLeave'] . "')," . // eLeave
                "('" . $user['id_user'] . "', '" . $applicationsRights['ePaySlip'] . "')," . // ePaySlip
                "('" . $user['id_user'] . "', '" . $applicationsRights['eSep'] . "')," . // eSep
                "('" . $user['id_user'] . "', '" . $applicationsRights['eWish'] . "')"; // eWish
            $this->entityManager->getConnection()->prepare($sql)->executeQuery();
        }

        if ($inEleave) {

            // Creation of rights for new entrants starting today
            $sql = "SELECT * FROM users 
            WHERE engagement_date='" . date("Y-m-d") . "' AND
            type_employe=1 AND 
            id_user NOT IN(SELECT id_user FROM assoc_droits_users 
            WHERE id_type_user IN($inEleave))";

            $stmt = $this->entityManager->getConnection()->prepare($sql);
            $users = $stmt->executeQuery()->fetchAllAssociative();

            $sql = "SELECT * FROM applications WHERE initiaux='EL'";
            $stmt = $this->entityManager->getConnection()->prepare($sql);
            $eleave = $stmt->executeQuery()->fetchAssociative();

            // We retrieve the id of the right 0 for eleave
            $sql = "SELECT  * FROM  types_users WHERE id_appli='" . $eleave['id'] . "' AND valeur=0";
            $stmt = $this->entityManager->getConnection()->prepare($sql);
            $eleaveSimpleUser = $stmt->executeQuery()->fetchAssociative();

            // Association of rights in the uMan database
            foreach ($users as $user) {
                $sql = "INSERT INTO assoc_droits_users (id_user, id_type_user) VALUES
                    ('" . $user['id_user'] . "', '" . $eleaveSimpleUser['id'] . "')"; // eleave
                $stmt = $this->entityManager->getConnection()->prepare($sql)->executeQuery();
            }
        }


        // We calculate the date of 2 months ago
        $dateLimit = date("Y-m-d", mktime(0, 0, 0, date("m") - 2, date("d"), date("Y")));
        $sql = "SELECT * FROM users 
                WHERE leave_date<'" . $dateLimit . "' 
                AND leave_date !='0000-00-00'";

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $users = $stmt->executeQuery()->fetchAllAssociative();
        // We delete the registrations of assoc_droits_users
        foreach ($users as $user) {

            $sql = "DELETE FROM assoc_droits_users 
                    WHERE id_user='" . $user['id_user'] . "'";

            $this->entityManager->getConnection()->prepare($sql)->executeQuery();
        }

        if (!$adMailSyncSuccess) {
            $output->writeln("The active directory mail synchronisation failed");
            return Command::FAILURE;
        }

        $output->writeln("Script complete");
        return Command::SUCCESS;
    }
}
