<?php

namespace App\Easyjet\HrisBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class HrisEjint096JobTitleRepository extends EntityRepository
{
    
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function findAllAsArray()
    {              
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("jt")
                ->from("EasyjetHrisBundle:HrisEjint096JobTitle", "jt");

        $buffer = array();
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $result) {
            $buffer[$result->getJobCode()] = $result->getEmployeeType();
        }
        
        return $buffer;
    }
    
}