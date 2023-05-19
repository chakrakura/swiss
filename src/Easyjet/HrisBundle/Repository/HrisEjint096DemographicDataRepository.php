<?php

namespace App\Easyjet\HrisBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class HrisEjint096DemographicDataRepository extends EntityRepository
{

    public function findAll() : array {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("dd, hcr, sr")
                ->from("EasyjetHrisBundle:HrisEjint096DemographicData", "dd")
                ->leftJoin("dd.hardCodedRules", "hcr")
                ->leftJoin("dd.softRules", "sr");

        return $queryBuilder->getQuery()->getResult();

    }

    public function findAllByArray() {
        $allItems = $this->findAll();
        $return = array();
        foreach ($allItems as $currentItem) {
            $return[$currentItem->getDemographicData()] = $currentItem;
        }

        return $return;
    }

    
}