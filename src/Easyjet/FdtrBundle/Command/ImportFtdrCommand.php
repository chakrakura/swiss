<?php

namespace App\Easyjet\FdtrBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Easyjet\FdtrBundle\Classes\Import\ImportLogger;


class ImportFtdrCommand extends Command
{

    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $em;

    private $container;

    public function __construct(EntityManagerInterface $em, ContainerInterface $container)
    {
        $this->em = $em;
        $this->container = $container;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('easyjet:import-ftdr')
            ->setDescription('Import FTDR files from the E-IS software');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ini_set('memory_limit', '-1');
        $globalError = false;
        $this->em = $this->container->get('doctrine')->getManager();
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);
        $ftdrImporter = $this->container->get("fdtr_importer");
        $ftdrImporter->setImportLogger(new ImportLogger());
        $dbalConnexion = $this->container->get("doctrine.dbal.default_connection");
        $dbalConnexion->beginTransaction();
        try {
            $ftdrImporter
                ->setEntityManager($this->em)
                ->setDbalConnexion($dbalConnexion)
                ->start();
            $dbalConnexion->commit();
        } catch (\Exception $e) {
            $globalError = $e->getMessage();
            $output->writeLn(sprintf("The following error occurred during import process : %s", $e->getMessage()));
            $dbalConnexion->rollback();
            $ftdrImporter->getImportLogger()->fatalException("Transaction rolled back! No data imported!");
        }

        try {
            $loggerEntity = $ftdrImporter->getImportLogger()->getEntity();

            $mailer = $this->container->get("fdtr_importer_log_mailer");


            $this->em->persist($loggerEntity);
            $this->em->flush();

            $mailer->sendMailFor($loggerEntity);
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
            if ($ftdrImporter->getImportLogger()->hasWarning()) {
                $output->writeLn("<info>Script complete with warnings : " . $ftdrImporter->getImportLogger()->hasWarning() . "</info>");
                exit(3);
            } else {
                $output->writeLn("<info>Script complete</info>");
                exit(0);
            }
        }
    }
}
