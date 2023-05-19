<?php

namespace App\Easyjet\OtpBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * Repository for calls
 */
class OtpImportRowRepository extends EntityRepository
{

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function otpDatatableResults(\Symfony\Component\HttpFoundation\Request $request, $isAdmin, \App\Easyjet\UmanBundle\Entity\Users $authenticatedUser)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("rows, typeEftr, batch, disruptions, adjustments, comments")
            ->from("EasyjetOtpBundle:OtpImportRow", "rows")
            ->leftJoin("rows.typeEftr", "typeEftr")
            ->leftJoin("rows.batch", "batch")
            ->leftJoin("rows.disruptions", "disruptions")
            ->leftJoin("rows.sectorsAdjustments", "adjustments")
            ->leftJoin("adjustments.comments", "comments")
            ->where("batch.removed IS NULL");
        
        if ($request->get("sSearch")) {
            $queryBuilder
                ->andWhere("(rows.empno like :query or rows.firstname like :query or rows.lastname like :query)")
                ->setParameter("query", "%".$request->get("sSearch")."%");
        }    
        if (!$isAdmin) {
            $queryBuilder
                ->andWhere('rows.empno = :empno')
                ->andWhere('batch.published = 1')
                ->setParameter('empno', $authenticatedUser->getLogUser());
        }
        

        switch ($request->query->get('disruptionInProgress', "all")) {
            case "yes":
                $subQuery = $this->getEntityManager()->createQueryBuilder();
                $string = $subQuery->select('row.id')
                    ->from('EasyjetOtpBundle:OtpDisruption', 'd')
                    ->leftJoin("d.row", 'row')
                    ->where('d.state = 0')
                    ->getDQL();
                $queryBuilder->andWhere($queryBuilder->expr()->in(
                    'rows.id',
                    $string
                ));

                break;
            case "no":
                $subQuery = $this->getEntityManager()->createQueryBuilder();
                $string = $subQuery->select('row.id')
                    ->from('EasyjetOtpBundle:OtpDisruption', 'd')
                    ->leftJoin("d.row", 'row')
                    ->where('d.state = 0')
                    ->getDQL();
                $queryBuilder->andWhere($queryBuilder->expr()->notIn(
                    'rows.id',
                    $string
                ));

                break;

            case 'all':
            default:
                break;
        }


        if ($request->query->get('hasPendingSectorAdjustment', "all") == "yes") {
            $subQuery = $this->getEntityManager()->createQueryBuilder();
            $string = $subQuery->select('prow.id')
                ->from('EasyjetOtpBundle:OtpSectAdjClaimsRequest', 'r')
                ->leftJoin("r.row", 'prow')
                ->where("r.status = 'pending'")
                ->getDQL();

            $queryBuilder->andWhere(
                $queryBuilder->expr()->in('rows.id', $string)
            );
        }


        $from = $request->query->get('effectiveDateFrom', date("d/m/Y"));
        $to = $request->query->get('effectiveDateTo', date("d/m/Y"));

        $fromDateTime = \DateTime::createFromFormat("d/m/Y", $from);
        $toDateTime = \DateTime::createFromFormat("d/m/Y", $to);

        if ($fromDateTime) {
            $queryBuilder
                ->andWhere("batch.effectiveDate >= :effectiveDateFrom")
                ->setParameter("effectiveDateFrom", $fromDateTime->format("Y-m-d"));
        }
        if ($toDateTime) {
            $queryBuilder
                ->andWhere("batch.effectiveDate <= :effectiveDateTo")
                ->setParameter("effectiveDateTo", $toDateTime->format("Y-m-d"));
        }

        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("batch.cvpMonth");
        $fieldsList->addField("rows.empno");
        $fieldsList->addField("rows.firstname");
        $fieldsList->addField("rows.lastname");
        $fieldsList->addField("rows.compensationGrade");
        $fieldsList->addField("typeEftr.type");
        $fieldsList->addField("rows.sectN");
        $fieldsList->addField("rows.sectS");
        $fieldsList->addField("rows.sectM");
        $fieldsList->addField("rows.sectL");
        $fieldsList->addField("rows.sectXL");
        $fieldsList->addField("rows.nbDisruptions");
        $fieldsList->addField("rows.id");


        $paginator = new Paginator($queryBuilder->getQuery(), $fetchJoinCollection = true);
        $nbResults = count($paginator);

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        $output->sortingManager($fieldsList);

        $paginator = new Paginator($queryBuilder->getQuery(), $fetchJoinCollection = true);

        foreach ($paginator as $currentResult) {
            $hasPendingDisruption = 0;
            foreach ($currentResult->getDisruptions() as $currentDisruption) {
                if ($currentDisruption->getState() == 0) {
                    $hasPendingDisruption = 1;
                    break;
                }
            }

            $hasDisruptionComment = 0;
            if ($currentResult->getDisruptionComment()) {
                $hasDisruptionComment = 1;
            }


            $hasSectorComment = 0;

            $sectorStatus = "none";

            foreach ($currentResult->getSectorsAdjustments() as $currentAdjustment) {
                if ($currentAdjustment->getStatus() == "pending") {
                    $hasSectorComment = 1;
                    $sectorStatus = "pending";
                    break;
                }

                if ($currentAdjustment->getStatus() == "accepted") {
                    $sectorStatus = "accepted";
                }

                if ($currentAdjustment->getStatus() == "refused") {
                    $sectorStatus = "refused";
                }
            }



            $output->addRow(array(
                $currentResult->getBatch()->getCvpMonth()->format("M Y"),
                $currentResult->getEmpno(),
                $currentResult->getFirstname(),
                $currentResult->getLastname(),
                $currentResult->getCompensationGrade(),
                $currentResult->getTypeEftr()->getType(),
                $currentResult->getSectN(),
                $currentResult->getSectS(),
                $currentResult->getSectM(),
                $currentResult->getSectL(),
                $currentResult->getSectXL(),
                count($currentResult->getDisruptions()),
                $currentResult->getId(),
                $hasPendingDisruption,
                $hasDisruptionComment,
                $hasSectorComment,
                $sectorStatus
            ));
        }

        return $output->output();
    }

    public function findForMonth(\DateTime $month, $empno)
    {
        $from = clone $month;
        $from->setDate($from->format("Y"), $from->format("m"), 1);

        $to = clone $month;
        $to->setDate($from->format("Y"), $from->format("m"), $from->format("t"));
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("rows")
            ->from("EasyjetOtpBundle:OtpImportRow", "rows")
            ->leftJoin("rows.batch", "batch")
            ->where("rows.empno = :empno")
            ->andWhere("batch.cvpMonth >= :from")
            ->andWhere("batch.cvpMonth <= :to")
            ->andWhere("batch.removed IS NULL")
            ->setParameter("from", $from)
            ->setParameter("to", $to)
            ->setParameter("empno", $empno);
        return $queryBuilder->getQuery()->getOneOrNullResult();
    }

}
