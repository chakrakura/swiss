<?php

namespace App\Easyjet\UmanBundle\Repository;

use Doctrine\ORM\EntityRepository;
use App\Classes\AjaxDatatableOutput;
use App\Classes\AjaxDatatableSorting;

/**
 * Repository for stations
 */
class TypesUsersRepository extends EntityRepository
{
    /**
     * Return a datatable formatted array for ajax display
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return array Datatable formatted array
     */
    public function stationsDatatableResults(\Symfony\Component\HttpFoundation\Request $request)
    {
       
    }

}
