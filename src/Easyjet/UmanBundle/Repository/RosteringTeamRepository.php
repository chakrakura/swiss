<?php

namespace App\Easyjet\UmanBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * Repository for rostering team
 */
class RosteringTeamRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function RosteringDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder
            ->select("COUNT(rt)")
            ->from("EasyjetUmanBundle:RosteringTeam", "rt")
            ->leftJoin("rt.user", "u");

        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("rt")
            ->addSelect("u");

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        $fieldsList = new AjaxDatatableSorting();

        $fieldsList->addField("u.logUser");
        $fieldsList->addField("u.nomUser");
        $fieldsList->addField("u.prenomUser");
        $fieldsList->addField("rt.isAdmin");

        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {

            $output->addRow(array(
                $currentResult->getUser()->getLogUser(),
                $currentResult->getUser()->getNomUser(),
                $currentResult->getUser()->getPrenomUser(),
                $currentResult->getIsAdmin(),
                $currentResult->getId()
            ));
        }

        return $output->output();
    }

}
