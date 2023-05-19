<?php

namespace App\Easyjet\EwishBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;

class FestivalDateCommand extends Command
{
    // The name of the command (the part after "bin/console")
    protected static $defaultName = 'app:update-ewish-festival-period-date';

    // The command description shown when running "php bin/console list"
    protected static $defaultDescription = 'Updates the EwishFestivalPeriodDate table with current year';


    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $logText = '';
        // Setting new values for the next festival period
        $currentYear = date("Y");
        $logText .= "Current Year => " . $currentYear;
        $logText .= "\n";
        $nextYear = date('Y', strtotime('+1 year'));
        $logText .= "Next Year => " . $nextYear;
        $logText .= "\n";
        $startDate = $currentYear . "-12-21";
        $logText .= "Start Date => " . $startDate;
        $logText .= "\n";
        $endDate = $nextYear . '-01-04';
        $logText .= "End Date => " . $endDate;
        $logText .= "\n";
        $currentYearJanDate = $currentYear . '-01-03';
        $logText .= "Current year Jan Date => " . $currentYearJanDate;
        $logText .= "\n";

        $em = $this->entityManager;
        $repo = $em->getRepository("App\Easyjet\EwishBundle\Entity\FestivalPeriodDate")->find(1);

        $repo->setCurrentYear($currentYear);
        $repo->setNextYear($nextYear);;
        $repo->setStartDate(\DateTime::createFromFormat('Y-m-d', $startDate));
        $repo->setEndDate(\DateTime::createFromFormat('Y-m-d', $endDate));
        $repo->setCurrentYearJanDate(\DateTime::createFromFormat('Y-m-d', $currentYearJanDate));
        $em->persist($repo);
        $em->flush();

        $text = $logText;
        $text .= "\n";
        $text .= date("d-m-Y H:i:s") . " : Cron run successfully and new dates has been updated in the system";
        $text .= "\n";
        $text .= "---------------------------------------------------------------------------------------";
        $text .= "\n";

        // Logging the cron logs into file
        file_put_contents("/var/log/ewish-festival-date-command-logs.txt", $text, FILE_APPEND);
        return Command::SUCCESS;
    }
}
