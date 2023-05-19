<?php
namespace App\Easyjet\HrisBundle\Classes\PayElements;

use App\Easyjet\HrisBundle\Classes\PayElements\Interfaces\PayElementReader;

/**
 * PayElementCsvReader
 */
class PayElementCsvReader extends PayElementReader
{
    private $csvFileHandle;
    private $csvFile;
    private $fileComplete = false;

    private $currentRow = 0;

    private $delimiter;
    private $enclosure;
    private $escape;

    /**
     * The instance constructor does open the file and place the pointer to the first line of data
     * @param String $csvFile   Target of the csv file
     * @param int $rowStart  The row number where the data starts
     * @param String $delimiter Csv delimiter
     * @param String $enclosure Enclosure of the data
     * @param String $escape    Enclosure escaper
     */
    public function __construct($csvFile, $rowStart, $delimiter=",", $enclosure='"', $escape="\\") {
        $this->csvFile = $csvFile;
        $this->currentRow = 1;

        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;
        $this->escape = $escape;

        if (($this->csvFileHandle = fopen($this->csvFile, "r")) === FALSE) {
            throw new \Exception("Unable to open the csv files");
        } else {
            while ($this->currentRow < $rowStart) {
                if ($this->next() === false) {
                    break;
                }
            }

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

        $data = fgetcsv($this->csvFileHandle, 1000, $this->delimiter, $this->enclosure, $this->escape);

        if ($data === false) {
            $this->fileComplete = true;
            fclose($this->csvFileHandle);
            return false;
        }

        $this->currentRow++;

        return array(
            "pay-element" => $data[3],
            "empno" => $data[0],
            "value" => $data[9],
        );
    }
}
