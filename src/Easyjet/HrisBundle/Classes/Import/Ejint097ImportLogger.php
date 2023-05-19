<?php

namespace App\Easyjet\HrisBundle\Classes\Import;

use App\Easyjet\HrisBundle\Entity\HrisEjint097Log;

/**
* ImportLogger
*/
class Ejint097ImportLogger
{
    private $logContent;

    private $fileParsedSuccessfully;

    const MESSAGE_FATAL = "FATAL";
    const MESSAGE_INFO = "INFO";
    const MESSAGE_WARNING = "WARNING";

    private $archivedFile = array();
    private $status = null;

    public function __construct()
    {
        $this->status = HrisEjint097Log::STATUS_WAITING_SAFEGUARD;
        $this->fileParsed = false;
    }

    public function fatalException($error)
    {
        $this->addLine($error, self::MESSAGE_FATAL);
        $this->status = HrisEjint097Log::STATUS_FAILED;
    }

    public function addWarning($warning)
    {
        $this->addLine($warning, self::MESSAGE_WARNING);
        //$this->status = HrisEjint097Log::STATUS_WARNING;
    }

    public function setNoFile()
    {
        $this->addLine("No Gross to Net file found", self::MESSAGE_WARNING);
        $this->status = HrisEjint097Log::STATUS_NO_FILE;
    }

    public function addArchivedFile($file)
    {
        $this->archivedFile[] = $file;
    }

    public function addLine($text, $type=self::MESSAGE_INFO)
    {
        $this->logContent .= sprintf("%s - [%s] %s\n", date("Y-m-d H:i:s"), $type, $text);
    }

    public function fileParsedSuccessfully($filename)
    {
        $this->addLine(sprintf("The '%s' has been parsed successfully", $filename));
        $this->status = ($this->status == HrisEjint097Log::STATUS_NOTHING ? HrisEjint097Log::STATUS_SUCCESS : $this->status);
        $this->fileParsedSuccessfully = true;
    }

    public function hasSuccessfullyParsedFile()
    {
        return $this->fileParsedSuccessfully;
    }

    public function nothingToParse()
    {
        $this->addLine("Nothing to parse", self::MESSAGE_INFO);
    }

    public function getEntity()
    {
        $hrisEjint097Log = new HrisEjint097Log();
        $hrisEjint097Log
                ->setArchivedFile(implode(",", $this->archivedFile))
                ->setScriptLogContent($this->logContent)
                ->setStatus($this->status);

        return $hrisEjint097Log;
    }
}
