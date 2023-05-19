<?php

namespace App\Easyjet\HrisBundle\Classes\Import;

use App\Easyjet\HrisBundle\Entity\HrisEjint096Log;

/**
* ImportLogger
*/
class Ejint096ImportLogger
{
    private $logContent;

    const MESSAGE_FATAL = "FATAL";
    const MESSAGE_INFO = "INFO";
    const MESSAGE_WARNING = "WARNING";

    private $archivedFile = array();
    private $status = null;

    private $payElementsErrorsList = array();

    public function __construct()
    {
        $this->status = HrisEjint096Log::STATUS_NO_FILE;
    }

    public function fatalException($error)
    {
        $this->addLine($error, self::MESSAGE_FATAL);
        $this->status = HrisEjint096Log::STATUS_FAILED;
    }

    public function addWarning($warning) {
        $this->addLine($warning, self::MESSAGE_WARNING);
        $this->status = HrisEjint096Log::STATUS_WARNING;
    }

    public function setNoFile() {
        $this->addLine("No import file found", self::MESSAGE_WARNING);
        $this->status = HrisEjint096Log::STATUS_NO_FILE;
    }

    public function addArchivedFile($file) {
        $this->archivedFile[] = $file;
    }

    public function addLine($text, $type=self::MESSAGE_INFO) {
        $this->logContent .= sprintf("%s - [%s] %s\n", date("Y-m-d H:i:s"), $type, $text);
    }

    public function fileParsedSuccessfully($filename) {
        $this->addLine(sprintf("The '%s' has been parsed successfully", $filename));
        $this->status = ($this->status == HrisEjint096Log::STATUS_NO_FILE ? HrisEjint096Log::STATUS_SUCCESS : $this->status);
    }

    public function nothingToParse() {
        $this->addLine("Nothing to parse", self::MESSAGE_INFO);
    }

    public function AddPayElementWarning($error) {
        $this->payElementsErrorsList[] = $error;
    }

    private function strPutCsv($input, $delimiter = ',', $enclosure = '"')
    {
        // Open a memory "file" for read/write...
        $fp = fopen('php://temp', 'r+');
        // ... write the $input array to the "file" using fputcsv()...
        fputcsv($fp, $input, $delimiter, $enclosure);
        // ... rewind the "file" so we can read what we just wrote...
        rewind($fp);
        // ... read the entire line into a variable...
        $data = fread($fp, 1048576);
        // ... close the "file"...
        fclose($fp);
        // ... and return the $data to the caller, with the trailing newline from fgets() removed.
        return rtrim($data, "\n");
    }

    public function getEntity() {
        $csvString = '';
        foreach ($this->payElementsErrorsList as $fields) {
            $csvString .= $this->strPutCsv($fields) . "\n";
        }


        $hrisEjint096Log = new HrisEjint096Log();
        $hrisEjint096Log
                ->setArchivedFile(implode(",", $this->archivedFile))
                ->setScriptLogContent($this->logContent)
                ->setStatus($this->status)
                ->setPayElementsLog($csvString);


        return $hrisEjint096Log;
    }

}
