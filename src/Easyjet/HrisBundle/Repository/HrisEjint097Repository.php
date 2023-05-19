<?php

namespace App\Easyjet\HrisBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\HrisBundle\Entity\HrisEjint097Log;

/**
 * Repository for calls
 */
class HrisEjint097Repository extends EntityRepository
{

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function logsDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(log)")
            ->from("App\Easyjet\HrisBundle\Entity\HrisEjint097Log", "log");

        if ($request->get("sSearch")) {
            $queryBuilder
                ->where("(log.archivedFile like :query or log.scriptLogContent like :query)")
                ->setParameter("query", "%" . $request->get("sSearch") . "%");
        }

        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("logFrom"));
        if ($dateFrom) {
            $queryBuilder->andWhere("log.scriptTime >= :dateFrom")->setParameter("dateFrom", $dateFrom);
        }

        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("logTo"));
        if ($dateTo) {
            $dateTo->modify("+1 day");
            $queryBuilder->andWhere("log.scriptTime < :dateTo")->setParameter("dateTo", $dateTo);
        }

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("log");

        $output = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new \App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting();
        $fieldsList->addField("log.scriptTime");
        $fieldsList->addField("log.archivedFile");
        $fieldsList->addField("log.status");

        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {
            $output->addRow(array(
                $currentResult->getScriptTime()->format('F jS Y \a\t H:i'),
                $currentResult->getArchivedFile(),
                $currentResult->getStatus(),
                $currentResult->getId(),
            ));

        }

        return $output->output();
    }

    public function alreadyExportedForMonth(\DateTime $date)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $date->setTime(0, 0, 0);
        $from = $date->format("Y-m-d");

        $date->setTime(23, 59, 59);
        $to = $date->format("Y-m-t");

        $queryBuilder
            ->select("COUNT(log)")
            ->from("EasyjetHrisBundle:HrisEjint097Log", "log")
            ->where("log.scriptTime >= :from")
            ->andWhere("log.scriptTime <= :to")
            ->andWhere("log.status =:status")
            ->setParameter("status", HrisEjint097Log::STATUS_WAITING_SAFEGUARD)
            ->setParameter("from", $from)
            ->setParameter("to", $to)
        ;

        $result = $queryBuilder->getQuery()->getResult();

        if (empty($result)) {
            return false;
        }

        return ($result[0][1] != 0);
    }

}
