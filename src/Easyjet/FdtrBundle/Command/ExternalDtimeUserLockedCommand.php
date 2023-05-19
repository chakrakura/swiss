<?php

namespace App\Easyjet\FdtrBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;
use Exception;

class ExternalDtimeUserLockedCommand extends Command
{
    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;

    protected function configure(): void
    {
        $this
            ->setName('easyjet:external-dtime-user-blocked')
            ->setDescription('Locked all users who has not submitted external duty since last three months.');
    }

    public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ini_set('memory_limit', '-1');
        try {
            $reportNotFilled = $this->entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->findUnfilledReportForLastThreeMonths();
            $mailer = $this->container->get("fdtr_user_block_mailer");
            $mailer->sendMailFor($reportNotFilled);
            return Command::SUCCESS;
        } catch (Exception $ex) {
            return Command::FAILURE;
        }
    }
}
