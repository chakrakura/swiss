<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * Repository for calls
 */
class FactorisationsRepository extends EntityRepository
{

    /**
     * Return a datatable formatted array for ajax display
     * @param \DateTime $batchDate
     * @return array Datatable formatted array
     */
    public function getFactoriations(\DateTime $batchDate)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("f")
            ->from('EasyjetOtpBundle:Factorisations', 'f')
            ->where("f.dateEffectivite <= :batchDate")
            ->orderBy("f.dateEffectivite", "DESC")
            ->setMaxResults(1)
            ->setParameter('batchDate', $batchDate);
        return $queryBuilder->getQuery()->getSingleResult();
    }
}
