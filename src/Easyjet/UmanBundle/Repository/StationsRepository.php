<?php

namespace App\Easyjet\UmanBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * Repository for stations
 */
class StationsRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function stationsDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    { 
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(s)")
            ->from("EasyjetUmanBundle:Stations", "s");
      
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("s")->orderBy('s.iataCode');
           

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new AjaxDatatableSorting();
     
        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {

            $output->addRow(array(
                $currentResult->getIataCode(),
                $currentResult->getIdStation(),
            ));
        }

        return $output->output();
    }

}
