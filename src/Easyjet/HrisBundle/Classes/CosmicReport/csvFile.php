<?php
namespace App\Easyjet\HrisBundle\Classes\CosmicReport;
/**
 * Description of Classes
 * 
 * @Class CsvUtils is used to Open and Read CSV file

 * @author achoubey
 */
Class csvFile {

    private $fileName;
    private $header;
    public $handle;
 /* setting input file name of csv file */
    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }
    /* Gets file name of csv file */
    public function getFileName() {
        return $this->fileName;
    }
/* Sets header of csv file */
    public function setHeader($header) {
        $this->header = $header;
    }
/* Gets header of csv file */
    public function getHeader() {
        return $this->header;
    }
/* Sets handle of csv file */
    public function setHandle($handle) {
        $this->handle = $handle;
    }
/* Gets handle of csv file */
    public function getHandle() {
        return $this->handle;
    }
/*Open the file to read*/
    public function fileOpen($fileName) {

        $month=array();
        if (($handle = fopen($fileName, "r")) !== FALSE) {
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                 $month[0]=$data[0];

                 $this->setHandle($handle);
                 $header = fgetcsv($handle); //move the second line of input csv file to header
                  $month[1] =ftell($handle);
                 $this->setHeader($header);
                            break;                               
             }
         }
         return $month;

    }
/*Read file rows*/
    public function fileRead() {
        $handle = $this->getHandle();
        $header = $this->getHeader();
		if (($data = fgetcsv($handle)) !== false) {
            return array_combine($header, $data);
        } else {
            return null; // return null at end of file
        }
    }
/*Closes the input file*/
    public function fileClose() {
        fclose($this->handle);
    }
    

}

//End of th class
