<?php

namespace App\Easyjet\FdtrBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class ExternalDutyReminderCommand extends Command
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

    public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('easyjet:external-duty-reminder')
            ->setDescription('Send a reminder to all person who should send their external duty time and did not.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        ini_set('memory_limit', '-1');
        try {
            $reportNotFilled = $this->entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->findUnfilledReportForLastMonth();
            $mailer = $this->container->get("fdtr_reminder_log_mailer");
            $mailer->sendMailFor($reportNotFilled);
            return Command::SUCCESS;
        } catch (\Exception $ex) {
            return Command::FAILURE;
        }
    }
}
