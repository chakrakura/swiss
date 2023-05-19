<?php

namespace App\Easyjet\HrisBundle\Classes\ClaimsElement;

use Classes\ClaimsElement\Interfaces\ClaimsElementReader;

/**
 * ClaimsElementData
 */
class ClaimsElementData
{
    protected $data;

    public function __construct(ClaimsElementReader $reader) {
        $this->data = array();
        $this->cacheData($reader);
    }

    protected function cacheData(ClaimsElementReader $reader) {

        while ($data = $reader->next()) {
            $this->data[] = $data;
        }
    }

    public function getResultIterator() {
        return new ClaimsElementResult($this->data);
    }
}
