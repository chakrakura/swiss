<?php

namespace App\Easyjet\UmanBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * Repository for Applications
 */
class ApplicationsRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function applicationsDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $queryBuilder
            ->select("COUNT(a)")
            ->from("EasyjetUmanBundle:Applications", "a");
     
        $nbResults = $queryBuilder->getQuery()->getSingleScalarResult();

        $queryBuilder->select("a")->orderBy('a.id');

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);

        $fieldsList = new AjaxDatatableSorting();

        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        foreach ($results as $currentResult) {
            $output->addRow(array(
                $currentResult->getInitiaux(),
                $currentResult->getNom(),
                $currentResult->getDescription(),
                $currentResult->getId(),
            ));
        }

        return $output->output();
    }


    /**
     * Create the new record in the Applications table
     * @param App\Entity\UmanApplications   $data
     * @return array inserted Application Data
     */

    public function addApplication($data)
    {
        $em = $this->getEntityManager();
        $sql = "INSERT INTO `applications` 
                SET `initiaux` = :initiaux,
                     `nom` = :nom, 
                    `description` = :description";

        // set query params
        $queryParams = [
            'initiaux'     => $data['initiaux'],
            'nom'       => $data['nom'],
            'description' => $data['description'],
        ];
        $result = $em->getConnection()->executeQuery($sql, $queryParams);
        return $result;
    }

    public function getApplications($id)
    {
        $em = $this->getEntityManager();

        $sql = "SELECT *
                FROM  `types_users`
                WHERE id_appli = $id";

        $stmt = $em->getConnection()->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();
        echo "<pre>";
        print_r($result);
        exit;
        return $result;
    }
}
