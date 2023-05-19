<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use App\Easyjet\OtpBundle\Entity\OtpRequest;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;

/**
 * Repository for calls
 */
class OtpRequestRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function otpDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, \App\Easyjet\UmanBundle\Entity\Users $authenticatedUser)
    {  
                        
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("r, u, sa")
                ->from("EasyjetOtpBundle:OtpRequest", "r")
                ->leftJoin("r.concernedUser", "u")
                ->leftJoin("r.sectorAdjustment", "sa");

        
        if ($request->get("concernedUser")) {
            $queryBuilder
                ->andWhere("(u.logUser like :query or u.prenomUser like :query or u.nomUser like :query)")
                ->setParameter("query", "%".$request->get("concernedUser")."%");
        }

        if ($request->get("sSearch")) {
            $queryBuilder
                ->andWhere("(u.logUser like :query or u.prenomUser like :query or u.nomUser like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");
        }

        if (!$isAdmin) {
            $queryBuilder
                ->andWhere('u.logUser = :empno')
                ->setParameter('empno', $authenticatedUser->getLogUser());
        }
        
        $status = $request->query->get('status', null);
        if (is_array($status) && count($status)) {
            $queryBuilder->andWhere($queryBuilder->expr()->in(
                'r.status',
                $status
            ));
        }
        
        $type = $request->query->get('type', null);
        if (is_array($type) && count($type)) {
            $queryBuilder->andWhere($queryBuilder->expr()->in(
                'r.type',
                $type
            ));
        }

        $createdFrom = $request->query->get('createdFrom', null) ? \DateTime::createFromFormat("d/m/Y", $request->query->get('createdFrom', null)) : null;
        $createdTo   = $request->query->get('createdTo', null)   ? \DateTime::createFromFormat("d/m/Y", $request->query->get('createdTo', null))   : null;
        
        $concernedFrom = $request->query->get('concernedFrom', null) ? \DateTime::createFromFormat("d/m/Y", $request->query->get('concernedFrom', null)) : null;
        $concernedTo   = $request->query->get('concernedTo', null)   ? \DateTime::createFromFormat("d/m/Y", $request->query->get('concernedTo', null))   : null;
        

        if ($createdFrom) {
            $queryBuilder
                ->andWhere("r.createdAt >= :createdFrom")
                ->setParameter("createdFrom", $createdFrom->format("Y-m-d"));
        }
        
        if ($createdTo) {
            $queryBuilder
                ->andWhere("r.createdAt <= :createdTo")
                ->setParameter("createdTo", $createdTo->format("Y-m-d"));
        }
        
        if ($concernedFrom) {
            $queryBuilder
                ->andWhere("r.concernedDate >= :concernedFrom")
                ->setParameter("concernedFrom", $concernedFrom->format("Y-m-d"));
        }
        
        if ($concernedTo) {
            $queryBuilder
                ->andWhere("r.concernedDate <= :concernedTo")
                ->setParameter("concernedTo", $concernedTo->format("Y-m-d"));
        }
        
        
        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("r.concernedDate");
        $fieldsList->addField("r.createdAt");
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("r.type");
        $fieldsList->addField("r.status");
        $fieldsList->addField("r.monthOfPayment");
        $fieldsList->addField("r.id");

        $paginator = new Paginator($queryBuilder->getQuery(), $fetchJoinCollection = true);
        $nbResults = count($paginator);

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        $output->sortingManager($fieldsList);

        $paginator = new Paginator($queryBuilder->getQuery(), $fetchJoinCollection = true);
       
        $nextPaymenMonth = $this->getEntityManager()->getRepository("App\Easyjet\OtpBundle\Entity\ExportLog")->getNextPaymentMonth();
//        \Iabsis\DebugBundle\Utils\Dump::show($queryBuilder->getQuery(), 4); exit;
        foreach ($paginator as $currentResult) {
           
            $monthOfPayment = "-";
            if ($currentResult->getDisruption() && $currentResult->getDisruption()->getExportedAt()) {
              
                $monthOfPayment = $currentResult->getDisruption()->getExportedAt()->format("M Y");
            }
          
            if ($currentResult->getSectorAdjustment() &&  $currentResult->getSectorAdjustment()->getExportedAt()) {
                $monthOfPayment = $currentResult->getSectorAdjustment()->getExportedAt()->format("M Y");
            }
            
            if ($monthOfPayment == "-" && $currentResult->getStatus() == OtpRequest::STATUS_STATUS_VALIDATED) {
                $concernedDate = $currentResult->getConcernedDate();
                $followingConcernedMonth = new \DateTime;
                $followingConcernedMonth->setDate($concernedDate->format("Y"), $concernedDate->format("m")+1, 1);
                $followingConcernedMonth->setTime(0, 0, 0);
                $monthOfPaymentDateTime = max($followingConcernedMonth, $nextPaymenMonth);
                $monthOfPayment = $monthOfPaymentDateTime->format("M Y");
            }
            
            $output->addRow(array(
                $currentResult->getConcernedDate() ? $currentResult->getConcernedDate()->format("D, M dS Y") : "unknown",
                $currentResult->getCreatedAt() ? $currentResult->getCreatedAt()->format("D, M dS Y") : "Unknown",
                (string)$currentResult->getConcernedUser(),
                $currentResult->getType(),
                $currentResult->getStatus(),
                $monthOfPayment,
                $currentResult->getType() == OtpRequest::STATUS_TYPE_DISRUPTION ? $currentResult->getDisruption()->getId() : $currentResult->getSectorAdjustment()->getId(),
            ));

        }
        return $output->output();
    }
    
}