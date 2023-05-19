<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class CompensationGradesRepository extends EntityRepository
{

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function getKeyedArray()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("cg, type")
            ->from("EasyjetOtpBundle:CompensationGrades", "cg")
            ->leftJoin("cg.typeEftr", "type");
        $array = array();
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {
            $array[$currentResult->getLabel()] = $currentResult;
        }

        return $array;
    }
}
