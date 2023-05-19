<?php

namespace App\Easyjet\UmanBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for HRDB synch log
 */
class HrdbSynchLogRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function HrdbSynchLogDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {                
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $expr = $queryBuilder->expr();
        $queryBuilder
                ->select("COUNT(hsl)")                
                ->from("EasyjetUmanBundle:HrdbSynchLog", "hsl");
        
        if($request->get("concernedUser")) {
            $user = $this->getEntityManager()->getRepository("EasyjetUmanBundle:Users")->find($request->get("concernedUser"));
            
            if($user) {
                $queryBuilder->where($expr->in("hsl", "SELECT log.id FROM EasyjetUmanBundle:HrdbSynchLogConcernedUser cu LEFT JOIN cu.hrdbSynchLog log where cu.user=:user"))
                         ->setParameter("user", $user);
            }            
        }
        
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();
        $queryBuilder->select("hsl");
        
        $output = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        
        $fieldsList = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting();        
        $fieldsList->addField("hsl.requestTime");
        $fieldsList->addField("hsl.status");
        $output->sortingManager($fieldsList);
        
        $results = $queryBuilder->getQuery()->getResult();
        foreach($results as $currentResult) {
            
            $output->addRow(array(
                (int)$currentResult->getRequestTime()->format("Y") == -1 ? "-" : $currentResult->getRequestTime()->format("d/m/Y H:i:s"),
                $currentResult->getType(),
                $currentResult->getStatus(),
                $currentResult->getId(),
            ));

        }
        
        return $output->output();
    }
}