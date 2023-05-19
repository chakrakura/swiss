<?php
namespace App\Easyjet\HrisBundle\Classes\EmployeRankingReport;

use Exception;
use PHPExcel_IOFactory;
use PHPExcel_Reader_CSV;
use PHPExcel_Worksheet;
use PHPExcel_Shared_Date;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WebServiceParser
 *
 * @author gillesh
 */
class XlsParser extends EmployeeRankingReportData {
    
    private $employeeData = array();
    private $xlsFile;
    
    public function __construct($xlsFile) {
        $this->xlsFile = $xlsFile;
    }
    
    /**
     * Convert excel date to data stirng (Y-m-d) compatible with mysql
     * @param  PHPExcel_Cell $cell Cell to be imported
     * @return mixed       False if not date found or \DateTime if any
     */
    protected function convertExcelDateToObject($cell)
    {
        if (!$cell || !$cell->getCalculatedValue()) {
            return false;
        }

        $dateExcelValue = $cell->getCalculatedValue();
        $dateExcelFormat =  PHPExcel_Shared_Date::ExcelToPHPObject($dateExcelValue);
        if (!$dateExcelFormat) {
            return false;
        }
        return $dateExcelFormat;
    }
    
    /**
     * Check if the cell contains the expected value
     * @param  PHPExcel_Worksheet $sheet         Excel sheet to check
     * @param  string             $cell          Cell to read
     * @param  string             $expectedValue Expected value in the requested cell
     * @return null
     * @throws Exception If the value don't match
     */
    protected function assertColumn(PHPExcel_Worksheet $sheet, $cell, $expectedValue)
    {
        if ($sheet->getCell($cell)->getValue() != $expectedValue) {
            throw new Exception(sprintf("The '%s' cell expected '%s' value but '%s' found",
                $cell,
                $expectedValue,
                $sheet->getCell($cell)->getValue()
            ));
        }
    }
    
    
    /**
     * Get Data from the xls file and return an Iterator
     * @return self
     * @throws Exception
     */
    public function getData() {
        if (!is_file($this->xlsFile)) {
            throw new Exception(sprintf("The '%s' file does not exist", $this->xlsFile));
        }

        // Open the users xls file
        $inputFileType = PHPExcel_IOFactory::identify($this->xlsFile);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        if (!$objReader || $objReader instanceof PHPExcel_Reader_CSV) {
            throw new Exception("Wrong file type. Unable to guess the excel version");
        }
        $objReader->setReadDataOnly(true);

        // Check if file exist
        $userXlsObject = $objReader->load($this->xlsFile);
        if (!$userXlsObject) {
            throw new Exception("Unable to open the xls file");
        }

        // Check if Sheet1 exists
        $sheet = $userXlsObject->getSheetByName('Sheet1');
        if (!$sheet) {
            throw new Exception("The 'Sheet1' tab does not exist in the xls file");
        }

        // Check the A1 value
        $documentName = "EJ - Switzerland Employee Ranking Report (Active and Term)";
        if ($sheet->getCell("A1")->getValue() != $documentName) {
            throw new Exception(sprintf("The document name (A1) must be '%s', but its name is '%s'",
                $documentName,
                $sheet->getCell("A1")->getValue()
            ));
        }

        // Check the different column names
        $this->assertColumn($sheet, "A3", "Employee ID");
        $this->assertColumn($sheet, "B3", "Legal Name - First Name");
        $this->assertColumn($sheet, "C3", "Legal Name - Last Name");
        $this->assertColumn($sheet, "D3", "Email - Work");
        $this->assertColumn($sheet, "E3", "Hire Date");
        $this->assertColumn($sheet, "F3", "Compensation Grade");
        $this->assertColumn($sheet, "G3", "Fixed term end date");
        $this->assertColumn($sheet, "H3", "Termination Date");
        $this->assertColumn($sheet, "I3", "Location");
        
        $row = 4;
        do {
            $employeeId = $sheet->getCell("A" . $row)->getValue();

            // If the A column is empty, we stop the script
            if (!$employeeId) {
                break;
            }
            
            $this->employeeData[] = array(
                "Employee_ID" => $sheet->getCell("A" . $row)->getValue(),
                "Legal_Name_-_First_Name" => $sheet->getCell("B" . $row)->getValue(),
                "Legal_Name_-_Last_Name" => $sheet->getCell("C" . $row)->getValue(),
                "Email_-_Work" => $sheet->getCell("D" . $row)->getValue(),
                "Hire_Date" => $this->convertExcelDateToObject($sheet->getCell("E" . $row)),
                "Compensation_Grade" => $sheet->getCell("F" . $row)->getValue(),
                "Fixed_term_end_date" => $this->convertExcelDateToObject($sheet->getCell("G" . $row)),
                "Termination_Date" => $this->convertExcelDateToObject($sheet->getCell("H" . $row)),
                "location" => $sheet->getCell("I" . $row)->getValue()
            );
            
            $row++;
        } while(true);

        
        
        return $this;
    }
    
        
    /**
     * Get current item
     * @return EmployeeElement
     */
    public function current() : mixed {
        $current = current($this->employeeData);
        return $this->currentItemToObject($current);
    }

    
    /**
     * Get key of the current element
     * @return integer
     */
    public function key() : mixed {
        return key($this->employeeData);
    }
    
    /**
     * Get next item
     * @return EmployeeElement
     */
    public function next() {
        $next = next($this->employeeData);
        return $this->currentItemToObject($next);
    }

    /**
     * Reset the array
     */
    public function rewind() : void {
        reset($this->employeeData);
    }

    /**
     * Does the current item exists
     * @return boolean
     */
    public function valid() {
        $key = key($this->employeeData);
        return ($key !== null && $key !== false);
    }
    
    /**
     * @return EmployeeElement
     */
    private function currentItemToObject($item)
    {
        return new EmployeeElement(
            isset($item["Employee_ID"]) ? $item["Employee_ID"] : null,
            isset($item["Legal_Name_-_First_Name"]) ? $item["Legal_Name_-_First_Name"] : null,
            isset($item["Legal_Name_-_Last_Name"]) ? $item["Legal_Name_-_Last_Name"] : null,
            isset($item["Email_-_Work"]) ? $item["Email_-_Work"] : null,
            isset($item["Hire_Date"]) ? $item["Hire_Date"] : null,
            isset($item["Compensation_Grade"]) ? $item["Compensation_Grade"] : null,
            isset($item["Fixed_term_end_date"]) ? $item["Fixed_term_end_date"] : null,
            isset($item["Termination_Date"]) ? $item["Termination_Date"] : null,
            isset($item["location"]) ? $item["location"] : null
        );
    }
    
}
