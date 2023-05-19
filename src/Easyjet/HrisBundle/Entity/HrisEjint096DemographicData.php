<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_DEMOGRAPHIC_DATA")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisEjint096DemographicDataRepository")
 */

class HrisEjint096DemographicData
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="demographic_data", type="string", length=20, nullable=false)
     */
    private $demographicData;

    /**
     * @var bool
     *
     * @ORM\Column(name="mandatory", type="integer",)
     */
    private $mandatory;

    /**
     * @var bool
     *
     * @ORM\Column(name="oracle_field", type="string", length=300, nullable=true)
     */
    private $oracleField;


    /**
     * @ORM\OneToMany(targetEntity="HrisEjint096DemographicDataHardRule", mappedBy="demographicData", cascade={"all"})
     */
    private $hardCodedRules;

    /**
     * @ORM\OneToMany(targetEntity="HrisEjint096DemographicDataSoftRule", mappedBy="demographicData", cascade={"all"})
     */
    private $softRules;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function __construct()
    {
        $this->hardCodedRules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->softRules = new \Doctrine\Common\Collections\ArrayCollection();
        $this->mandatory = false;
    }

    public function clearHardRules() {
        $this->hardCodedRules->clear();
    }

    public function addHardRule(HrisEjint096DemographicDataHardRule $rule) {
        $this->hardCodedRules->add($rule);
    }

    public function clearSoftRules() {
        $this->softRules->clear();
    }

    public function addSoftRule(HrisEjint096DemographicDataSoftRule $rule) {
        $this->softRules->add($rule);
        $rule->setDemographicData($this);
    }

    public function removeSoftRule(HrisEjint096DemographicDataSoftRule $rule) {
        $this->softRules->removeElement($rule);
    }

    public function getSoftRules() {
        return $this->softRules;
    }

    public function getHardRules() {
        return $this->hardCodedRules;
    }

    /**
     * Gets the value of mandatory.
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Sets the value of mandatory.
     *
     * @param bool $mandatory the mandatory
     *
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }



    /**
     * Gets the value of demographicData.
     *
     * @return string
     */
    public function getDemographicData()
    {
        return $this->demographicData;
    }

    /**
     * Sets the value of demographicData.
     *
     * @param string $demographicData the pay element
     *
     * @return self
     */
    public function setDemographicData($demographicData)
    {
        $this->demographicData = $demographicData;

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

    public function hasHardCodedRules() {
        return count($this->hardCodedRules);
    }

    public function getTriggers($separator = "AND") {
        $string = "";
        foreach ($this->softRules as $currentRule) {
            $string .= " $separator " . $currentRule;
        }

        if (count($this->hardCodedRules)) {
            $string .= " $separator hard coded trigger";
        }

        if ($string) {
            $string = substr($string, strlen($separator) + 2);
        }

        return $string;
    }

    public function getType() {
        foreach ($this->softRules as $currentRule) {
            if ($currentRule->getTypeOfValue()) {
                return $currentRule->getTypeOfValue()->getLabel();
            }
        }

        return "";
    }

    
    /**
     * Gets the value of oracleField.
     *
     * @return bool
     */
    public function getOracleField()
    {
        return $this->oracleField;
    }

    /**
     * Sets the value of oracleField.
     *
     * @param bool $oracleField the oracle field
     *
     * @return self
     */
    public function setOracleField($oracleField)
    {
        $this->oracleField = $oracleField;

        return $this;
    }

    /**
     * @ORM\PreRemove()
     */
    public function PreRemove() {
        if (count($this->hardCodedRules)) {
            throw new \Exception("Unable to remove this pay element as it has some hard coded triggers");
            
        }
    }


}