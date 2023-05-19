<?php

namespace App\Easyjet\SwissinsideCoreBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Repository for dashboard last view.
 */
class DashboardSupportFormRepository extends EntityRepository
{
    /**
     * Return the X last news.
     *
     * @param int $count Number of news to return
     *
     * @return \App\Easyjet\SwissinsideCoreBundle\Entity\DashboardSupportForm
     */
    public function getForUser(\App\Easyjet\SwissinsideCoreBundle\Entity\User $user)
    {
        $queryBuilder = $this->getEntityManager('uman')->createQueryBuilder();
        $queryBuilder
                ->select('dsf')
                ->from('EasyjetSwissinsideCoreBundle:DashboardSupportForm', 'dsf')
                ->where('dsf.user=:user')
                ->setParameter('user', $user);

        $confirmation = $queryBuilder->getQuery()->getOneOrNullResult();
        if (!$confirmation) {
            $confirmation = new \App\Easyjet\SwissinsideCoreBundle\Entity\DashboardSupportForm($user);
        }

        return $confirmation;
    }
}
