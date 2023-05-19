<?php

namespace App\Easyjet\HrisBundle\Classes\ClaimsElement;

use Iterator;

/**
 * ClaimsElementData
 */
class ClaimsElementResult implements Iterator
{
    private $position = 0;
    private $array = array();

    public function __construct($array) {
        $this->array = $array;
    }

    /**
     * Return the data set with only the requested pay elements
     * @param  array $payElements List of pay element to keep in the dataset
     * @return self
     */
    public function filterByClaimsElement($payElements) {
        if (!is_array($payElements)) {
            throw new \Exception("The filterByClaimsElement method expects an array of pay elements");
        }
        foreach ($this->array as $key => $currentData) {
            if (!in_array($currentData['pay-element'], $payElements)) {
                unset($this->array[$key]);
            }
        }

        $this->position = 0;
        $this->array = array_values($this->array);
        return $this;
    }

    /**
     * Make the sum of element amount by user for each element type
     * @return self
     */
    public function mergeByUserAndClaimsElement() {
        $buffer = array();
        foreach ($this->array as $currentData) {
            if (!isset($buffer[$currentData['empno']])) {
                $buffer[$currentData['empno']] = array(
                    "empno" => $currentData['empno'],
                    "disruption" => "",
                    "sector-taxed" => "",
                    "sector-non-taxed" => "",
                );
            }

            switch ($currentData['pay-element']) {
                case 'ONE-TIME_PAYMENT_AMOUNT_PLAN_SHORT_NOTICE_CHANGE':
                    $buffer[$currentData['empno']]['disruption'] += $currentData['value'];
                    break;
                case 'ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_NON_TAXABLE':
                    $buffer[$currentData['empno']]['sector-non-taxed'] += $currentData['value'];
                    break;

                case 'ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_TAXABLE':
                    $buffer[$currentData['empno']]['sector-taxed'] += $currentData['value'];
                    break;

                default:
                    # code...
                    break;
            }

        }

        $this->array = array_values($buffer);
        $this->position = 0;

        return $this;
    }

    public function rewind() : void {
        $this->position = 0;
    }

    public function current() : mixed {
        return $this->array[$this->position];
    }

    public function key() : mixed {
        return $this->position;
    }

    public function next() : void {
        ++$this->position;
    }

    public function valid() : bool {
        return isset($this->array[$this->position]);
    }

    public function toArray() {
        $buffer = array();
        foreach ($this->array as $key => $value) {
            $buffer[$value['empno']] = $value;
        }
        return $buffer;
    }
}
