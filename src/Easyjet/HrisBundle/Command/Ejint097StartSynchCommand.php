<?php

namespace App\Easyjet\HrisBundle\Command;

use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Easyjet\HrisBundle\Classes\Import\Ejint097ImportLogger;

class Ejint097StartSynchCommand extends Command
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
        $date = mktime(0, 0, 0, date('m'), (int) date('d'), (int) date('Y'));

        $this
            ->setName('easyjet:EJINT097-start-synch')
            ->setDescription('Retrieve the gross to net file, generate paysalip file and send zip to SafeGuard shared folder')
            ->addOption(
                'm',
                null,
                InputOption::VALUE_OPTIONAL,
                'Salary month',
                date("m", $date)
            )
            ->addOption(
                'y',
                null,
                InputOption::VALUE_OPTIONAL,
                'Salary year',
                date("Y", $date)
            )
            ->addOption(
                'export-salary-certificate',
                null,
                InputOption::VALUE_NONE,
                'Specify this argument if you want to export salary certificates'
            )
            ->addOption(
                'ignore-payslips',
                null,
                InputOption::VALUE_NONE,
                'Specify this argument if you want to ignore payslip processing. This is so useful with the --exportsalary-certificate argument'
            )
            ->addOption(
                'supplemental',
                null,
                InputOption::VALUE_NONE,
                'If specified, only crewy with multiple payslip for the specific month are going to be exported (only the last of their payslip)'
            )
        ;
    }

    protected function displayMessage($msg, $verbosity) {
        if ($this->output->getVerbosity() >= $verbosity) {
            $this->output->writeln($msg);
        }
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ini_set("memory_limit", "4G");
      
        $this->em = $this->container->get('doctrine')->getManager();
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);
        $hrisImporter = $this->container->get("ejint097_importer");
        
        $logger = new Ejint097ImportLogger();
        $hrisImporter->setImportLogger(new Ejint097ImportLogger());

        $year = (int) $input->getOption("y");
        $month = (int) $input->getOption("m");

        $globalError = false;

        $dbalConnexion = $this->container->get("doctrine.dbal.default_connection");
        $dbalConnexion->beginTransaction();
        if (!$globalError) {
            try {
                if (!$input->getOption("ignore-payslips")) {
                    $hrisImporter
                        ->setEntityManager($this->em)
                        ->setDbalConnexion($dbalConnexion)
                        ->setBashScriptsFolder(__DIR__)
                        ->start($month, $year, $input->getOption("supplemental"));
                    $dbalConnexion->commit();
                }

            } catch (\Exception $e) {
                $globalError = $e->getMessage();
                if($globalError == "file_not_exported"){
                    $output->writeLn("The file has never been exported successfully this month");
                }
                else {
                    $output->writeLn(sprintf("The following error occurred during import process : %s", $globalError));
                    $dbalConnexion->rollback();
                    $hrisImporter->getImportLogger()->fatalException($globalError);
                    $hrisImporter->getImportLogger()->fatalException("Transaction rolled back! No data transfered!");
                }
            }
        }

        if (!$globalError) {
            try {
                if ($input->getOption("export-salary-certificate")) {
                    $certificateImporter = $this->container->get("ejint097b_importer");
                    $certificateImporter
                        ->setImportLogger($hrisImporter->getImportLogger())
                        ->setEntityManager($this->em)
                        ->setDbalConnexion($dbalConnexion)
                        ->setBashScriptsFolder(__DIR__)
                        ->setExpectedEmpnosInGross2Net($hrisImporter->getExpectedEmpnosInGross2Net())
                        ->start($month, $year);
                }
            } catch (Exception $e) {
                $globalError = $e->getMessage();
                $output->writeLn(sprintf("The following error occurred during import process : %s", $e->getMessage()));
            }
        }

        try { 
            $notificationTo =  $this->parameterBag->get("hris.ejint097_transfer_notification");
            if ($globalError) {
                $hrisImporter->getImportLogger()->addLine(sprintf("No success message sent to '%s'", implode(", ", $notificationTo)));
            } else {
                if ($hrisImporter->getImportLogger()->hasSuccessfullyParsedFile()) {
                    $hrisImporter->sendNotification($notificationTo);
                    $hrisImporter->getImportLogger()->addLine(sprintf("Mail sent to recipients '%s'", implode(", ", $notificationTo)));
                }
            }
            $loggerEntity = $hrisImporter->getImportLogger()->getEntity();

            $this->em->persist($loggerEntity);
            $this->em->flush();
        } catch (\Exception $e) {
            $output->writeLn($e->getMessage());
            if (!$globalError) {
                exit(3);
            }
        }

        if ($globalError) {
            if($globalError == "file_not_exported"){
                $output->writeLn("<warning>The file has never been exported successfully this month</warning>");
                exit(1);  
            }
            else {
                $output->writeLn("<error>" . $globalError . "</error>");
                exit(2);
            }
        } else {
            $output->writeLn("<info>Script complete</info>");
            exit(0);
        }
    }
}
