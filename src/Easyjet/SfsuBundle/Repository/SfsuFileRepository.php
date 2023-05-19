<?php

namespace App\Easyjet\SfsuBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * Repository for calls
 */
class SfsuFileRepository extends EntityRepository
{

    public function findFilesToRemove()
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("f")
            ->from("EasyjetSfsuBundle:SfsuFile", "f")
            ->where("f.deleteAfterDownload=1 and f.nbDownloads>0")
            ->orWhere("f.expirationDatetime<:now")
            ->andWhere("f.filename!=''")
            ->setParameter("now", new \Datetime);

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function logsDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $user)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(f)")
            ->from("EasyjetSfsuBundle:SfsuFile", "f")
            ->leftJoin("f.createdBy", "u");


        if ($request->get("sSearch")) {
            $queryBuilder
                ->where("(f.originalFilename like :query or u.logUser like :query or u.nomUser like :query or u.prenomUser like :query)")
                ->setParameter("query", "%" . $request->get("sSearch") . "%");
        }

        $dateFrom = \DateTime::createFromFormat("d/m/Y", $request->get("createdFrom"));

        if ($dateFrom) {
            $dateFrom->setTime(0, 0, 0);
            $queryBuilder->andWhere("f.createdAt >= :dateFrom")->setParameter("dateFrom", $dateFrom);
        }

        $dateTo = \DateTime::createFromFormat("d/m/Y", $request->get("createdTo"));

        if ($dateTo) {
            $dateTo->setTime(0, 0, 0);
            $dateTo->modify("+1 day");
            $queryBuilder->andWhere("f.createdAt < :dateTo")->setParameter("dateTo", $dateTo);
        }

        if ($user) {
            $queryBuilder->andWhere("f.createdBy=:user")->setParameter("user", $user);
        }

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("f, u");

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("u.logUser");
        $fieldsList->addField("f.originalFilename");
        $fieldsList->addField("f.createdAt");
        $fieldsList->addField("f.nbDownloads");
        $fieldsList->addField("f.originalFilename");
        $fieldsList->addField("f.id");

        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {
            $output->addRow(array(
                $currentResult->getCreatedBy()->getLogUser(),
                $currentResult->getOriginalFilename(),
                $currentResult->getCreatedAt()->format('F jS Y \a\t H:i'),
                $currentResult->getNbDownloads(),
                $currentResult->getFilename() ? $currentResult->getExpirationDatetime()->format('F jS Y \a\t H:i') : "0", // Is active ?
                $currentResult->getId(),

            ));
        }

        return $output->output();
    }
}
