<?php

namespace App\Easyjet\SwissinsideCoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for dashboard last view.
 */
class DashboardLastViewRepository extends EntityRepository
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
        $queryBuilder = $this->getEntityManager('uman')->createQueryBuilder();
        $queryBuilder
                ->select('dlv')
                ->from('@EasyjetSwissinsideCore:DashboardLastView', 'dlv')
                ->where('dlv.user=:user')
                ->setParameter('user', $user);

        $lastView = $queryBuilder->getQuery()->getOneOrNullResult();
        if (!$lastView) {
            $lastView = new \App\Easyjet\SwissinsideCoreBundle\Entity\DashboardLastView();
            $lastView->setUser($user);
        }

        return $lastView;
    }
}
