<?php

namespace App\Easyjet\HrisBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use App\Easyjet\HrisBundle\Classes\EmployeRankingReport\WebServiceParser;
use App\Easyjet\HrisBundle\Classes\Import\UsersImportLogger;

class ImportEmployeeRankingReportCommand extends Command
{
    private $parameterBag;
    private $em;
    private $container;

    public function __construct(ParameterBagInterface $parameterBag, EntityManagerInterface $em, ContainerInterface $container)
    {
        $this->parameterBag = $parameterBag;
        $this->container = $container;
        $this->em = $em;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName('easyjet:import-employee-ranking-report')
            ->setDescription('Import the employee ranking report directly from the workday API')
            ->addOption(
                'feed-claims',
                null,
                InputOption::VALUE_NONE,
                'Create the new month in claims if not created yet',
                null
            )
            ->addOption(
                'update-users',
                null,
                InputOption::VALUE_NONE,
                'Update / create new users in swissinside based on the last data provided from the Workday API',
                null
            )
            ->addOption(
                'disable-leavers',
                null,
                InputOption::VALUE_REQUIRED,
                'Disable leavers in AD who left at the specified number of days. Set -1 to check everyone independently of the leave date',
                null
            )
            ->addOption(
                'dry-run',
                null,
                InputOption::VALUE_NONE,
                'Do a simulation. Nobody is written in AD or swissinside',
                null
            )
            ->addOption(
                'force-date',
                null,
                InputOption::VALUE_REQUIRED,
                'Force a specific date for the import',
                date("Y-m")
            );
    }

    protected function displayMessage($msg, $verbosity)
    {
        if ($this->output->getVerbosity() >= $verbosity) {
            $this->output->writeln($msg);
        }
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $forceDateString = $input->getOption("force-date");
        $forceDate = \DateTime::createFromFormat("Y-m-d", $forceDateString . "-01");

        if (!$forceDate) {
            $output->writeLn("<error>The date format is wrong</error>");
            exit(2);
        }
        $this->output = $output;

        // Get the list of people to notify when import is done
        try {
            $emailsToNotify = $this->parameterBag->get('hris.users_import_email_addresses');
        } catch (InvalidArgumentException $e) {
            $output->writeLn("<error>Please set the hris.users_import_email_addresses parameter before to run this command</error>");
            exit(2);
        }

        // Get ITSD email id, to send an alert when a mover is found.
        try {
            $emailsToNotifyITSD = $this->parameterBag->get('hris.users_import_email_addresses');
        } catch (InvalidArgumentException $e) {
            $output->writeLn("<error>Please set the hris.mover_alert_to_itsd parameter before to run this command</error>");
            exit(2);
        }


        $workdayUrl = $this->parameterBag->get("hris.workday.employeeRankingReport.url");
        $workdayLogin = $this->parameterBag->get("hris.workday.employeeRankingReport.login");
        $workdayPassword = $this->parameterBag->get("hris.workday.employeeRankingReport.password");

        $parser = new WebServiceParser($workdayUrl, $workdayLogin, $workdayPassword);
        $parser->getData();


        // Disable the Doctrine Logger to limit the memory used
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        // Load the importer service
        $usersImporter = $this->container->get("hris_users_importer");
        $usersDisabler = $this->container->get("hris_users_disabler");

        $dryRun = $input->getOption("dry-run");

        $usersImporter->setDryRun($dryRun);
        $usersDisabler->setDryRun($dryRun);


        $logger = new UsersImportLogger(
            $this->container->get("twig"),
            "@EasyjetHris/Report/userImport.html.twig",
            $dryRun
        );

        $usersImporter->setImportLogger($logger);
        $usersDisabler->setImportLogger($logger);

        if ($dryRun) {
            $this->displayMessage("Starting dry run mode ...", OutputInterface::VERBOSITY_VERBOSE);
            $usersImporter->getImportLogger()->addLine("Starting dry run mode ...");
        }

        // Start a mySQL transaction in order to roolback in case of failure
        $dbalConnexion = $this->container->get("doctrine.dbal.default_connection");
        $dbalConnexion->beginTransaction();
        $globalError = false;

        if ($input->getOption("update-users")) {
            $this->displayMessage("update-users argument detected. Starting the users update process ...", OutputInterface::VERBOSITY_VERBOSE);
            try {
                $usersImporter
                    ->setEntityManager($this->em)
                    ->setDbalConnexion($dbalConnexion)
                    ->start($parser);
            } catch (Exception $e) {
                // In case of any failure, the transaction is rolled back and the log is updated
                $usersImporter->getImportLogger()->fatalException($e->getMessage());
                $usersImporter->getImportLogger()->fatalException("Transaction rolled back! No data transfered!");
                $globalError = $e->getMessage();
            }
        } else {
            $this->displayMessage("update-users argument not detected. Ignoring the users update process ...", OutputInterface::VERBOSITY_VERBOSE);
        }


        if ($input->getOption("feed-claims")) {

            $this->displayMessage("feed-claims argument detected. Start feeding the new claims month ... (" . $forceDate->format("Y-m") . ")", OutputInterface::VERBOSITY_VERBOSE);
            try {
                // Create the claims row if required...
                $usersImporter->getImportLogger()->addLine("Looking for existing claims import for the current month...");
                if ($this->em->getRepository("App\Easyjet\OtpBundle\Entity\OtpImportBatch")->hasBatchForCurrentMonth($forceDate)) {
                    $usersImporter->getImportLogger()->addLine("Claims import found for this month. Ignoring claims creation...");
                } else {
                    $usersImporter->getImportLogger()->addLine("Claims import not found for this month. Starting claims creation...");
                    $otpImporter = $this->container->get("otp_import");
                    $user = $this->em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->findOneBy(array("logUser" => "cron"));
                    $currentMonth = new \DateTime();
                    $currentMonth->setDate($forceDate->format("Y"), $forceDate->format("m"), 1);
                    $currentMonth->setTime(0, 0, 0);

                    $previousMonth = clone $currentMonth;
                    $previousMonth->sub(new \DateInterval("P1M"));

                    $otpImporter->start($parser, $user, $currentMonth, $previousMonth, true);
                    $usersImporter->getImportLogger()->addLine("Claims batch created successfully");
                }
            } catch (Exception $e) {
                $globalError = $e->getMessage();
            }
        } else {
            $this->displayMessage("feed-claims argument not detected. Ignoring the claims feeding process ...", OutputInterface::VERBOSITY_VERBOSE);
        }

        if ($input->getOption("disable-leavers")) {
            $usersDisabler
                ->setEntityManager($this->em)
                ->setDbalConnexion($dbalConnexion)
                ->start($parser, $input->getOption("disable-leavers"));
        } else {
            $this->displayMessage("disable-leavers argument not detected. Ignoring the leavers deactivation ...", OutputInterface::VERBOSITY_VERBOSE);
        }


        try {
            if ($dryRun) {
                $usersImporter->getImportLogger()->addLine("The dry mode is activated. All transactions are cancelled");
                $dbalConnexion->rollback();
            } else {
                if ($globalError) {
                    throw new Exception("Errors encountered : $globalError. Initiate transaction rollback...");
                } else {
                    $dbalConnexion->commit();
                }
            }
        } catch (Exception $e) {
            $dbalConnexion->rollback();
            $usersImporter->getImportLogger()->fatalException($e->getMessage());
            $usersImporter->getImportLogger()->fatalException("Transaction rolled back! No data transfered!");
            $globalError = $e->getMessage();
        }


        try {
            // Save the log in the database
            $this->em->clear();
            $usersImporter->getImportLogger()->parsedSuccessfully();
            $loggerEntity = $usersImporter->getImportLogger()->getEntity();


            $this->em->persist($loggerEntity);
            $this->em->flush();

            // Mailing if required
            if ($input->getOption("update-users") && $usersImporter->getImportLogger()->getNotifyHR()) {
                $mailer = $this->container->get("hris_mailer");
                $mailer->sendMail($loggerEntity, $emailsToNotify);
                //send mail to SD to disabled swiss AD rights in case of movers,,,
                $moverArray = $usersImporter->getImportLogger()->getMoverReport();
                if (count($moverArray) > 0) {
                    $mailer->sendMoversMail($moverArray, $emailsToNotifyITSD);
                }
            }
        } catch (Exception $e) {
            // If the logger can't be saved but the data have been imported, exit script with code 3
            $output->writeLn($e->getMessage());
            if (!$globalError) {
                exit(3);
            }
        }

        if ($globalError) {
            // If any error during import but log created, exit with code 2 and display the message
            $output->writeLn("<error>" . $globalError . "</error>");
            exit(2);
        } else {
            // If no errors and log created, show success message and with exit code 0
            $output->writeLn("<info>Script complete</info>");
            exit(0);
        }
    }
}
