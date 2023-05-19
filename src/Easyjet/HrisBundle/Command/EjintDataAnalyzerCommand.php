<?php
namespace App\Easyjet\HrisBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Easyjet\HrisBundle\Classes\Import\Ejint096TesterLogger;
use App\Easyjet\SwissinsideCoreBundle\Classes\Smb;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Ejint096TestDataCommand runs the testing data commands
 */

class EjintDataAnalyzerCommand extends Command
{
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * Configure the testing commands
     * @return null
     */

    private $parameterBag;
   
    private $container;

    public function __construct(ParameterBagInterface $parameterBag, EntityManagerInterface $em, ContainerInterface $container)
    {
         $this->parameterBag = $parameterBag;
         $this->container = $container;
         $this->em = $em;
         parent::__construct();
    }

    protected function configure()
    {
        $date = mktime(0, 0, 0, date('m')-1, (int)date('d'), (int)date('Y'));

        $this
            ->setName('easyjet:data-analyzer')
            ->setDescription('Allow to check data validity and compare data between systems')
            ->addOption(
                'demographic-data-file',
                null,
                InputOption::VALUE_REQUIRED,
                'Start the data validity check for the demographic file passed in this argument'
            )
            ->addOption(
                'pay-elements-file',
                null,
                InputOption::VALUE_REQUIRED,
                'Start the data validity check for the pay elements file passed in this argument'
            );
    }

    /**
     * Run the analyzer command
     * @param  InputInterface  $input  User input
     * @param  OutputInterface $output Command output
     * @return null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Set the memory limit
        ini_set('memory_limit', '1024M');
        
        // get the command started in order to save it in the log result
        $command = "php bin/console";
        foreach ($input->getArguments() as $currentArg) {
            $command .= " $input";
        }

        // Get the doctrine manager and disable the sql in order to limit the used memory
        $this->em = $this->container->get('doctrine')->getManager();
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        // Get the tester object from the dependency injector ...
        $hrisTester = $this->container->get("ejint096_tester");
        // ... and initialize it
        $hrisTester->setTesterLogger(new Ejint096TesterLogger());
        $hrisTester->getTesterLogger()->setCommand($command);


        $hrisTester->getTesterLogger()->addLine("Starting EJINT0096 testing...");

        // Start a database transaction
        $dbalConnexion = $this->container->get("doctrine.dbal.default_connection");
        $dbalConnexion->beginTransaction();


        $hrisTester
            ->setEntityManager($this->em)
            ->setDbalConnexion($dbalConnexion);

        // Store if there was a unrecoverable error ...
        $globalError = false;


        try {
            // --demographic-data-file : Test the demographic file
            if ($input->getOption('demographic-data-file')) {
                $demographicFile = $input->getOption('demographic-data-file');
                if (!is_file($demographicFile)) {
                    throw new \Exception(sprintf("The '%s' file does not exist", $demographicFile));
                }
                $hrisTester->testDemographicDataFile($demographicFile);
            }

            // --pay-elements-file : Test the payelement file based on the configuration
            if ($input->getOption('pay-elements-file')) {
                $payElementFile = $input->getOption('pay-elements-file');
                if (!is_file($payElementFile)) {
                    throw new \Exception(sprintf("The '%s' file does not exist", $payElementFile));
                }
                $hrisTester->testPayElementsFile($payElementFile);
            }
            $hrisTester->saveXls();
            $dbalConnexion->commit();
        } catch (\Exception $e) {
            // If something goes wrong, we revert the transaction
            $dbalConnexion->rollback();
            $hrisTester->getTesterLogger()->fatalException($e->getMessage());
            $hrisTester->getTesterLogger()->fatalException("Process aborted!");

            // The global error is store
            $globalError = $e->getMessage();
        }

        try {
            // Create the log entity
            $loggerEntity = $hrisTester->getTesterLogger()->getEntity();

            // Pertist the log in the database
            $this->em->persist($loggerEntity);
            $this->em->flush();
        } catch (\Exception $e) {
            $output->writeLn($e->getMessage());
            if (!$globalError) {
                exit(3);
            }
        }

        if ($globalError) {
            // If an error hab been thrown, show it in the command line and exit status 2
            $output->writeLn("<error>" . $globalError . "</error>");
            exit(2);
        } else {
            // Else, show a success message and exit status 0
            $output->writeLn("<info>Script complete</info>");
            exit(0);
        }
    }
}
