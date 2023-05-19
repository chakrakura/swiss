<?php

namespace App\Easyjet\HrisBundle\Classes\Import;

use App\Easyjet\HrisBundle\Entity\HrisEjint096DataCheck;

/**
* ImportLogger
*/
class Ejint096TesterLogger
{
    private $logContent;

    const MESSAGE_FATAL = "FATAL";
    const MESSAGE_INFO = "INFO";
    const MESSAGE_WARNING = "WARNING";

    private $archivedFile = array();
    private $status = null;
    private $command = "";
    private $xlsFile = null;


    public function __construct()
    {
        $this->status = HrisEjint096DataCheck::STATUS_SUCCESS;
    }

    public function fatalException($error)
    {
        $this->addLine($error, self::MESSAGE_FATAL);
        $this->status = HrisEjint096DataCheck::STATUS_FAILED;
    }

    public function addWarning($warning) {
        $this->addLine($warning, self::MESSAGE_WARNING);
        $this->status = HrisEjint096DataCheck::STATUS_WARNING;
    }



    public function addLine($text, $type=self::MESSAGE_INFO) {
        $this->logContent .= sprintf("%s - [%s] %s\n", date("Y-m-d H:i:s"), $type, $text);
    }

    public function nothingToParse() {
        $this->addLine("Nothing to parse", self::MESSAGE_INFO);
    }

    public function setCommand($command) {
        $this->command = $command;
    }

    public function setXls($xlsFile) {
        $this->xlsFile = $xlsFile;
    }

    public function getEntity() {


        $hrisEjint096DataCheck = new HrisEjint096DataCheck();
        $hrisEjint096DataCheck
                ->setScriptLogContent($this->logContent)
                ->setStatus($this->status)
                ->setCommand($this->command)
                ->setXlsFile($this->xlsFile);


        return $hrisEjint096DataCheck;
    }

}
