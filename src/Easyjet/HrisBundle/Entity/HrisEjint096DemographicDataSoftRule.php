<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_DEMOGRAPHIC_DATA_SOFT_RULE")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity()
 */

class HrisEjint096DemographicDataSoftRule
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", nullable=false)
     */
    private $value;

    /**
     * @var HrisEjint096DemographicData
     * @ORM\ManyToOne(targetEntity="HrisEjint096DemographicData")
     * @ORM\JoinColumn(name="demographic_data_id", referencedColumnName="id")
     */
    private $demographicData;

    /**
     * @var HrisEjint096DemographicDataTypeOfRule
     * @ORM\ManyToOne(targetEntity="HrisEjint096DemographicDataTypeOfRule")
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
     * Gets the value of demographicData.
     *
     * @return HrisEjint096DemographicData
     */
    public function getDemographicData()
    {
        return $this->demographicData;
    }

    /**
     * Sets the value of demographicData.
     *
     * @param HrisEjint096DemographicData $demographicData the demographic data
     *
     * @return self
     */
    public function setDemographicData(HrisEjint096DemographicData $demographicData)
    {
        $this->demographicData = $demographicData;

        return $this;
    }

    /**
     * Gets the value of typeOfRule.
     *
     * @return HrisEjint096DemographicDataTypeOfRule
     */
    public function getTypeOfRule()
    {
        return $this->typeOfRule;
    }

    /**
     * Sets the value of typeOfRule.
     *
     * @param HrisEjint096DemographicDataTypeOfRule $typeOfRule the type of rule
     *
     * @return self
     */
    public function setTypeOfRule(HrisEjint096DemographicDataTypeOfRule $typeOfRule = null)
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

        return $this->typeOfRule->getDescription() . " '" . $this->value . "'"; 
    }

}