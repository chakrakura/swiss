<?php

namespace App\Easyjet\OtpBundle\Services;

use DateTime;
use App\Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeRankingReportData;
use App\Easyjet\UmanBundle\Entity\Users;
use App\Easyjet\OtpBundle\Entity\OtpImportBatch;
use App\Easyjet\OtpBundle\Entity\OtpImportRow;
use Exception;


/**
* ImportWorkdayFileService
*/
class ImportWorkdayFileService
{
    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface Entity manager
     */
    private $entityManager;

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function start(EmployeeRankingReportData $dataProvider, Users $importedBy, DateTime $effectiveDate, DateTime $cvpDate, $autoPublish = false)
    {
       
        // Starting Line 4
   
        $batch = new OtpImportBatch($importedBy, $effectiveDate, $cvpDate);
       
        $compensationGrades = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\CompensationGrades")->getKeyedArray();

        $unknownCompensationGrades = array();
        
        foreach ($dataProvider as $currentUser) {
            $compensationGrade =$currentUser->getCompensationGrade();
            $hireDate = $currentUser->getHireDate();
            $firstname = $currentUser->getFirstname();
            $lastname = $currentUser->getLastname();


            if (!isset($compensationGrades[$compensationGrade])) {
                $unknownCompensationGrades[$compensationGrade] = true;
            }

            if (!count($unknownCompensationGrades)) {
                if (!$compensationGrades[$compensationGrade]->isIgnored()) {
                    $newRow = new OtpImportRow();
                    $newRow
                        ->setEmpno($currentUser->getEmployeeId())
                        ->setHireDate($hireDate)
                        ->setCompensationGrade($compensationGrade)
                        ->setFirstname($firstname)
                        ->setLastname($lastname)
                        ->setTypeEftr($compensationGrades[$compensationGrade]->getTypeEftr());

                    $batch->addRow($newRow);
                }
            }
        }
       
        if (count($unknownCompensationGrades)) {
            throw new Exception("The following compensation grades are not set in the administration. Please create them and try again\n- " . implode("\n- ", array_keys($unknownCompensationGrades)));
        }

        $currentProcessingCalendar = $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisProcessingCalendar")->findCurrent();
        $currentProcessingCalendar->setEjint200ClaimsImportSatisfied(new DateTime);

        $this->entityManager->persist($currentProcessingCalendar);
        $this->entityManager->flush();
        
        if ($autoPublish) {
            $batch->setPublished(true);
        }


        $this->entityManager->persist($batch);
        $this->entityManager->flush();
    }
}
