<?php
namespace Easyjet\WorkingSheetBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Easyjet\HrisBundle\Classes\Import\Ejint097ImportLogger;
use Symfony\Component\Console\Input\InputOption;
use Exception;

class WorkingSheetGenerateWorkingDaysCommand extends ContainerAwareCommand
{
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    protected function configure()
    {
        $this
            ->setName('easyjet:WORKINGSHEET-generate-working-days')
            ->setDescription('Generate working days for all employees based on their patterns')
            ->addOption(
                'date',
                null,
                InputOption::VALUE_REQUIRED,
                'Working date to generate (Y-m-d)',
                date("Y-m-d")
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $date = \DateTime::createFromFormat("Y-m-d", $input->getOption("date"));
            if (!$date) {
                throw new Exception("Wrong date format");
            }
            $this->getContainer()->get("working_sheet_create_working_days")->createWorkingDays($date);
            $output->writeln("<info>Done</info>");
        } catch (Exception $ex) {
            $output->writeln("<error>Error : " . $ex->getMessage() . "</error>");
            exit(1);
        }
    }
}
