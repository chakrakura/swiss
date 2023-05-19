<?php
namespace App\Easyjet\HrisBundle\Classes\ClaimsElement;

use App\Easyjet\HrisBundle\Classes\ClaimsElement\Interfaces\ClaimsElementReader;
use PHPExcel_Reader_Excel2007;

/**
 * ClaimsElementXlsReader
 */
class ClaimsElementXlsReader extends ClaimsElementReader
{
    private $xlsSheet;
    private $xlsFile;
    private $fileComplete = false;

    private $currentRow = 0;


    /**
     * The instance constructor does open the file and place the pointer to the first line of data
     * @param String $xlsFile   Target of the csv file
     * @param int $rowStart  The row number where the data starts
     */
    public function __construct($xlsFile, $rowStart) {
        $this->xlsFile = $xlsFile;
        $this->currentRow = $rowStart;

        $inputFileType = \PHPExcel_IOFactory::identify($xlsFile);
        $objReader = \PHPExcel_IOFactory::createReader($inputFileType);

        if (!$objReader instanceof PHPExcel_Reader_Excel2007) {
            throw new \Exception("Unable to read the claims xls file");
        }

        $objReader->setReadDataOnly(true);
        $xlsObject = $objReader->load($xlsFile);

        $this->xlsSheet = $xlsObject->getSheetByName("Request One Time Payment");
        if (!$this->xlsSheet) {
            throw new \Exception("Unable to find the 'Request One Time Payment' tab");
        }
    }

    /**
     * Get the next row of data
     * @return mixed false if no more data or array of data
     */
    public function next() {

        if ($this->fileComplete) {
            return false;
        }

        if (!$this->xlsSheet->getCell("B" . $this->currentRow)->getValue()) {
            $this->fileComplete = true;
        }

        $array = array(
            "pay-element" => $this->xlsSheet->getCell("D" . $this->currentRow)->getValue(),
            "empno" => $this->xlsSheet->getCell("B" . $this->currentRow)->getValue(),
            "value" => $this->xlsSheet->getCell("E" . $this->currentRow)->getValue(),
        );


        $this->currentRow++;

        return $array;
    }
}
