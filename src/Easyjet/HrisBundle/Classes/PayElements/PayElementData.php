<?php

namespace App\Easyjet\HrisBundle\Classes\PayElements;

use App\Easyjet\HrisBundle\Classes\PayElements\Interfaces\PayElementReader;

/**
 * PayElementData
 */
class PayElementData
{
    protected $data;

    public function __construct(PayElementReader $reader) {
        $this->data = array();
        $this->cacheData($reader);
    }

    protected function cacheData(PayElementReader $reader) {

        while ($data = $reader->next()) {
            $this->data[] = $data;
        }
    }

    public function getResultIterator() {
        return new PayElementResult($this->data);
    }
}
