<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class ImportBatchRepository extends EntityRepository
{
    
    public function isLastBatchReadonly() {
    	$queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("batch")
                ->from("EasyjetOtpBundle:OtpImportBatch", "batch")
                ->where('batch.removed IS NULL')
                ->orderBy("batch.importDate", "desc")
                ->setMaxResults(1);
        $results = $queryBuilder->getQuery()->getResult();
        if (count($results) == 1) {
        	return $results[0]->getLocked();
        }
        return false;
    }

    public function isBatchReadonly(\App\Easyjet\OtpBundle\Entity\OtpImportBatch $batch) {
    	$queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
                ->select("batch")
                ->from("EasyjetOtpBundle:OtpImportBatch", "batch")
                ->where('batch.removed IS NULL')
                ->andWhere("batch.id = :batchId")
                ->setParameter('batchId', $batch->getId())
                ->setMaxResults(1);
        $results = $queryBuilder->getQuery()->getResult();
        if (count($results) == 1) {
        	return $results[0]->getLocked();
        }
        return false;
    }
    
     /**
     * Checks the batch is there on not for current month
     * @param \DateTime $batchDate
     * @return array Datatable formatted array
     */
    public function hasBatchForCurrentMonth(\DateTime $date = null) {
        if (!$date) {
            $date = new \DateTime();
        }
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("batch")
            ->from("EasyjetOtpBundle:OtpImportBatch", "batch")
            ->where('batch.removed IS NULL')
            ->andWhere("batch.effectiveDate >= :dateMin")
            ->andWhere("batch.effectiveDate <= :dateMax")
            ->setParameter("dateMin", $date->format("Y-m-") . "01")
            ->setParameter("dateMax", $date->format("Y-m-t"))
            ->setMaxResults(1);
        $results = $queryBuilder->getQuery()->getResult();
        if (count($results) == 1) {
            return $results;
        }
        return false;
    }
}