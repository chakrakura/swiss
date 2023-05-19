<?php

namespace App\Easyjet\HrisBundle\Classes\DemographicData;

use App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicDataSoftRule;
use App\Easyjet\HrisBundle\Classes\Exceptions\DemographicDataException;

/**
* Tester
*/
class Tester
{
    /**
     * Entity manager
     * @var \Doctrine\ORM\EntityManager EntityManager
     */
    private $entityManager;
    /**
     * Employee number
     * @var string
     */
    private $empno;
    /**
     * Employee first name
     * @var stirng
     */
    private $firstname;
    /**
     * EMployee last name
     * @var string
     */
    private $lastname;

    /**
     * List of mandatory fields staisfied
     * @var array
     */
    private $mandatorySatisfaction = array();

    /**
     * List of errors
     * @var array
     */
    private $errorsList = array();

    /**
     * List of the rules
     * @var array
     */
    private static $rules;

    /**
     * Construct the tester Class
     * @param \Doctrine\ORM\EntityManager $entityManager Entity manager
     * @param string $empno         Employee number
     * @param string $firstname     First name
     * @param string $lastname      Last name
     */
    public function __construct($entityManager, $empno, $firstname, $lastname)
    {
        $this->entityManager = $entityManager;
        $this->empno = $empno;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->getRules();

        foreach (static::$rules['mandatory'] as $currentRule) {
            $this->mandatorySatisfaction[$currentRule->getDemographicData()] = false;
        }
    }

    /**
     * Get the list of rules to apply to the Employee
     * @return null
     */
    private function getRules()
    {
        if (!static::$rules) {
            static::$rules['mandatory'] = array();
            $demographicData = $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicData")->findAll();
            foreach ($demographicData as $currentDemographicData) {
                if ($currentDemographicData->getMandatory()) {
                    static::$rules['mandatory'][$currentDemographicData->getDemographicData()] = $currentDemographicData;
                }

                static::$rules['rules'][$currentDemographicData->getDemographicData()] = $currentDemographicData->getSoftRules();
            }
        }
    }

    /**
     * Add an error for the user
     * @param string $error           Content of the eror
     * @param string $demographicData Name of the column which contains the error
     * @param string $value           Value found in the file
     */
    private function addError($error, $demographicData, $value="")
    {
        $this->errorsList[] = array(
            "empno" => $this->empno,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "demographicDataColumn" => $demographicData,
            "message" => $error,
            "demographicDataValue" => $value
        );
    }

    /**
     * Get the error list
     * @return array List of the errors found for the user
     */
    public function getErrorsList()
    {
        return $this->errorsList;
    }

    /**
     * Run the tests as set in the HRIS web interface
     * @param  array   $csvLine   Content of the csv file in array format
     * @param  array   $columnsId List of the column ids array("columnname" => $id)
     * @return null
     */
    public function testDemographicData($csvLine, $columnsId)
    {
        foreach (static::$rules['rules'] as $currentColumnName => $currentRule) {

            // Ignore the unknown column
            if (!isset($columnsId[$currentColumnName])) {
                continue;
            }

            // Get the value of the column for the current rule
            $demographicDataValue = isset($csvLine[$columnsId[$currentColumnName]]) ? $csvLine[$columnsId[$currentColumnName]] : "";

            // If field is empty and it is configured as mandatory, add an error for the current employee
            $isMandatory = isset(static::$rules['mandatory'][$currentColumnName]);
            if ($demographicDataValue === "" && $isMandatory) {
                $this->addError("This field is mandatory but it contains empty value", $currentColumnName, '');
            }

            // Test each soft subrules for the current rule
            foreach ($currentRule as $softRule) {
                try {
                    $this->testRule($currentColumnName, $demographicDataValue, $softRule);
                } catch (DemographicDataException $e) {
                    // If the rule is not satisfied and (demograhpic data value is empty and not mandatory), add an error for the current employee
                    if (!($demographicDataValue == "" && !$isMandatory)) {
                        $this->addError($e->getMessage(), $currentColumnName, $demographicDataValue);
                    }
                }
            }
        }
    }

    /**
     * Run a test agains the current csv row
     * @param  string                              $demographicDataName  Name of the column to be tested
     * @param  string                              $demographicDataValue Concerned column's data
     * @param  HrisEjint096DemographicDataSoftRule $rule                 Rule to be tested
     * @return null
     */
    private function testRule($demographicDataName, $demographicDataValue, HrisEjint096DemographicDataSoftRule $rule)
    {
        switch ($rule->getTypeOfRule()->getReference()) {
            case 'different':
                if (!($demographicDataValue != $rule->getValue())) {
                    throw new DemographicDataException("The value of \"$demographicDataName\" should be different of \"" . $rule->getValue() . "\"", $demographicDataValue);
                }
                break;
            case 'greater':
                if (!($demographicDataValue > $rule->getValue())) {
                    throw new DemographicDataException("The value of \"$demographicDataName\" should be greater than \"" . $rule->getValue() . "\"", $demographicDataValue);
                }
                break;

            case 'equal':
                if (!($demographicDataValue == $rule->getValue())) {
                    throw new DemographicDataException("The value of \"$demographicDataName\" should be equal to \"" . $rule->getValue() . "\"", $demographicDataValue);
                }
                break;

            case 'greater_or_equal':
                if (!($demographicDataValue >= $rule->getValue())) {
                    throw new DemographicDataException("The value of \"$demographicDataName\" should be greater or equal to \"" . $rule->getValue() . "\"", $demographicDataValue);
                }
                break;

            case 'less':
                if (!($demographicDataValue < $rule->getValue())) {
                    throw new DemographicDataException("The value of \"$demographicDataName\" should be less than \"" . $rule->getValue() . "\"", $demographicDataValue);
                }
                break;

            case 'less_or_equal':
                if (!($demographicDataValue <= $rule->getValue())) {
                    throw new DemographicDataException("The value of \"$demographicDataName\" should be less or equal to \"" . $rule->getValue() . "\"", $demographicDataValue);
                }
                break;

            case 'regexp':
                if (!(preg_match('/' . $rule->getValue() . '/', $demographicDataValue))) {
                    throw new DemographicDataException("The value of \"$demographicDataName\" should match the \"" . $rule->getValue() . "\" regular expression", $demographicDataValue);
                }
                break;


            default:
                throw new DemographicDataException("Unknown type of trigger \"" . $rule->getTypeOfRule()->getDescription() . "\"");
                break;
        }
    }

    /**
     * Gets the value of entityManager.
     *
     * @return mixed
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * Sets the value of entityManager.
     *
     * @param mixed $entityManager the entity manager
     *
     * @return self
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;

        return $this;
    }

    /**
     * Gets the value of empno.
     *
     * @return mixed
     */
    public function getEmpno()
    {
        return $this->empno;
    }

    /**
     * Sets the value of empno.
     *
     * @param mixed $empno the empno
     *
     * @return self
     */
    public function setEmpno($empno)
    {
        $this->empno = $empno;

        return $this;
    }

    /**
     * Gets the value of firstname.
     *
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the value of firstname.
     *
     * @param mixed $firstname the firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Gets the value of lastname.
     *
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the value of lastname.
     *
     * @param mixed $lastname the lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Sets the value of rules.
     *
     * @param mixed $rules the rules
     *
     * @return self
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }
}
