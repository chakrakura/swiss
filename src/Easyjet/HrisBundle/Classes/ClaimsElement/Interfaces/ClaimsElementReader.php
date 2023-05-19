<?php

namespace App\Easyjet\HrisBundle\Classes\ClaimsElement\Interfaces;

/**
 * ClaimsElementReader
 */
abstract class ClaimsElementReader
{
    /**
     * Return an array with "empno", "pay-element" and "value"
     * @return array Array with the following keys : "empno", "pay-element" and "value"
     */
    abstract public function next();
}
