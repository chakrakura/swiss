<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for ExportLogRepository
 */
class ExportLogRepository extends EntityRepository
{

    /**
     * 
     * @return \DateTime
     */
    public function getNextPaymentMonth()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select(' MAX(el.exportDate) AS lastExportDate')
            ->from("EasyjetOtpBundle:ExportLog", "el");
        $result = $queryBuilder->getQuery()->getResult();
        $date = new \DateTime($result[0]["lastExportDate"]);
        $date->add(new \DateInterval("P1M"));
        return $date;
    }
}
