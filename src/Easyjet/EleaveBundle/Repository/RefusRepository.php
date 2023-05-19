<?php

namespace App\Easyjet\EleaveBundle\Repository;

use App\Easyjet\EleaveBundle\Entity\Refus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * @extends ServiceEntityRepository<Refus>
 *
 * @method Refus|null find($id, $lockMode = null, $lockVersion = null)
 * @method Refus|null findOneBy(array $criteria, array $orderBy = null)
 * @method Refus[]    findAll()
 * @method Refus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Refus::class);
    }

    public function add(Refus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */

    public function refusDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $nbResults = $queryBuilder->select("COUNT(e)")
            ->from("App\Easyjet\EleaveBundle\Entity\Refus", "e")
            ->getQuery()->getSingleScalarResult();

        $queryBuilder->select("e");

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("e.id");
        $fieldsList->addField("e.label");
        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        $output->sortingManager($fieldsList);


        foreach ($results as $currentResult) {
            $output->addRow(array(
                $currentResult->getLabel(),
                $currentResult->getId()
            ));
        }
        return $output->output();
    }

    public function remove(Refus $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
