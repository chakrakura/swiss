<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\OtpBundle\Entity\OtpImportRow;

/**
 * Repository for calls
 */
class OtpDisruptionRepository extends EntityRepository
{

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function findAllLinkedTo(OtpImportRow $otpRow)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("d")
            ->from("EasyjetOtpBundle:OtpDisruption", "d")
            ->leftJoin("d.row", "row")
            ->leftJoin("row.batch", "batch")
            ->where("row.empno = :empno")
            ->andWhere("(row.id= :rowId or d.exportedAt is null)")
            ->andWhere("d.state = 1")
            ->andWhere("batch.removed is null")
            ->setParameter('empno', $otpRow->getEmpno())
            ->setParameter('rowId', $otpRow->getId());


        $results = $queryBuilder->getQuery()->getResult();
        return $results;
    }

    /**
     * Return a disruptions count for user same date
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return int count
     */
    public function disruptionsCountByDate($empNo, $date)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("count(d)")
            ->from("EasyjetOtpBundle:OtpDisruption", "d")
            ->join("d.request", "r")
            ->join("r.concernedUser", "u")
            ->where("u.logUser = :empNo")
            ->andWhere("d.state != 2")
            ->andWhere("r.type = 'disruption'")
            ->andWhere("r.concernedDate = :date")
            ->setParameter('empNo', $empNo)
            ->setParameter('date', $date);
        $results = $queryBuilder->getQuery()->getSingleScalarResult();
        return $results;
    }


    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function getDisruptionsToBeExported()
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("d, row, batch")
            ->from('EasyjetOtpBundle:OtpDisruption', 'd')
            ->leftJoin("d.row", "row")
            ->leftJoin("row.batch", "batch")
            ->where("d.exportedAt IS NULL")
            ->andWhere("row.batch IS NOT NULL")
            ->andWhere("d.state = 1")
            ->andWhere("batch.removed is null");
        return $queryBuilder->getQuery()->getResult();
    }
}
