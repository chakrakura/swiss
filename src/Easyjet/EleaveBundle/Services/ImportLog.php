<?php

namespace App\Easyjet\EleaveBundle\Services;

/**
 * Description of ImportLog
 *
 * @author gillesh
 */
class ImportLog implements \Iterator, \Countable {
    /**
     *
     * @var integer position in the iterator 
     */
    private $position;
    /**
     *
     * @var array
     */
    private $log;
    /**
     *
     * @var \DateTime 
     */
    private $importDate;
    /**
     * Constructor
     */
    public function __construct() {
        $this->importDate = new \DateTime;
    }
    
    /**
     * 
     * @return \DateTime
     */
    public function getImportDate() {
        return $this->importDate;
    }
    /**
     * 
     * @param string $empno
     * @param string $remainingLeaves
     */
    public function addLog($empno, $remainingLeaves, $workRatio) {
        $this->log[] = array(
            "empno" => $empno,
            "remainingLeaves" => $remainingLeaves,
            "workRatio" => $workRatio
        );
    }

    function rewind() {
        $this->position = 0;
    }

    function current() {
        return $this->log[$this->position];
    }

    function key() {
        return $this->position;
    }

    function next() {
        ++$this->position;
    }

    function valid() {
        return isset($this->log[$this->position]);
    }

    public function count() {
        return count($this->log);
    }

}
