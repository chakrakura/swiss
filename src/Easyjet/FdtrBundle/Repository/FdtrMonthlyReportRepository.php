<?php

namespace App\Easyjet\FdtrBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * Repository for calls
 */
class FdtrMonthlyReportRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function monthlyFdtrDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {       
             
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("COUNT(mr)")
                ->from("EasyjetFdtrBundle:FdtrMonthlyReport", "mr")
                ->leftJoin("mr.fdtrUser", "u")
                ->leftjoin("mr.externalDuty", "ed")
                ->where("(u.nomUser like :query or u.prenomUser like :query or u.logUser like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");

          
        if (!$isAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }
    
        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("fdtrFrom"));
        $dateFrom->setTime(0,0,0);
        if ($dateFrom) {
            $queryBuilder->andWhere("mr.concernedMonth >= :dateFrom")->setParameter("dateFrom", $dateFrom);
        }
      
        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("fdtrTo"));
        $dateTo->setTime(0,0,0);
        if ($dateTo) {
            $dateTo->modify("+1 day");
            $queryBuilder->andWhere("mr.concernedMonth < :dateTo")->setParameter("dateTo", $dateTo);
        }

        if ($request->get("selectedUser")) {
            $queryBuilder
                ->andWhere("(u.nomUser like :selectedUser or u.prenomUser like :selectedUser or u.logUser like :selectedUser)")
                ->setParameter("selectedUser", "%" . $request->get("selectedUser") . "%");
        }

        if($request->get("fdtrStatus") && sizeof($request->get("fdtrStatus")) < 4 ){
            $selectedFdtrStatus = $request->get("fdtrStatus");
            $arrayType = gettype($selectedFdtrStatus);
            if(in_array("nofill", $selectedFdtrStatus)){
                $queryBuilder
                        ->andWhere("mr.fdtrUser IN(SELECT u2.idUser FROM EasyjetUmanBundle:Users u2 WHERE u2.allowDtimeRequest=1) and ed is null or ed.status IN (:status)")
                        ->setParameter("status", $selectedFdtrStatus);
            } else {
                $queryBuilder->andWhere("ed.status IN (:status)")->setParameter("status", $selectedFdtrStatus);
            }   
        }
        
        if ($request->get("noExternalDutyHrs")==1) {
            $queryBuilder->andWhere("(ed.reason=:reason)")->setParameter("reason", $request->get("noExternalDutyHrs"));
        }
 
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult(); 
     
        $queryBuilder->select("mr")
                     ->addSelect("u")
                     ->addSelect("ed")
                     ->addSelect("CASE WHEN (ed.status='VALIDATED') THEN SUM(COALESCE(ed.durationMinutes, 0)+mr.dutyMinutes) ELSE mr.dutyMinutes END AS totalDutyTime")
                     ->groupBy('mr.id');
        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        
        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("u.logUser");
        $fieldsList->addField("u.prenomUser");
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("u.dtimeUserBlock");

        $fieldsList->addField("mr.concernedMonth");

        $fieldsList->addField("mr.dutyMinutes");
        $fieldsList->addField("ed.durationMinutes");
        $fieldsList->addField("totalDutyTime");
        
        $fieldsList->addField("ed.status");
        $fieldsList->addField("ed.reason");

        $fieldsList->addField("mr.id");
        

        
        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
       

        foreach ($results as $currentResult) {


            if ($currentResult[0] === null) {
                continue;
            }
            $status = "";
            $reason = "";
            $periodStatus = "";

            $concernedMonth = $currentResult[0]->getConcernedMonth()->format("Y-m-d");
            $secondPreviousMonth = date("Y-m-d", strtotime(" -3 months"));
            if($concernedMonth < $secondPreviousMonth){
                $periodStatus = "closed";                    
            }

            if ($currentResult[0]->getExternalDuty()) {
                $status = $currentResult[0]->getExternalDuty()->getStatus();
                $reason = $currentResult[0]->getExternalDuty()->getReason()->getId();
            } else {
                if ($currentResult[0]->getFdtrUser()->getAllowDtimeRequest()) {
                    $status = "nofilled";
                 }
            }
            $output->addRow(array(
                $currentResult[0]->getFdtrUser()->getLogUser(),
                $currentResult[0]->getFdtrUser()->getPrenomUser(),
                $currentResult[0]->getFdtrUser()->getNomUser(),
                $currentResult[0]->getConcernedMonth()->format("F Y"),
                TimeFormat::intToHHmm((int)($currentResult[0]->getDutyMinutes())),
                TimeFormat::intToHHmm((int)($currentResult[0]->getExternalDuty() ? $currentResult[0]->getExternalDuty()->getDurationMinutes() : 0)),
                TimeFormat::intToHHmm((int)($currentResult['totalDutyTime'])),
                $status,
                $currentResult[0]->getId(),
                $currentResult[0]->getFdtrUser()->getAllowDtimeRequest() ? $currentResult[0]->getConcernedMonth()->format("Y-m") : "",
                $currentResult[0]->getFdtrUser()->getIdUser(),
                $reason,
                $periodStatus,
                $currentResult[0]->getFdtrUser()->getDtimeUserBlock(),
                null
            ));

        }
        
        return $output->output();
    }

    public function monthlyFdtrCsvResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, $idUser)
    {      
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("COUNT(mr)")
                ->from("EasyjetFdtrBundle:FdtrMonthlyReport", "mr")
                ->leftJoin("mr.fdtrUser", "u")
                ->leftjoin("mr.externalDuty", "ed")
                ->where("(u.nomUser like :query or u.prenomUser like :query or u.logUser like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");

        
        if (!$isAdmin) {
            $queryBuilder->andWhere('u.idUser=:idUser')->setParameter("idUser", $idUser);
        }

        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("fdtrFrom"));
        $dateFrom->setTime(0,0,0);
        if ($dateFrom) {
            $queryBuilder->andWhere("mr.concernedMonth >= :dateFrom")->setParameter("dateFrom", $dateFrom);
        }

        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("fdtrTo"));
        $dateTo->setTime(0,0,0);
        if ($dateTo) {
            $dateTo->modify("+1 day");
            $queryBuilder->andWhere("mr.concernedMonth < :dateTo")->setParameter("dateTo", $dateTo);
        }

        if ($request->get("selectedUser")) {
            $queryBuilder
                ->andWhere("(u.nomUser like :selectedUser or u.prenomUser like :selectedUser or u.logUser like :selectedUser)")
                ->setParameter("selectedUser", "%" . $request->get("selectedUser") . "%");
        }

        if($request->get("fdtrStatus") && sizeof($request->get("fdtrStatus")) < 4 ){
            $selectedFdtrStatus = $request->get("fdtrStatus");
            $arrayType = gettype($selectedFdtrStatus);
            if(in_array("nofill", $selectedFdtrStatus)){
                $queryBuilder
                        ->andWhere("mr.fdtrUser IN(SELECT u2.idUser FROM EasyjetUmanBundle:Users u2 WHERE u2.allowDtimeRequest=1) and ed is null or ed.status IN (:status)")
                        ->setParameter("status", $selectedFdtrStatus);
            } else {
                $queryBuilder->andWhere("ed.status IN (:status)")->setParameter("status", $selectedFdtrStatus);
            }   
        }
        
        if ($request->get("noExternalDutyHrs")==1) {
            $queryBuilder->andWhere("(ed.reason=:reason)")->setParameter("reason", $request->get("noExternalDutyHrs"));
        }
        
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();
        
        $queryBuilder->select("mr")
                     ->addSelect("u")
                     ->addSelect("ed")
                     ->addSelect("CASE WHEN (ed.status='VALIDATED') THEN SUM(COALESCE(ed.durationMinutes, 0)+mr.dutyMinutes) ELSE mr.dutyMinutes END AS totalDutyTime")
                     ->groupBy('mr.id');
        
        $buffer = fopen('php://temp', 'w');
        $csv = "";
        fputcsv($buffer, array(
            'Employee ID', 
            "First name", 
            "Last name", 
            "Month", 
            "Easyjet Duty time", 
            "External Duty time", 
            "Total Duty time",
            "Status"
        ));

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        
        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("u.logUser");
        $fieldsList->addField("u.prenomUser");
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("mr.concernedMonth");

        $fieldsList->addField("mr.dutyMinutes");
        $fieldsList->addField("ed.durationMinutes");
        $fieldsList->addField("totalDutyTime");
        
        $fieldsList->addField("ed.status");

        $fieldsList->addField("mr.id");
        
        $output->sortingManager($fieldsList);
        $queryBuilder
            ->setFirstResult(0)
            ->setMaxResults(100000);

        $results = $queryBuilder->getQuery()->getResult();
        


        foreach ($results as $currentResult) {
            if ($currentResult[0] === null) {
                continue;
            }
            $status = "";
            if ($currentResult[0]->getExternalDuty()) {
                $status = $currentResult[0]->getExternalDuty()->getStatus();
            } else {
                if ($currentResult[0]->getFdtrUser()->getAllowDtimeRequest()) {
                    $status = "nofilled";
                }
            }

            fputcsv($buffer, array(
                $currentResult[0]->getFdtrUser()->getLogUser(),
                $currentResult[0]->getFdtrUser()->getPrenomUser(),
                $currentResult[0]->getFdtrUser()->getNomUser(),
                $currentResult[0]->getConcernedMonth()->format("F Y"),

                TimeFormat::intToHHmm((int)($currentResult[0]->getDutyMinutes())),
                TimeFormat::intToHHmm((int)($currentResult[0]->getExternalDuty() ? $currentResult[0]->getExternalDuty()->getDurationMinutes() : 0)),
                TimeFormat::intToHHmm((int)($currentResult['totalDutyTime'])),

                $status
            ));

            
                
        }
        rewind($buffer);
        $csv = stream_get_contents($buffer) . "\n";
        fclose($buffer);
        return $csv;

    }
    /**
     * Return the array of FdtrMonthlyReport which have no assigned external duty time and should have
     * @return array 
     */
    public function findUnfilledReportForLastMonth()
    {
        $lastMonth = mktime(0,0,0,(int)date('m')-1,1,(int)date('Y'));
        
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select("mr")
                     ->addSelect("u")
                     ->from("EasyjetFdtrBundle:FdtrMonthlyReport", "mr")
                     ->leftJoin("mr.fdtrUser", "u")
                     ->where("mr.fdtrUser IN(SELECT u2.idUser FROM EasyjetUmanBundle:Users u2 WHERE u2.allowDtimeRequest=1)")
                     ->andWhere("mr.id NOT IN(SELECT mr2.id FROM EasyjetFdtrBundle:FdtrExternalDtime ed LEFT JOIN ed.monthlyReport mr2)")
                     ->andWhere("mr.concernedMonth = :lastMonth")
                     ->setParameter("lastMonth", date("Y-m-d", $lastMonth));
        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * Return the array of FdtrMonthlyReport which have no assigned external duty time and should have since last three months
     * @return array 
     */
    public function findUnfilledReportForLastThreeMonths()
    {
        $lastMonth = mktime(0,0,0,(int)date('m')-3,1,(int)date('Y'));
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select("mr")
                     ->addSelect("u")
                     ->from("EasyjetFdtrBundle:FdtrMonthlyReport", "mr")
                     ->leftJoin("mr.fdtrUser", "u")
                     ->where("mr.fdtrUser IN(SELECT u2.idUser FROM EasyjetUmanBundle:Users u2 WHERE u2.allowDtimeRequest=1 and u2.dtimeUserBlock=0)")
                     ->andWhere("mr.id NOT IN(SELECT mr2.id FROM EasyjetFdtrBundle:FdtrExternalDtime ed LEFT JOIN ed.monthlyReport mr2)")
                     ->andWhere("mr.concernedMonth = :lastMonth")
                     ->setParameter("lastMonth", date("Y-m-d", $lastMonth));
        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * Drop data for specified month/user
     * @param  \Doctrine\DBAL\Connection $dbalConnexion
     * @param  \DateTime $month FDTR month
     * @param  integer     $userId  Id of concerned user
     * @return boolean          True if something removed, false else
     */
    public function dropData(\Doctrine\DBAL\Connection $dbalConnexion, \DateTime $month, $userId) {
        $stmt = $dbalConnexion->prepare('SELECT * FROM fdtr_monthly_report WHERE user_id = ? AND concerned_month = ?');
        $stmt->bindValue(1, $userId);
        $stmt->bindValue(2, $month->format("Y-m-d"));
        $monthlyReport = $stmt->executeQuery()->fetchAssociative();
        if ($monthlyReport) {
            $dbalConnexion->delete("fdtr_row", array("fdtr_monthly_report_id" => $monthlyReport['id']));
            return $monthlyReport['id'];
        }
        return false;
    }

    /**
     * Create a new FdtrMonthlyReport and return its id (low memory resources)
     * @param  \Doctrine\DBAL\Connection $dbalConnexion
     * @param  \DateTime                 $monthDateTime Month of the new FdtrMonthlyReport
     * @param  integer                   $userId        User id of the person who did this monthly report
     * @return integer                                  Id of the FdtrMonthlyReport created
     */
    public function dbalNewMonthlyReport(\Doctrine\DBAL\Connection $dbalConnexion, \DateTime $monthDateTime, $userId) {
        $dbalConnexion->insert("fdtr_monthly_report", array(
            "user_id" => $userId,
            "concerned_month" => $monthDateTime->format("Y-m-d")
        ));
        return $dbalConnexion->lastInsertId();
    }

    /**
     * Update duty time of the specified report
     * @param  \Doctrine\DBAL\Connection $dbalConnexion   Doctrine DBAL connection
     * @param  integer                   $monthlyReportId Id of the monthly report to update
     * @param  integer                   $dutyMinutes     Number of duty minutes for this month
     * @return null
     */
    public function dbalUpdateDutyTime(\Doctrine\DBAL\Connection $dbalConnexion, $monthlyReportId, $dutyMinutes)
    {
        $dbalConnexion->update('fdtr_monthly_report', array('duty_minutes' => $dutyMinutes), array('id' => $monthlyReportId));
    }

     /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function fdtrUserDataTableResults(\Symfony\Component\HttpFoundation\Request $request)
    {              
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("COUNT(u)")
                ->from("EasyjetUmanBundle:Users", "u")
                ->where("(u.nomUser like :query or u.prenomUser like :query or u.logUser like :query)")
                ->andWhere("u.fdtrAccessLevel>:right")
                ->setParameter("right", 0)
                ->setParameter("query", "%".$request->get("sSearch")."%");

               
        if ($request->get("selectedUser")) {
            $queryBuilder
                ->andWhere("(u.nomUser like :selectedUser or u.prenomUser like :selectedUser or u.logUser like :selectedUser)")
                ->setParameter("selectedUser", "%" . $request->get("selectedUser") . "%");
        }

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();
        
        $queryBuilder->select("u");
        
        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        
        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("u.logUser");
        $fieldsList->addField("u.prenomUser");
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("u.allowDtimeRequest");
        $fieldsList->addField("u.dtimeUserBlock");
        
          
        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {
            
                $output->addRow(array(
                $currentResult->getLogUser(),
                $currentResult->getPrenomUser(),
                $currentResult->getNomUser(),
                $currentResult->getAllowDtimeRequest(),
                $currentResult->getDtimeUserBlock(),
                $currentResult->getIdUser()
             ));

        }
        
        return $output->output();
    }

     /**
     * Gets the users from db
     * @param  \Doctrine\DBAL\Connection $dbalConnexion
     */
    public function keyedByEmpnoUsersList($dbalConnexion)
    {
        $return = array();
        $sql = "SELECT id_user, log_user FROM users";
        $stmt = $dbalConnexion->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();
        foreach ($result as $currentUser) {
            $return[$currentUser['log_user']] = $currentUser['id_user'];
        }
        return $return;
    }
    
}
