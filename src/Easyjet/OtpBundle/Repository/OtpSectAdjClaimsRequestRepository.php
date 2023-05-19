<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class OtpSectAdjClaimsRequestRepository extends EntityRepository
{
    
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function getAdjustmentClaimsToBeExported()
    {              
        
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("adjustment, row, batch")
            ->from('EasyjetOtpBundle:OtpSectAdjClaimsRequest', 'adjustment')
            ->leftJoin("adjustment.row", "row")
            ->leftJoin("row.batch", "batch")
            ->where("adjustment.status = 'accepted'")
            ->andWhere("row.batch IS NOT NULL")
            ->andWhere("adjustment.exportedAt IS NULL")
            ->andWhere("batch.removed is null");
        return $queryBuilder->getQuery()->getResult();
    }

    
}