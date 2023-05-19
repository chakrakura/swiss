<?php

namespace App\Easyjet\EleaveBundle\Services;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;


/**
 * Description of RemainingDaysParser
 *
 * @author gillesh
 */
class RemainingDaysParserService
{

    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;
    /**
     *
     * @var string
     */
    private $currentFileType;
    /**
     *
     * @var ImportLog 
     */
    private $importLog;


    const FILE_TYPE_PILOT = "pilot";
    const FILE_TYPE_CABIN = "cabin";

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function beginTransaction()
    {
        $this->entityManager->beginTransaction();
    }

    public function setImportLog(ImportLog $importLog)
    {
        $this->importLog = $importLog;
    }

    public function parseNewFile($file)
    {

        $Reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file);

        /*$readFilter = new LeaveReadFilter(1, 1000, array("A", "AA"), false, 0);
        $Reader->setReadFilter($readFilter);*/
        $Reader->setReadDataOnly(true);

        $objXLS = $Reader->load($file);

        $a4 = $objXLS->getSheet(0)->getCell("A4")->getCalculatedValue();
        $a5 = $objXLS->getSheet(0)->getCell("A5")->getCalculatedValue();
        $ab5 = $objXLS->getSheet(0)->getCell("AB5")->getCalculatedValue();
        $a1 = $objXLS->getSheet(0)->getCell("A1")->getCalculatedValue();
        $b1 = $objXLS->getSheet(0)->getCell("B1")->getCalculatedValue();
        $c1 = $objXLS->getSheet(0)->getCell("C1")->getCalculatedValue();
        //var_dump($a1);var_dump($b1);var_dump($a4);exit;
        // Check if it is a pilot file       
        if ($a1 == "Staff" && trim(str_replace("\n", "", $b1)) == "Leave" && $c1 == "Work Ratio") {
            $this->currentFileType = self::FILE_TYPE_CABIN;
        } elseif ($a4 == "ID") {
            $v4 = $objXLS->getSheet(0)->getCell("V4")->getCalculatedValue();
            if ($v4 == "Remaining")
                $this->currentFileType = self::FILE_TYPE_PILOT;
        }

        if (!$this->currentFileType) {
            throw new \Exception("Some excel file are not recognized. Unable to determine if it is a cabin or a pilot file.");
        }

        switch ($this->currentFileType) {
            case self::FILE_TYPE_CABIN:
                $this->startImportProcess($objXLS, "A", "B", "C", 2);
                break;
            case self::FILE_TYPE_PILOT:
                $this->startImportProcess($objXLS, "A", "V", "", 5);
                break;
        }
    }

    public function startImportProcess($objXLS, $empnoColumn, $numberColumn, $workRatio, $firstLine)
    {

        $emptyLines = 0;
        $currentLine = $firstLine;

        do {
            $currentEmpno = $objXLS->getSheet(0)->getCell($empnoColumn . $currentLine)->getCalculatedValue();
            $currentNumberOfLeave = $objXLS->getSheet(0)->getCell($numberColumn . $currentLine)->getOldCalculatedValue();
            $currentWorkRatio = $objXLS->getSheet(0)->getCell($workRatio . $currentLine)->getOldCalculatedValue();

            $objXLS->getSheet(0)->setCellValue("Y" . $currentLine, 0);

            if (trim($currentEmpno) == "") {
                $emptyLines++;
            } else {
                if ($this->importLog instanceof ImportLog) {
                    if ((int)$currentEmpno != 0) {
                        $this->importLog->addLog($currentEmpno, $currentNumberOfLeave, $currentWorkRatio * 100);
                        $this->updateUser($currentEmpno, $currentNumberOfLeave, $currentWorkRatio * 100);
                    }
                }
            }
            $currentLine++;
        } while ($emptyLines < 5);
    }

    public function updateUser($empno, $remainingLeaveDays, $workRatio)
    {
        $empno = (string) $empno;

        while (strlen($empno) < 6) {
            $empno = "0" . $empno;
        }

        $this->entityManager->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->setRemainingDays($empno, $remainingLeaveDays, $workRatio);
    }

    public function commit()
    {
        $this->entityManager->commit();
    }
}



function memory_used()
{
    $size = memory_get_usage(true);
    $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
    return @round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
}
