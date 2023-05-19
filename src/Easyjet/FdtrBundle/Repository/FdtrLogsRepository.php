<?php

namespace App\Easyjet\FdtrBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * Repository for calls
 */
class FdtrLogsRepository extends EntityRepository
{
    
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function logsDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {              
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        
        $queryBuilder
                ->select("COUNT(log)")
                ->from("EasyjetFdtrBundle:FdtrLog", "log");


        if ($request->get("sSearch")) {
            $queryBuilder
                ->where("(log.archivedFile like :query or log.logContent like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");
        }

        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("logFrom"));
        if ($dateFrom) {
            $queryBuilder->andWhere("log.scriptTime >= :dateFrom")->setParameter("dateFrom", $dateFrom);
        }

        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("logTo"));
        if ($dateTo) {
            $dateTo->modify("+1 day");
            $queryBuilder->andWhere("log.scriptTime < :dateTo")->setParameter("dateTo", $dateTo);
        }
        
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();
        
        $queryBuilder->select("log");
        
        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        
        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("log.scriptTime");
        $fieldsList->addField("log.archivedFile");
        $fieldsList->addField("log.status");
        
        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {
            $output->addRow(array(
                $currentResult->getScriptTime()->format('F jS Y \a\t H:i'),
                $currentResult->getArchivedFile(),
                $currentResult->getStatus(),
                $currentResult->getId()
            ));

        }
        
        return $output->output();
    }
    
}