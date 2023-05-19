<?php

namespace App\Easyjet\FdtrBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\FdtrBundle\Entity\FdtrParameters;
use Doctrine\DBAL\LockMode;

/**
 * Repository for calls
 */
class FdtrParametersRepository extends EntityRepository
{
    
    public function find($id, $lockMode = LockMode::NONE, $lockVersion = null) {
        $result = parent::find($id, $lockMode, $lockVersion);
        if (!$result) {
            return new FdtrParameters($id, "");
        } else {
            return $result;
        }
    }
}