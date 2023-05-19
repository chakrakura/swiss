<?php

namespace App\Easyjet\FdtrBundle\Classes\Import;

use App\Easyjet\FdtrBundle\Entity\FdtrLog;

/**
* ImportLogger
*/
class ImportLogger
{
    private $logContent;

    const MESSAGE_FATAL = "FATAL";
    const MESSAGE_INFO = "INFO";
    const MESSAGE_WARNING = "WARNING";

    private $archivedFile = array();
    private $status = null;

    private $hasWarning;

    public function __construct()
    {
        $this->status = FdtrLog::STATUS_NOTHING;
        $this->hasWarning = false;
    }

    public function fatalException($error)
    {
        $this->addLine($error, self::MESSAGE_FATAL);
        $this->status = FdtrLog::STATUS_FAILED;
    }

    public function addWarning($warning) {
        $this->addLine($warning, self::MESSAGE_WARNING);
        $this->status = FdtrLog::STATUS_WARNING;
        $this->hasWarning = $warning;
    }

    public function hasWarning() {
        return $this->hasWarning;
    }

    public function addArchivedFile($file) {
        $this->archivedFile[] = $file;
    }

    public function addLine($text, $type=self::MESSAGE_INFO) {
        $this->logContent .= sprintf("%s - [%s] %s\n", date("Y-m-d H:i:s"), $type, $text);
    }

    public function fileParsedSuccessfully($filename) {
        $this->addLine(sprintf("The '%s' has been parsed successfully", $filename));
        $this->status = ($this->status == FdtrLog::STATUS_NOTHING ? FdtrLog::STATUS_SUCCESS : $this->status);
    }

    public function nothingToParse() {
        $this->addLine("Nothing to parse", self::MESSAGE_INFO);
    }

    public function getEntity() {
        $fdtrLog = new FdtrLog();
        $fdtrLog->setArchivedFile(implode(", ", $this->archivedFile))
                ->setLogContent($this->logContent)
                ->setStatus($this->status);

        return $fdtrLog;
    }

}