<?php

namespace App\Easyjet\HrisBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class HrisProcessingCalendarRepository extends EntityRepository
{

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
   public function findCurrent()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $currentDate = new \DateTime();
      
        $queryBuilder
                ->select("pc")
                ->from("EasyjetHrisBundle:HrisProcessingCalendar", "pc")
                ->where("pc.paymentMonth >= :dateMin and pc.paymentMonth <= :dateMax")
                ->setParameter("dateMin", $currentDate->format("Y-m-") . "01")
                ->setParameter("dateMax", $currentDate->format("Y-m-t"));

        try {
            $result = $queryBuilder->getQuery()->getOneOrNullResult();
        } catch (\Doctrine\ORM\NonUniqueResultException $error) {
            throw new \Exception("There are multiple payroll calendar set for the current month : " . $currentDate->format("M Y"));
        }

        if (!$result) {
            throw new \Exception("No planning set for the current month.");
        }

        return $result;
    }

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function findNextMonth()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $currentDate = new \DateTime();
        $currentDate->add(new \DateInterval("P1M"));

        $queryBuilder
                ->select("pc")
                ->from("EasyjetHrisBundle:HrisProcessingCalendar", "pc")
                ->where("pc.paymentMonth >= :dateMin and pc.paymentMonth <= :dateMax")
                ->setParameter("dateMin", $currentDate->format("Y-m-") . "01")
                ->setParameter("dateMax", $currentDate->format("Y-m-t"));
        
        try {
            $result = $queryBuilder->getQuery()->getOneOrNullResult();
        } catch (\Doctrine\ORM\NonUniqueResultException $error) {
            throw new \Exception("There are multiple payroll calendar set for the month : " . $currentDate->format("M Y"));
        }


        if (!$result) {
            throw new \Exception("No planning set for the current month.");
        }

        return $result;
    }

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function findNextProcessedMonth()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $currentDate = new \DateTime();

        $queryBuilder
                ->select("pc")
                ->from("EasyjetHrisBundle:HrisProcessingCalendar", "pc")
                ->where("pc.paymentMonth >= :currentDate")
                ->andWhere("pc.ejint201ClaimsExportSatisfied is null")
                ->orderBy("pc.paymentMonth")
                ->setMaxResults(1)
                ->setParameter("currentDate", $currentDate->format("Y-m-d"));
        try {
            $result = $queryBuilder->getQuery()->getOneOrNullResult();
        } catch (\Doctrine\ORM\NonUniqueResultException $error) {
            throw new \Exception("There are multiple payroll calendar set for the month : " . $currentDate->format("M Y"));
        }

        if (!$result) {
            throw new \Exception("There is no more payroll calendar to be processed.");
        }

        return $result;
    }
}
