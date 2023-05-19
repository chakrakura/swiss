<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_PAY_ELEMENT_SOFT_RULE")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity()
 */

class HrisEjint096PayElementSoftRule
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", nullable=false)
     */
    private $value;

    /**
     * @var HrisEjint096PayElement
     * @ORM\ManyToOne(targetEntity="HrisEjint096PayElement")
     * @ORM\JoinColumn(name="pay_element_id", referencedColumnName="id")
     */
    private $payElement;

    /**
     * @var HrisEjint096PayElementTypeOfValue
     * @ORM\ManyToOne(targetEntity="HrisEjint096PayElementTypeOfValue")
     * @ORM\JoinColumn(name="type_of_value", referencedColumnName="reference")
     */
    private $typeOfValue;

    /**
     * @var HrisEjint096PayElementTypeOfRule
     * @ORM\ManyToOne(targetEntity="HrisEjint096PayElementTypeOfRule")
     * @ORM\JoinColumn(name="type_of_rule", referencedColumnName="reference")
     */
    private $typeOfRule;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Gets the value of value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value of value.
     *
     * @param string $value the value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Gets the value of payElement.
     *
     * @return HrisEjint096PayElement
     */
    public function getPayElement()
    {
        return $this->payElement;
    }

    /**
     * Sets the value of payElement.
     *
     * @param HrisEjint096PayElement $payElement the pay element
     *
     * @return self
     */
    public function setPayElement(HrisEjint096PayElement $payElement)
    {
        $this->payElement = $payElement;

        return $this;
    }

    /**
     * Gets the value of typeOfValue.
     *
     * @return HrisEjint096PayElementTypeOfValue
     */
    public function getTypeOfValue()
    {
        return $this->typeOfValue;
    }

    /**
     * Sets the value of typeOfValue.
     *
     * @param HrisEjint096PayElementTypeOfValue $typeOfValue the type of value
     *
     * @return self
     */
    public function setTypeOfValue(HrisEjint096PayElementTypeOfValue $typeOfValue)
    {
        $this->typeOfValue = $typeOfValue;

        return $this;
    }

    /**
     * Gets the value of typeOfRule.
     *
     * @return HrisEjint096PayElementTypeOfRule
     */
    public function getTypeOfRule()
    {
        return $this->typeOfRule;
    }

    /**
     * Sets the value of typeOfRule.
     *
     * @param HrisEjint096PayElementTypeOfRule $typeOfRule the type of rule
     *
     * @return self
     */
    public function setTypeOfRule(HrisEjint096PayElementTypeOfRule $typeOfRule)
    {
        $this->typeOfRule = $typeOfRule;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param integer $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function __toString() {

        if ($this->typeOfRule->getReference() == "type_of_value") {
            return "Type of value : " . $this->typeOfValue->getLabel();
        } else {
            return $this->typeOfRule->getDescription() . " '" . $this->value . "'"; 
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
    */
    public function prePersist() {
        if ($this->typeOfRule->getReference() == "type_of_value") {
            $this->value = null;
        } else {
            $this->typeOfValue = null;
        }
    }
}