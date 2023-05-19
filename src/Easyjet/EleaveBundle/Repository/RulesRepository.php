<?php

namespace App\Easyjet\EleaveBundle\Repository;

use App\Easyjet\EleaveBundle\Entity\Rules;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableOutput;
use App\Easyjet\SwissinsideCoreBundle\Classes\AjaxDatatableSorting;

/**
 * @extends ServiceEntityRepository<Rules>
 *
 * @method Rules|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rules|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rules[]    findAll()
 * @method Rules[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RulesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rules::class);
    }

    public function add(Rules $entity, bool $flush = false): void
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

    public function rulesDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();

        $nbResults = $queryBuilder->select("COUNT(r)")
            ->from("App\Easyjet\EleaveBundle\Entity\Rules", "r")
            ->getQuery()->getSingleScalarResult();


        $queryBuilder->select("r");

        $output = new AjaxDatatableOutput($request, $queryBuilder, $nbResults);
        $fieldsList = new AjaxDatatableSorting();
        $fieldsList->addField("r.id");
        $fieldsList->addField("r.text");
        $output->sortingManager($fieldsList);
        $results = $queryBuilder->getQuery()->getResult();
        $output->sortingManager($fieldsList);


        foreach ($results as $currentResult) {
            $output->addRow(array(
                mb_strimwidth($currentResult->getText(), 0, 90, '...'),
                $currentResult->getId()
            ));
        }
        return $output->output();
    }

    public function remove(Rules $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
