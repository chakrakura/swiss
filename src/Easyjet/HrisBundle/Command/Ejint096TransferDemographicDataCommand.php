<?php
namespace App\Easyjet\HrisBundle\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Easyjet\HrisBundle\Classes\Import\Ejint096ImportLogger;
use Doctrine\ORM\EntityManagerInterface;
use Exception;

class Ejint096TransferDemographicDataCommand extends Command
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
            ->setName('easyjet:EJINT096-transfer-demographic-data')
            ->setDescription('Retrieve the SGWI PGPed file, extract it, import demographic data in ProConcept and copy the pay elements csv file in the HR server')
            ->addOption(
                'force-demographic-file',
                null,
                InputOption::VALUE_REQUIRED,
                'In order to simplify testing, speccify a csv file target to import without starting the other parts of the script',
                ''
            )
            ->addOption(
                'force-test-pay-element-file',
                null,
                InputOption::VALUE_REQUIRED,
                'In order to simplify testing, speccify a pay element file target to test without starting the other parts of the script',
                ''
            )
            ->addOption(
                'fix-pay-elements',
                null,
                InputOption::VALUE_REQUIRED,
                'During test, this option allows to fix pay elements. Specify the payment month (Y-m-d)'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        $this->em = $this->container->get('doctrine')->getManager();
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);
        $hrisImporter = $this->container->get("ejint096_importer");
        $hrisImporter->setImportLogger(new Ejint096ImportLogger());

        $hrisImporter->getImportLogger()->addLine("Starting EJINT0096 processing...");
        $dbalConnexion = $this->container->get("doctrine.dbal.default_connection");
        $dbalConnexion->beginTransaction();

        $globalError = false;
       
        try {
            $hrisImporter
                ->setEntityManager($this->em)
                ->setDbalConnexion($dbalConnexion)
                ->setBashScriptsFolder(__DIR__)
                ->setForceCsvFile($input->getOption("force-demographic-file"))
                ->setForcePayElementFile($input->getOption("force-test-pay-element-file"))
                //->setTestSplitPayElement('/root/demographic-data/elements')
                ->start($input->getOption("fix-pay-elements"));

            $dbalConnexion->commit();
        } catch (\Exception $e) {
            //$output->writeLn(sprintf("The following error occurred during import process : %s", $e->getMessage()));
            $dbalConnexion->rollback();
            $hrisImporter->getImportLogger()->fatalException($e->getMessage());
            $hrisImporter->getImportLogger()->fatalException("Transaction rolled back! No data transfered!");
            $globalError = $e->getMessage();
        }

        try {
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
            $output->writeLn("<error>" . $globalError . "</error>");
            exit(2);
        } else {
            $output->writeLn("<info>Script complete</info>");
            exit(0);
        }
    }
}
