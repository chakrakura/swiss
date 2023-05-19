<?php

namespace App\Easyjet\HrisBundle\Classes\PayElements\Interfaces;

/**
 * PayElementReader
 */
abstract class PayElementReader
{
    /**
     * Return an array with "empno", "pay-element" and "value"
     * @return array Array with the following keys : "empno", "pay-element" and "value"
     */
    abstract public function next();
}
