<?php

namespace App\Easyjet\WorkingSheetBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of WorkingSheetActualWorkRepository
 *
 * @author Tanuj
 */
class WorkingSheetActualWorkRepository extends EntityRepository {
    private $bankHollidaysList = array();
    
    public function findCurrentDayForUser(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $for) {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("aw")
            ->from("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork", "aw")
            ->where("aw.workedByUser=:workedByUser")
            ->andWhere("aw.workingDate = :workingDate")
            ->setParameter("workedByUser", $for)
            ->setParameter("workingDate", date("Y-m-d"));

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }
    
    private function isBankHolliday(\DateTime $date, $stationId) {
        if (!$this->bankHollidaysList) {
            $this->bankHollidaysList = $this->getEntityManager()->getRepository("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetBankHolliday")->findAll();
        }
        
        if ($date->format("N") == 6 || $date->format("N") == 7) {
            return 1;
        }
        
        foreach ($this->bankHollidaysList as $currentBankHolliday) {
            if ($currentBankHolliday->getStation()->getIdStation() == $stationId && $currentBankHolliday->getBankHollidayDate()->format("Y-m-d") === $date->format("Y-m-d")) {
                return 1;
            }
        }
        return 0;
    }

    
    public function generateReporting($fromYear, $toYear, \Symfony\Component\Security\Core\Authorization\AuthorizationChecker $securityContext, \App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $authenticatedUser) {
        
        $fromYear = $fromYear ? date("Y-m-01", strtotime(str_replace('/', '-', $fromYear))) : date("Y-m-01");        
        $from = \DateTime::createFromFormat("Y-m-d H:i:s", "$fromYear 00:00:00");
        
        $toYear = $toYear ? date("Y-m-d", strtotime(str_replace('/', '-', $toYear))) : date("Y-m-01");    
        $to = \DateTime::createFromFormat("Y-m-d H:i:s", "$toYear 00:00:00");
        
        $currentDate = clone $from;
        
        $initTable = array(
            "yearlyExpectedWorkingTime"  => 0,
            "totalWorkedHours"  => 0,
            "months" => array()
            
        );
        $totalExpectedTimeBsl = $totalExpectedTimeGva = 0;
        
        // Prepare the initial dataset to initialize all user with the same default values
        while ($currentDate <= $to) {
            if ($currentDate->format("d") === "01") {
                $initTable["months"][$currentDate->format("Y-m-") . "01"] = array(
                    "from" => $currentDate->format("Y-m-") . "01",
                    "to" => $currentDate->format("Y-m-t"),
                    "label" => $currentDate->format("M Y"),
                    "monthlyWorkedHours" => 0,
                    "expectedWorkingTimePerBase" => array(
                        4 => 0, // GVA
                        6 => 0 // BSL
                    ),
                    "expectedWorkingTime" => 0,
                    "expectedWorkingTimeForYear" => 0,
                    "offTime" => 0
                );
            }
            if (!$this->isBankHolliday($currentDate, 4)) {
                $initTable["months"][$currentDate->format("Y-m-") . "01"]["expectedWorkingTimePerBase"][4] += 504; // One day of work = 8.4h
                $totalExpectedTimeGva += 504;
            }
            if (!$this->isBankHolliday($currentDate, 6)) {
                $initTable["months"][$currentDate->format("Y-m-") . "01"]["expectedWorkingTimePerBase"][6] += 504;// One day of work = 8.4h
                $totalExpectedTimeBsl += 504;
            }

            $currentDate->add(new \DateInterval("P1D"));
        }
        
        $buffer = array();

        $queryBuilderUsers = $this->getEntityManager()->createQueryBuilder();
        $queryBuilderUsers
            ->select("u")
            ->from("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers", "u")
            ->leftJoin("u.lineManager", "lm")
            ->where("u.workingSheetAccessLevel>:right and u.mustReportWorkingTime=1")
            ->setParameter("right", 0);

        if (!$securityContext->isGranted("ROLE_WORKING_SHEET_ADMIN")) {
            if ($securityContext->isGranted("ROLE_WORKING_SHEET_LINE_MANAGER")) {
               $queryBuilderUsers->andWhere("(lm.id = :lineManager or u.id=:lineManager)")->setParameter("lineManager", $authenticatedUser->getId());
            }

            if ($securityContext->isGranted("ROLE_WORKING_SHEET_USER")) {
                $queryBuilderUsers->andWhere("u.id = :user")->setParameter("user", $authenticatedUser->getId());
            }
        }
        
        
        // Search all users from the DB in order to setup the entire dataset to be display
        $allUsers = $queryBuilderUsers->getQuery()->getResult();
        foreach ($allUsers as $currentUser) {
            $buffer[$currentUser->getLogUser()] = $initTable;
            
            switch($currentUser->getStation()->getIdStation()) {
                case 4:
                    $totalExpectedTime = $totalExpectedTimeGva;
                    break;
                case 6: 
                    $totalExpectedTime = $totalExpectedTimeBsl;
                    break;
                default:
                    $totalExpectedTime = 0;
                    break;
            }
            
            $totalExpectedTime = $totalExpectedTime * $currentUser->getOccupation() / 100;
            $buffer[$currentUser->getLogUser()]["yearlyExpectedWorkingTime"] = $totalExpectedTime;
            
            $buffer[$currentUser->getLogUser()]["firstname"] = $currentUser->getPrenomUser();
            $buffer[$currentUser->getLogUser()]["lastname"] = $currentUser->getNomUser();
            
            $totalWorkingTimeForYear = 0;
            foreach ($buffer[$currentUser->getLogUser()]["months"] as $month => $value) {
                if($currentUser->getOccupation()>0){
                    $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTime"] = $value["expectedWorkingTimePerBase"][$currentUser->getStation()->getIdStation()] * $currentUser->getOccupation() / 100;
                }else{
                    $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTime"] = 0;
                }
                $totalWorkingTimeForYear += $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTime"];
                $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTimeForYear"] = $totalWorkingTimeForYear;
            }
        }  

        // calculate and add worked hours to the stats
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $workingDays = $queryBuilder
            ->select("aw, u")
            ->from("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork", "aw")
            ->leftJoin("aw.workedByUser", "u")
            ->where("aw.workingDate >= :from")
            ->andWhere("aw.workingDate <= :to")
            ->setParameter("from", $from->format("Y-m-d"))
            ->setParameter("to", $to->format("Y-m-d"))
            ->orderBy("u.logUser","ASC")
            ->addOrderBy("aw.workingDate","ASC")
            ->getQuery()->getResult();

        $totalOffTime = 0;
        foreach ($workingDays as $currentWorkingDay) {
            if (!isset( $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()])) {
                continue;
            }

            $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["months"][$currentWorkingDay->getWorkingDate()->format("Y-m-") . "01"]["monthlyWorkedHours"] += $currentWorkingDay->getNumberOfMinutesWorked();

            $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["totalWorkedHours"] += $currentWorkingDay->getNumberOfMinutesWorked();

            $dailyOffTime = (504 * $currentWorkingDay->getWorkedByUser()->getOccupation() / 100) * $currentWorkingDay->getIsHolliday();

            //calculating off time per user per month
            if(isset($previousUser) && $previousUser == $currentWorkingDay->getWorkedByUser()->getLogUser()){
                if($dailyOffTime > 0)
                    $totalOffTime += $dailyOffTime;
            }
            else{
                $totalOffTime = 0;
            }
           $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["months"][$currentWorkingDay->getWorkingDate()->format("Y-m-") . "01"]["expectedWorkingTime"] -= $dailyOffTime;

            $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["months"][$currentWorkingDay->getWorkingDate()->format("Y-m-") . "01"]["offTime"] = $totalOffTime;
            $previousUser = $currentWorkingDay->getWorkedByUser()->getLogUser();              
        }

        //Calculating expected time for year and adding to stat
        foreach ($allUsers as $currentUser) {           
            $totalWorkingTimeForYear = 0;
            foreach ($buffer[$currentUser->getLogUser()]["months"] as $month => $value) {
                $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTimeForYear"] -= $buffer[$currentUser->getLogUser()]["months"][$month]["offTime"];
            }
        }
        // Finally, browse the array and setup the yearly working time for every user for every months
        foreach ($buffer as $empno => $employeeDataset) {
            $totalWorkedForYear = 0;
            foreach ($buffer[$empno]["months"] as $month => $monthData) {
                $totalWorkedForYear += $buffer[$empno]["months"][$month]["monthlyWorkedHours"];
                $buffer[$empno]["months"][$month]["totalWorkedForYear"] = $totalWorkedForYear;
            }
        }
        if (isset($onlyLastMonth)) {
            return $this->onlyLastMonth($buffer);
        } else {
            return $buffer;
        }
    }


    public function csvDownload($fromYear, $toYear, \Symfony\Component\Security\Core\Authorization\AuthorizationChecker $securityContext, \App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $authenticatedUser) {
        $fromYear = $fromYear ? date("Y-m-01", strtotime(str_replace('/', '-', $fromYear))) : date("Y-m-01");        
        $from = \DateTime::createFromFormat("Y-m-d H:i:s", "$fromYear 00:00:00");
        
        $toYear = $toYear ? date("Y-m-d", strtotime(str_replace('/', '-', $toYear))) : date("Y-m-01");    
        $to = \DateTime::createFromFormat("Y-m-d H:i:s", "$toYear 00:00:00");
        
        $currentDate = clone $from;
        
        $initTable = array(
            "yearlyExpectedWorkingTime"  => 0,
            "totalWorkedHours"  => 0,
            "months" => array()
            
        );
        $totalExpectedTimeBsl = $totalExpectedTimeGva = 0;
        
        // Prepare the initial dataset to initialize all user with the same default values
        while ($currentDate <= $to) {
            if ($currentDate->format("d") === "01") {
                $initTable["months"][$currentDate->format("Y-m-") . "01"] = array(
                    "from" => $currentDate->format("Y-m-") . "01",
                    "to" => $currentDate->format("Y-m-t"),
                    "label" => $currentDate->format("M Y"),
                    "monthlyWorkedHours" => 0,
                    "expectedWorkingTimePerBase" => array(
                        4 => 0, // GVA
                        6 => 0 // BSL
                    ),
                    "expectedWorkingTime" => 0,
                    "expectedWorkingTimeForYear" => 0,
                    "offTime" => 0
                );
            }
            if (!$this->isBankHolliday($currentDate, 4)) {
                $initTable["months"][$currentDate->format("Y-m-") . "01"]["expectedWorkingTimePerBase"][4] += 504; // One day of work = 8.4h
                $totalExpectedTimeGva += 504;
            }
            if (!$this->isBankHolliday($currentDate, 6)) {
                $initTable["months"][$currentDate->format("Y-m-") . "01"]["expectedWorkingTimePerBase"][6] += 504;// One day of work = 8.4h
                $totalExpectedTimeBsl += 504;
            }

            $currentDate->add(new \DateInterval("P1D"));
        }
        
        $buffer = array();

        $queryBuilderUsers = $this->getEntityManager()->createQueryBuilder();
        $queryBuilderUsers
            ->select("u")
            ->from("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers", "u")
            ->leftJoin("u.lineManager", "lm")
            ->where("u.workingSheetAccessLevel>:right and u.mustReportWorkingTime=1")
            ->setParameter("right", 0);

        if (!$securityContext->isGranted("ROLE_WORKING_SHEET_ADMIN")) {
            if ($securityContext->isGranted("ROLE_WORKING_SHEET_LINE_MANAGER")) {
               $queryBuilderUsers->andWhere("(lm.id = :lineManager or u.id=:lineManager)")->setParameter("lineManager", $authenticatedUser->getId());
            }

            if ($securityContext->isGranted("ROLE_WORKING_SHEET_USER")) {
                $queryBuilderUsers->andWhere("u.id = :user")->setParameter("user", $authenticatedUser->getId());
            }
        }
        
        
        // Search all users from the DB in order to setup the entire dataset to be display
        $allUsers = $queryBuilderUsers->getQuery()->getResult();
        foreach ($allUsers as $currentUser) {
            $buffer[$currentUser->getLogUser()] = $initTable;
            
            switch($currentUser->getStation()->getIdStation()) {
                case 4:
                    $totalExpectedTime = $totalExpectedTimeGva;
                    break;
                case 6: 
                    $totalExpectedTime = $totalExpectedTimeBsl;
                    break;
                default:
                    $totalExpectedTime = 0;
                    break;
            }
            
            $totalExpectedTime = $totalExpectedTime * $currentUser->getOccupation() / 100;
            $buffer[$currentUser->getLogUser()]["yearlyExpectedWorkingTime"] = $totalExpectedTime;
            
            $buffer[$currentUser->getLogUser()]["firstname"] = $currentUser->getPrenomUser();
            $buffer[$currentUser->getLogUser()]["lastname"] = $currentUser->getNomUser();
            //$buffer[$currentUser->getLogUser()]["empno"] = $currentUser->getEmpNo();

            
            $totalWorkingTimeForYear = 0;
            foreach ($buffer[$currentUser->getLogUser()]["months"] as $month => $value) {
                if($currentUser->getOccupation()>0){
                    $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTime"] = $value["expectedWorkingTimePerBase"][$currentUser->getStation()->getIdStation()] * $currentUser->getOccupation() / 100;
                }else{
                    $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTime"] = 0;
                }
                $totalWorkingTimeForYear += $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTime"];
                $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTimeForYear"] = $totalWorkingTimeForYear;
            }
        }  

        // calculate and add worked hours to the stats
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $workingDays = $queryBuilder
            ->select("aw, u")
            ->from("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork", "aw")
            ->leftJoin("aw.workedByUser", "u")
            ->where("aw.workingDate >= :from")
            ->andWhere("aw.workingDate <= :to")
            ->setParameter("from", $from->format("Y-m-d"))
            ->setParameter("to", $to->format("Y-m-d"))
            ->orderBy("u.logUser","ASC")
            ->addOrderBy("aw.workingDate","ASC")
            ->getQuery()->getResult();

        $totalOffTime = 0;
        foreach ($workingDays as $currentWorkingDay) {
            if (!isset( $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()])) {
                continue;
            }

            $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["months"][$currentWorkingDay->getWorkingDate()->format("Y-m-") . "01"]["monthlyWorkedHours"] += $currentWorkingDay->getNumberOfMinutesWorked();

            $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["totalWorkedHours"] += $currentWorkingDay->getNumberOfMinutesWorked();

            $dailyOffTime = (504 * $currentWorkingDay->getWorkedByUser()->getOccupation() / 100) * $currentWorkingDay->getIsHolliday();

            //calculating off time per user per month
            if(isset($previousUser) && $previousUser == $currentWorkingDay->getWorkedByUser()->getLogUser()){
                if($dailyOffTime > 0)
                    $totalOffTime += $dailyOffTime;
            }
            else{
                $totalOffTime = 0;
            }
           /* Previous Calculation by Gilles 
           $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTime"] -= $dailyOffTime;
            $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTimeForYear"] -= $dailyOffTime;*/
            //$buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["months"][$currentWorkingDay->getWorkingDate()->format("Y-m-") . "01"]["monthlyWorkedHours"] -= $dailyOffTime;

            $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["months"][$currentWorkingDay->getWorkingDate()->format("Y-m-") . "01"]["expectedWorkingTime"] -= $dailyOffTime;

            $buffer[$currentWorkingDay->getWorkedByUser()->getLogUser()]["months"][$currentWorkingDay->getWorkingDate()->format("Y-m-") . "01"]["offTime"] = $totalOffTime;
            $previousUser = $currentWorkingDay->getWorkedByUser()->getLogUser();              
        }

        //Calculating expected time for year and adding to stat
        foreach ($allUsers as $currentUser) {           
            $totalWorkingTimeForYear = 0;
            foreach ($buffer[$currentUser->getLogUser()]["months"] as $month => $value) {
                $buffer[$currentUser->getLogUser()]["months"][$month]["expectedWorkingTimeForYear"] -= $buffer[$currentUser->getLogUser()]["months"][$month]["offTime"];
            }
        }
        ob_start();
        $hCsv = fopen('php://output', "r+");
        $headers = array(
            "Employee No",
            "First Name",
            "Last Name",
            "Month",
            "Total Worked Hrs",
            "Total Expected Hrs"
        );
        fputcsv($hCsv, $headers);
        // Finally, browse the array and setup the yearly working time for every user for every months
        foreach ($buffer as $empno => $employeeDataset) {
            $totalWorkedForYear = 0;
            foreach ($buffer[$empno]["months"] as $month => $monthData) {
                $totalWorkedForYear += $buffer[$empno]["months"][$month]["monthlyWorkedHours"];
                $buffer[$empno]["months"][$month]["totalWorkedForYear"] = $totalWorkedForYear;

                $workedTime = $this->minutesToTime($buffer[$empno]["months"][$month]["monthlyWorkedHours"]);
                $expectedTime = $this->minutesToTime($buffer[$empno]["months"][$month]["expectedWorkingTime"]);
                $month = $buffer[$empno]["months"][$month]["label"];
                $line = array(
                    $empno,
                    $buffer[$empno]['firstname'],
                    $buffer[$empno]['lastname'], 
                    $month, 
                    $workedTime,
                    $expectedTime 
                );
                fputcsv($hCsv, $line);
            }
            

        }
        fclose($hCsv);
        $csvContent = utf8_decode(ob_get_clean());
        return $csvContent;     
    }
    public function minutesToTime($time, $format = '%02d:%02d')
    {
        
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }
    
    private function onlyLastMonth($data) {
        foreach ($data as $empno => $currentRow) {
            $data[$empno]["months"] = array(end($data[$empno]["months"]));
        }
        return $data;
    }
    
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function actualWorkDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {              
        
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("COUNT(aw)")
                ->from("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork", "aw")
                ->leftJoin("aw.workedByUser", "u")
                ->where("(u.nomUser like :query or u.prenomUser like :query or u.logUser like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");

        
        if (!$isAdmin) {
            $queryBuilder->andWhere('u.id=:idUser')->setParameter("idUser", $idUser);
        }

        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("workingHistoryFrom"));
        $dateFrom->setTime(0,0,0);
        if ($dateFrom) {
            $queryBuilder->andWhere("aw.workingDate >= :dateFrom")->setParameter("dateFrom", $dateFrom);
        }

        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("workingHistoryTo"));
        $dateTo->setTime(0,0,0);
        if ($dateTo) {
            $dateTo->modify("+1 day");
            $queryBuilder->andWhere("aw.workingDate < :dateTo")->setParameter("dateTo", $dateTo);
        }

        if ($request->get("selectionedUser")) {
            $queryBuilder
                ->andWhere("(u.nomUser like :selectionedUser or u.prenomUser like :selectionedUser or u.logUser like :selectionedUser)")
                ->setParameter("selectionedUser", "%" . $request->get("selectionedUser") . "%");
        }

        
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult(); 
        
               
        $queryBuilder->select("aw")
                     ->addSelect("u")
                     ->groupBy('aw.id');
        $output = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        
        
        $fieldsList = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting();
        $fieldsList->addField("u.logUser");
        $fieldsList->addField("u.prenomUser");
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("aw.workingDate");
        $fieldsList->addField("aw.morningFrom");
        $fieldsList->addField("aw.morningTo");
        $fieldsList->addField("aw.afternoonFrom");
        $fieldsList->addField("aw.afternoonTo");
        $fieldsList->addField("aw.isHoliday");
        $fieldsList->addField("aw.isBankHolliday");
        $fieldsList->addField("aw.id");
        $fieldsList->addField("aw.workedByUser");
        
        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
       
        foreach ($results as $currentResult) {
        
            if ($currentResult === null) {
                continue;
            }
            
            $totalTime = $currentResult->getNumberOfMinutesWorked();
            $hours = floor($totalTime / 60);
            if($hours < 10){ 
                $hours =  "0".$hours;
            }
            
            $minutes = $totalTime % 60;
            if($minutes < 10) {
                $minutes =  "0".$minutes;
            }
            
            $totalTime = $hours.":".$minutes ; 
            
            $output->addRow(array(
                $currentResult->getWorkedByUser()->getLogUser(),
                $currentResult->getWorkedByUser()->getPrenomUser(),
                $currentResult->getWorkedByUser()->getNomUser(),
                $currentResult->getWorkingDate()->format("D, d F Y"),
                ($currentResult->getMorningFrom())?$currentResult->getMorningFrom()->format("H:i"):"",
                ($currentResult->getMorningTo())?$currentResult->getMorningTo()->format("H:i"):"",
                ($currentResult->getAfternoonFrom())?$currentResult->getAfternoonFrom()->format("H:i"):"",
                ($currentResult->getAfternoonTo())?$currentResult->getAfternoonTo()->format("H:i"):"",
                $totalTime,
                $currentResult->getIsHolliday(), 
                $currentResult->getIsBankHolliday(),
                $currentResult->getId(),
                $currentResult->getWorkedByUser()->getId(),
                $currentResult->isLocked()
            ));

        }
           
         return $output->output();
    }
    
    public function WorkingSheetActualWorkCsvResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {              
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("COUNT(aw)")
                ->from("\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork", "aw")
                ->leftJoin("aw.workedByUser", "u")
                ->where("(u.nomUser like :query or u.prenomUser like :query or u.logUser like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");

        
        if (!$isAdmin) {
            $queryBuilder->andWhere('u.id=:idUser')->setParameter("idUser", $idUser);
        }

        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("workingHistoryFrom"));
        $dateFrom->setTime(0,0,0);
        if ($dateFrom) {
            $queryBuilder->andWhere("aw.workingDate >= :dateFrom")->setParameter("dateFrom", $dateFrom);
        }

        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("workingHistoryTo"));
        $dateTo->setTime(0,0,0);
        if ($dateTo) {
            $dateTo->modify("+1 day");
            $queryBuilder->andWhere("aw.workingDate < :dateTo")->setParameter("dateTo", $dateTo);
        }

        if ($request->get("selectionedUser")) {
            $queryBuilder
                ->andWhere("(u.nomUser like :selectionedUser or u.prenomUser like :selectionedUser or u.logUser like :selectionedUser)")
                ->setParameter("selectionedUser", "%" . $request->get("selectionedUser") . "%");
        }

        
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult(); 
        
        $queryBuilder->select("aw")
                     ->addSelect("u")
                     ->orderBy("u.logUser","ASC")
                     ->addOrderBy("aw.workingDate","ASC");
 
        
        $buffer = fopen('php://temp', 'w');
        $csv = "";
        fputcsv($buffer, array(
            'Empno', 
            "First name", 
            "Last name", 
            "Date", 
            "Morning From", 
            "Morning To", 
            "Afternoon From",
            "Afternoon To",
            "Total",
            "Holiday",
            "Bank holiday",
        ));

        $output = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        
        $fieldsList = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting();
        $fieldsList->addField("u.logUser");
        $fieldsList->addField("u.prenomUser");
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("aw.workingDate");
        $fieldsList->addField("aw.morningFrom");
        $fieldsList->addField("aw.morningTo");
        $fieldsList->addField("aw.afternoonFrom");
        $fieldsList->addField("aw.afternoonTo");
        $fieldsList->addField("aw.isHoliday");
        $fieldsList->addField("aw.isBankHolliday");
        $fieldsList->addField("aw.id");
        $fieldsList->addField("aw.workedByUser");
        
        $output->sortingManager($fieldsList);
        $queryBuilder
            ->setFirstResult(0)
            ->setMaxResults(100000);

        $results = $queryBuilder->getQuery()->getResult();
        
        foreach ($results as $currentResult) {
            if ($currentResult === null) {
                continue;
            }
            
            $totalTime = $currentResult->getNumberOfMinutesWorked();
            
            $hours = floor($totalTime / 60);
            if($hours < 10){ 
                $hours =  "0".$hours;
            }
            
            $minutes = $totalTime % 60;
            if($minutes < 10)  {
                $minutes =  "0".$minutes; 
            }
            
            $totalTime = "=\"" . $hours.":".$minutes . "\"";   //total time in hrs:mins format
            
            $isHolidayValue = $currentResult->getIsHolliday();
                switch ($isHolidayValue) {
                    case 1 :
                        $isHolidayValue = 'Full day';
                        break;
                    case 0.5 :
                        $isHolidayValue = 'Half a day';
                        break;
                    default :
                        $isHolidayValue = 'No';
                        break;
                }
                
            $isBankHolidayValue = ($currentResult->getIsBankHolliday())? 'Yes' : 'No' ;
            
            fputcsv($buffer, array(
                "=\"" . $currentResult->getWorkedByUser()->getLogUser() . "\"",
                $currentResult->getWorkedByUser()->getPrenomUser(),
                $currentResult->getWorkedByUser()->getNomUser(),
                $currentResult->getWorkingDate()->format("d/m/Y"),
                ($currentResult->getMorningFrom())?$currentResult->getMorningFrom()->format("H:i"):"0",
                ($currentResult->getMorningTo())?$currentResult->getMorningTo()->format("H:i"):"0",
                ($currentResult->getAfternoonFrom())?$currentResult->getAfternoonFrom()->format("H:i"):"0",
                ($currentResult->getAfternoonTo())?$currentResult->getAfternoonTo()->format("H:i"):"0",
                $totalTime,
                $isHolidayValue, 
                $isBankHolidayValue,
            ));
        }
        rewind($buffer);
        $csv = stream_get_contents($buffer) . "\n";
        fclose($buffer);
        return $csv;

    }
}
