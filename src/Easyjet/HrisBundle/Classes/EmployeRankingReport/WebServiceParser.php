<?php
namespace  App\Easyjet\HrisBundle\Classes\EmployeRankingReport;

use Exception;

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
        $ch = curl_init();
        $args = sprintf("?Effective_as_of_Date=%s&format=json", date("Y-m-d"));
        curl_setopt($ch, CURLOPT_URL, $this->webServiceApi . $args);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $this->webServiceUsername . ":" . $this->webServicePassword);  

        
        $response = curl_exec($ch);
        $curlInfo = curl_getinfo($ch);
        if ($curlInfo["http_code"] !== 200) {
            throw new Exception($response);
        }
        
        $data = json_decode($response, true);
        if (!isset($data["Report_Entry"])) {
            throw new Exception("Unable to find the Report_Entry element in the response. Process aborted ...");
        }
        $this->employeeData = $data["Report_Entry"];
        
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
    public function rewind() {
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
            isset($item["termination_date"]) ? \DateTime::createFromFormat("Y-m-d", $item["termination_date"]) : null,
            isset($item["location"]) ? $item["location"] : null
        );
    }
}
