<?php
namespace App\Easyjet\HrisBundle\Classes\EmployeRankingReport;


/**
 * Description of EmployeeElement
 *
 * @author gillesh
 */
class EmployeeElement {
    private $employeeId;
    private $firstname;
    private $lastname;
    private $email;
    private $hireDate;
    private $compensationGrade;
    private $fixedTermEndDate;
    private $terminationDate;
    private $location;
    
    public function __construct($employeeId, $firstname, $lastname, $email, $hireDate, $compensationGrade, $fixedTermEndDate, $terminationDate, $location) {
        $this->employeeId = $employeeId;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->hireDate = $hireDate;
        $this->compensationGrade = $compensationGrade;
        $this->terminationDate = $terminationDate;
        $this->fixedTermEndDate = $fixedTermEndDate;
        $this->location = $location;        
    }
    
    function getTerminationDate() {
        return $this->terminationDate;
    }

    function getEmployeeId() {
        return $this->employeeId;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getHireDate() {
        return $this->hireDate;
    }

    function getCompensationGrade() {
        return $this->compensationGrade;
    }

    function getFixedTermEndDate() {
        return $this->fixedTermEndDate;
    }

    function getLocation() {
        return $this->location;
    }

    function setEmployeeId($employeeId) {
        $this->employeeId = $employeeId;
        return $this;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setHireDate($hireDate) {
        $this->hireDate = $hireDate;
        return $this;
    }

    function setCompensationGrade($compensationGrade) {
        $this->compensationGrade = $compensationGrade;
        return $this;
    }

    function setFixedTermEndDate($fixedTermEndDate) {
        $this->fixedTermEndDate = $fixedTermEndDate;
        return $this;
    }
    
    function setTerminationDate($terminationDate) {
        $this->terminationDate = $terminationDate;
        return $this;
    }

    function setLocation($location) {
        $this->location = $location;
        return $this;
    }


}
