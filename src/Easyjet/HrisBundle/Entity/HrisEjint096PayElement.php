<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_PAY_ELEMENT")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisEjint096PayElementRepository")
 */

class HrisEjint096PayElement
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="pay_element", type="string", length=20, nullable=false)
     */
    private $payElement;

    /**
     * @var bool
     *
     * @ORM\Column(name="mandatory", type="integer",)
     */
    private $mandatory;


    /**
     * @ORM\OneToMany(targetEntity="HrisEjint096PayElementHardRule", mappedBy="payElement", cascade={"all"})
     */
    private $hardCodedRules;

    /**
     * @ORM\OneToMany(targetEntity="HrisEjint096PayElementSoftRule", mappedBy="payElement", cascade={"all"})
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
    }

    public function clearHardRules() {
        $this->hardCodedRules->clear();
    }

    public function addHardRule(HrisEjint096PayElementHardRule $rule) {
        $this->hardCodedRules->add($rule);
    }

    public function clearSoftRules() {
        $this->softRules->clear();
    }

    public function addSoftRule(HrisEjint096PayElementSoftRule $rule) {
        $this->softRules->add($rule);
        $rule->setPayElement($this);
    }

    public function removeSoftRule(HrisEjint096PayElementSoftRule $rule) {
        $this->softRules->removeElement($rule);
    }

    public function getSoftRules() {
        return $this->softRules;
    }

    public function getHardRules() {
        return $this->hardCodedRules;
    }



    /**
     * Gets the value of payElement.
     *
     * @return string
     */
    public function getPayElement()
    {
        return $this->payElement;
    }

    /**
     * Sets the value of payElement.
     *
     * @param string $payElement the pay element
     *
     * @return self
     */
    public function setPayElement($payElement)
    {
        $this->payElement = $payElement;

        return $this;
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
     * @ORM\PreRemove()
     */
    public function PreRemove() {
        if (count($this->hardCodedRules)) {
            throw new \Exception("Unable to remove this pay element as it has some hard coded triggers");
            
        }
    }

}