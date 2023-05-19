<?php

namespace App\Easyjet\WorkingSheetBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of WorkingSheetPatternRepository
 *
 * @author gillesh
 */
class WorkingSheetPatternRepository extends EntityRepository {
    public function patternAccessGrantedForUser(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern $pattern, \App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $for, \Symfony\Component\Security\Core\Authorization\AuthorizationChecker $securityContext) {
        
        if ($pattern->getPatternForUser()->getId() == $for->getId()) {
            return true;
        }
        
        if ($securityContext->isGranted('ROLE_WORKING_SHEET_ADMIN')) {
            return true;
        }
        
        if ($securityContext->isGranted('ROLE_WORKING_SHEET_LINE_MANAGER')) {
            if ($pattern->getPatternForUser() && $pattern->getPatternForUser()->getLineManager() && $pattern->getPatternForUser()->getLineManager()->getId() == $for->getId         ()) {
                return true;
            }
        }
        
        return false;
    }
    
    public function findAdministrablePatterns(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $authenticatedUser, \Symfony\Component\Security\Core\Authorization\AuthorizationChecker $securityContext) {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select("p")
                     ->from("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern", "p")
                     ->leftJoin("p.patternForUser", "u");
        
        if (!$securityContext->isGranted("ROLE_WORKING_SHEET_ADMIN")) {
            if ($securityContext->isGranted("ROLE_WORKING_SHEET_LINE_MANAGER")) {
                $queryBuilder->andWhere("u.lineManager = :lineManager")->setParameter("lineManager", $authenticatedUser->getId());
            }

            if ($securityContext->isGranted("ROLE_WORKING_SHEET_USER")) {
                $queryBuilder->andWhere("u.id = :user")->setParameter("user", $authenticatedUser->getId());
            }
        }
        return $queryBuilder->getQuery()->getResult();
    }
    
    public function setActivePatternForUser(\App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers $user) {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->update("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern", "p")
                     ->set("p.active", "0")
                     ->where("p.patternForUser = :user")
                     ->setParameter("user", $user)
                     ->getQuery()
                     ->execute();
        
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $toBeActivated = $queryBuilder->select("p")
                     ->from("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern", "p")
                     ->where("p.patternForUser = :user")
                     ->andWhere("p.status = :status")
                     ->setParameter("user", $user)
                     ->setParameter("status", \App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern::STATUS_VALIDATED)
                     ->orderBy("p.createdAt", "DESC")
                     ->setMaxResults(1)
                     ->getQuery()
                     ->getOneOrNullResult();
        
        if ($toBeActivated) {
            $queryBuilder = $this->getEntityManager()->createQueryBuilder();
            $queryBuilder->update("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern", "p")
                         ->set("p.active", "1")
                         ->where("p.id = :patternId")
                         ->setParameter("patternId", $toBeActivated->getId())
                         ->getQuery()
                         ->execute();
        }
        
    }
}
