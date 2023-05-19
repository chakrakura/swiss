<?php

namespace App\Easyjet\EwishBundle\Repository;

use App\Easyjet\EwishBundle\Entity\FestivalPeriodDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<FestivalPeriodDate>
 *
 * @method FestivalPeriodDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method FestivalPeriodDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method FestivalPeriodDate[]    findAll()
 * @method FestivalPeriodDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FestivalPeriodDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FestivalPeriodDate::class);
    }

    public function add(FestivalPeriodDate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getUserCalendarData($date,$idUser)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $results = $queryBuilder->select("c")
                                ->from("EasyjetEwishBundle:Calendrier", "c")
                                ->where('c.idUser =:idUser')
                                ->andWhere('c.debut >=:startDate')
                                ->andWhere('c.fin <=:endDate')
                                ->setParameters(["idUser"=>$idUser, "startDate" => $date. ' 00:00:00',"endDate" => $date. ' 23:59:59' ])
                                ->getQuery()->getResult();

      return $results;                          
    }


    public function remove(FestivalPeriodDate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    

}
