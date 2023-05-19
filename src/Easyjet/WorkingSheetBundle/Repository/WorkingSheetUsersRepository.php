<?php

namespace App\Easyjet\WorkingSheetBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of WorkingSheetPatternRepository
 *
 * @author gillesh
 */
class WorkingSheetUsersRepository extends EntityRepository {
    public function getActiveUsers() {
       $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        // EasyjetWorkingSheetBundle
        return $queryBuilder
            ->select("u")
            ->from("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers", "u")
            ->where("u.workingSheetAccessLevel>:right")
            ->setParameter("right", 0)
            ->getQuery()
            ->getResult();
    }
}
