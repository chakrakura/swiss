<?php

namespace App\Easyjet\EwishBundle\Repository;

use App\Easyjet\EwishBundle\Entity\PointsPerYear;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PointsPerYear>
 *
 * @method PointsPerYear|null find($id, $lockMode = null, $lockVersion = null)
 * @method PointsPerYear|null findOneBy(array $criteria, array $orderBy = null)
 * @method PointsPerYear[]    findAll()
 * @method PointsPerYear[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PointsPerYearRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PointsPerYear::class);
    }

    public function add(PointsPerYear $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getData()
    {

        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $result = $queryBuilder->select("p")
            ->from("EasyjetEwishBundle:PointsPerYear", "p")
            ->where('p.year = :year')
            ->andWhere('p.reseted = 1')
            ->setParameter('year', date("Y") + 1)
            ->getQuery()->getOneOrNullResult();
        return $result;
    }

    public function getUserPoints($year)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $result = $queryBuilder->select("p")
            ->from("EasyjetEwishBundle:PointsPerYear", "p")
            ->where('p.year = :year')
            ->setParameter('year', $year)
            ->getQuery()->getOneOrNullResult();
        return $result;
    }

    public function remove(PointsPerYear $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
