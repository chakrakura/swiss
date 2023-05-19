<?php

namespace App\Easyjet\SwissinsideCoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Dashboard for data confirmation.
 */
class DashboardYourselfDataConfirmedRepository extends EntityRepository
{
    /**
     * Return the X last news.
     *
     * @param int $count Number of news to return
     *
     * @return \App\Easyjet\EnewsBundle\Entity\News[]
     */
    public function getForUser(\App\Easyjet\SwissinsideCoreBundle\Entity\User $user)
    {
        $queryBuilder = $this->getEntityManager('default')->createQueryBuilder();
        $queryBuilder
                ->select('dc')
                ->from('@EasyjetSwissinsideCore:DashboardYourselfDataConfirmed', 'dc')
                ->where('dc.user=:user')
                ->setParameter('user', $user);

        return  $queryBuilder->getQuery()->getOneOrNullResult();
    }
}
