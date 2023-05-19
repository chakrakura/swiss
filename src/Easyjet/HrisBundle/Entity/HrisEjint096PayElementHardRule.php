<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_PAY_ELEMENT_HARD_RULE")
 * @ORM\Entity()
 */

class HrisEjint096PayElementHardRule
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="algorithm", type="string", nullable=false)
     */
    private $algorithm;

    /**
     * @var HrisEjint096PayElement
     * @ORM\ManyToOne(targetEntity="HrisEjint096PayElement")
     * @ORM\JoinColumn(name="pay_element_id", referencedColumnName="id")
     */
    private $payElement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Gets the value of algorithm.
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets the value of algorithm.
     *
     * @param string $algorithm the algorithm
     *
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;

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
}