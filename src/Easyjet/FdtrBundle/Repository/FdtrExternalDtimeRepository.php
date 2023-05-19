<?php

namespace App\Easyjet\FdtrBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport;
use App\Easyjet\FdtrBundle\Entity\FdtrExternalDtime;

/**
 * Repository for calls
 */
class FdtrExternalDtimeRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function findOrCreate(FdtrMonthlyReport $monthlyReport)
    {
        $externalDutyTime = $this->find($monthlyReport->getId());

        if (!$externalDutyTime) {
            $externalDutyTime = new FdtrExternalDtime($monthlyReport);
        }

        return $externalDutyTime;

    }
}
