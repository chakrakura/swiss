<?php

namespace App\Easyjet\HrisBundle\Classes\PayElements;

use App\Easyjet\HrisBundle\Entity\HrisEjint096PayElementSoftRule;
use App\Easyjet\HrisBundle\Classes\Exceptions\PayElementException;

/**
 * Tester
 */
class Tester
{
	private $entityManager;
	private $empno;
	private $firstname;
	private $lastname;

	private $mandatorySatisfaction = array();
	/**
	 * List of errors
	 * @var array
	 */
	private $errorsList = array();

	private static $rules;

	public function __construct($entityManager, $empno, $firstname, $lastname)
	{
		$this->entityManager = $entityManager;
		$this->empno = $empno;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->getRules();

		foreach (static::$rules['mandatory'] as $currentRule) {
			$this->mandatorySatisfaction[$currentRule->getPayElement()] = false;
		}

		//\Iabsis\DebugBundle\Utils\Dump::show(static::$rules); exit;
	}

	private function getRules()
	{
		if (!static::$rules) {
			static::$rules['mandatory'] = array();
			$payElements = $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096PayElement")->findAll();
			foreach ($payElements as $currentPayElement) {
				if ($currentPayElement->getMandatory()) {
					static::$rules['mandatory'][$currentPayElement->getPayElement()] = $currentPayElement;
				}

				static::$rules['rules'][$currentPayElement->getPayElement()] = $currentPayElement->getSoftRules();
			}
		}
	}

	public function addError($error, $payElement, $value = "")
	{
		$this->errorsList[] = array(
			"empno" => $this->empno,
			"firstname" => $this->firstname,
			"lastname" => $this->lastname,
			"payElement" => $payElement,
			"message" => $error,
			"payElementValue" => $value
		);
	}

	public function getErrorsList()
	{
		return $this->errorsList;
	}

	public function testPayElement($payElementName, $payElementValue)
	{
		if (!isset(static::$rules['rules'][$payElementName])) {
			$this->addError("Pay element not defined in configuration", $payElementName);
		} else {
			foreach (static::$rules['rules'][$payElementName] as $softRule) {
				try {
					$this->testRule($payElementName, $payElementValue, $softRule);
				} catch (PayElementException $e) {
					$this->addError($e->getMessage(), $payElementName, $e->getPayElementValue());
				}
			}
		}

		if (isset($mandatorySatisfaction[$payElementName])) {
			$mandatorySatisfaction[$payElementName] = true;
		}
	}

	private function testRule($payElementName, $payElementValue, HrisEjint096PayElementSoftRule $rule)
	{

		switch ($rule->getTypeOfRule()->getReference()) {
			case 'different':
				if (!($payElementValue != $rule->getValue())) {
					throw new PayElementException("The value of \"$payElementName\" should be different of \"" . $rule->getValue() . "\"", $payElementValue);
				}
				break;
			case 'greater':
				if (!($payElementValue > $rule->getValue())) {
					throw new PayElementException("The value of \"$payElementName\" should be greater than \"" . $rule->getValue() . "\"", $payElementValue);
				}
				break;

			case 'equal':
				if (!($payElementValue == $rule->getValue())) {
					throw new PayElementException("The value of \"$payElementName\" should be equal to \"" . $rule->getValue() . "\"", $payElementValue);
				}
				break;

			case 'greater_or_equal':
				if (!($payElementValue >= $rule->getValue())) {
					throw new PayElementException("The value of \"$payElementName\" should be greater or equal to \"" . $rule->getValue() . "\"", $payElementValue);
				}
				break;

			case 'less':
				if (!($payElementValue < $rule->getValue())) {
					throw new PayElementException("The value of \"$payElementName\" should be less than \"" . $rule->getValue() . "\"", $payElementValue);
				}
				break;

			case 'less_or_equal':
				if (!($payElementValue <= $rule->getValue())) {
					throw new PayElementException("The value of \"$payElementName\" should be less or equal to \"" . $rule->getValue() . "\"", $payElementValue);
				}
				break;

			case 'regexp':
				if (!(preg_match('/' . $rule->getValue() . '/', $payElementValue))) {
					throw new PayElementException("The value of \"$payElementName\" should match the \"" . $rule->getValue() . "\" regular expression", $payElementValue);
				}
				break;

			case 'type_of_value':
				if ($rule->getTypeOfValue()) {
					switch ($rule->getTypeOfValue()->getReference()) {
						case 'amount_chf_decimal':
							if (!$this->isDecimal($payElementValue)) {
								throw new PayElementException("The value of \"$payElementName\" should be a " . $rule->getTypeOfValue()->getLabel(), $payElementValue);
							}
							break;

						case 'number_of_days_decimal':
							if (!$this->isDecimal($payElementValue)) {
								throw new PayElementException("The value of \"$payElementName\" should be a " . $rule->getTypeOfValue()->getLabel(), $payElementValue);
							}
							break;

						case 'number_of_days_integer':
							if (!$this->isInteger($payElementValue)) {
								throw new PayElementException("The value of \"$payElementName\" should be a " . $rule->getTypeOfValue()->getLabel(), $payElementValue);
							}
							break;

						case 'percentage_decimal':
							if (!$this->isPercentage($payElementValue)) {
								throw new PayElementException("The value of \"$payElementName\" should be a " . $rule->getTypeOfValue()->getLabel(), $payElementValue);
							}
							break;

						default:
							throw new PayElementException("Unknown type of value \"" . $rule->getTypeOfValue()->getLabel() . "\"");
							break;
					}
				}
				break;

			default:
				throw new PayElementException("Unknown type of trigger \"" . $rule->getTypeOfRule()->getDescription() . "\"");
				break;
		}
	}

	private function isDecimal($value)
	{
		return preg_match('/^[0-9]{1,6}(\.[0-9]{1,20})?$/', $value);
	}

	private function isInteger($value)
	{
		return preg_match('/^[0-9]+$/', $value);
	}

	private function isPercentage($value)
	{
		return (float)$value >= -100 && (float)$value <= 100;
	}

	public function finalizeEmpnoTesting()
	{
		foreach ($this->mandatorySatisfaction as $payElement => $currentSatisfaction) {
			if (!$this->mandatorySatisfaction[$payElement]) {
				$this->addError("Mandatory pay element not found", $payElement);
			}
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
