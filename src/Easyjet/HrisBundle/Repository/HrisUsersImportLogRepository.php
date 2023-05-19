<?php

namespace App\Easyjet\HrisBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for calls
 */
class HrisUsersImportLogRepository extends EntityRepository
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
                ->from("App\Easyjet\HrisBundle\Entity\HrisUsersImportLog", "log");


        if ($request->get("sSearch")) {
            $queryBuilder
                ->where("(log.archivedFile like :query or log.scriptLogContent like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");
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
                $currentResult->getId()
            ));

        }

        return $output->output();
    }

}
