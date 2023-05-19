<?php

namespace App\Easyjet\HrisBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class HrisEjint096CivilStatusRepository extends EntityRepository
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
                ->select("cs")
                ->from("EasyjetHrisBundle:HrisEjint096CivilStatus", "cs");

        $buffer = array();
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $result) {
            $buffer[strtolower($result->getSgwiName())] = $result->getProconceptCode();
        }
        
        return $buffer;
    }
    
}