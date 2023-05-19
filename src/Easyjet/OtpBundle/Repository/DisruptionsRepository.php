<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class DisruptionsRepository extends EntityRepository
{
    
    /**
     * Return a datatable formatted array for ajax display
     * @param \DateTime $batchDate
     * @return array Datatable formatted array
     */
    public function getDisruptionAmounts(\DateTime $batchDate)
    {
       
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("d")
            ->from('EasyjetOtpBundle:Disruptions', 'd')
            ->where("d.dateEffectivite <= :batchDate")
            ->orderBy("d.dateEffectivite","DESC")
            ->setMaxResults(1)
            ->setParameter('batchDate', $batchDate);
        return $queryBuilder->getQuery()->getOneOrNullResult();
       
    }

   
}