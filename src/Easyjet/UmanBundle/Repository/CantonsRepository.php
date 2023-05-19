<?php

namespace App\Easyjet\UmanBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\LockMode;

/**
 * Repository for cantons
 */
class CantonsRepository extends EntityRepository
{
    public function find($id, $lockMode = LockMode::NONE, $lockVersion = null) {

        if($id == 0) return null;
        return parent::find($id, $lockMode, $lockVersion);
    }
}