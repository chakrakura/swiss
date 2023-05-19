<?php

namespace App\Easyjet\HrisBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class HrisEjint096PayElementRepository extends EntityRepository
{

    public function findAll() : array {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("pe, hcr, sr")
                ->from("App\Easyjet\HrisBundle\Entity\HrisEjint096PayElement", "pe")
                ->leftJoin("pe.hardCodedRules", "hcr")
                ->leftJoin("pe.softRules", "sr");

        return $queryBuilder->getQuery()->getResult();

    }
    
    
}