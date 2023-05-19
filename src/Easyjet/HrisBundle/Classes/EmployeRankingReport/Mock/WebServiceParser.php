<?php
namespace App\Easyjet\HrisBundle\Classes\EmployeRankingReport\Mock;

use Exception;
use App\Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeRankingReportData;
use App\Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeElement;
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
class WebServiceParser extends EmployeeRankingReportData {
    
    private $employeeData = array();
    private $webServiceApi;
    private $webServiceUsername;
    private $webServicePassword;
    
    private $id = 0;
    
    public function __construct($webServiceApi, $username, $password) {
        $this->webServiceApi = $webServiceApi;
        $this->webServiceUsername = $username;
        $this->webServicePassword = $password;
    }
    
    /**
     * Get Data from web service and return an Iterator
     * @return self
     * @throws Exception
     */
    public function getData() {
        
        $data = array(
            array(
                "Employee_ID" => "008306",
                "Legal_Name_-_First_Name" => "Vincent",
                "Legal_Name_-_Last_Name" => "Libsig",
                "Email_-_Work" => "gilles.hemmerle@easyjet.com",
                "Hire_Date" => "2000-01-31",
                "Compensation_Grade" => "Captain",
                "location" => "Geneva Airport",
                "Termination_Date" => "2017-11-04",
                "Fixed_term_end_date" => "2017-11-04"
            )
        );

        $this->employeeData = $data;
        return $this;
    }
    
        
    /**
     * Get current item
     * @return EmployeeElement
     */
    public function current() {
        $current = current($this->employeeData);
        return $this->currentItemToObject($current);
    }

    
    /**
     * Get key of the current element
     * @return integer
     */
    public function key() {
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
            isset($item["Hire_Date"]) ? \DateTime::createFromFormat("Y-m-d", $item["Hire_Date"]) : null,
            isset($item["Compensation_Grade"]) ? $item["Compensation_Grade"] : null,
            isset($item["Fixed_term_end_date"]) ? \DateTime::createFromFormat("Y-m-d", $item["Fixed_term_end_date"]) : null,
            isset($item["Termination_Date"]) ? \DateTime::createFromFormat("Y-m-d", $item["Termination_Date"]) : null,
            isset($item["location"]) ? $item["location"] : null
        );
    }
}
