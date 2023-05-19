<?php

namespace App\Easyjet\EwishBundle\Repository;

use App\Easyjet\EwishBundle\Entity\Calendrier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Calendrier>
 *
 * @method Calendrier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calendrier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calendrier[]    findAll()
 * @method Calendrier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalendrierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calendrier::class);
    }

    public function add(Calendrier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    
    /**
     * Return a Calendar Data
     * @param int $idUser
     * @param string $date
     * @return array Calendar Data
    */
    public function getUserCalendarData($date,$idUser)
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $results = $queryBuilder->select("c")
                                ->from("EasyjetEwishBundle:Calendrier", "c")
                                ->where('c.idUser =:idUser')
                                ->andWhere('c.debut >=:startDate')
                                ->andWhere('c.debut <=:endDate')
                                ->setParameters(["idUser"=>$idUser, "startDate" => $date. ' 00:00:00',"endDate" => $date. ' 23:59:59' ])
                                ->getQuery()->getResult();

      return $results;                          
    }


    public function remove(Calendrier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    

}
