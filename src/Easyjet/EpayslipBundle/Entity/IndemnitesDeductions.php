<?php

namespace App\Easyjet\EpayslipBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndemnitesDeductions
 *
 * @ORM\Table(name="epayslip_indemnites_deductions")
 * @ORM\Entity
 */
class IndemnitesDeductions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_payslip", type="integer", nullable=false)
     */
    private $idPayslip;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="determinant", type="decimal", nullable=false)
     */
    private $determinant;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="decimal", nullable=false)
     */
    private $rate;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="decimal", nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="rubrique", type="string", length=5, nullable=false)
     */
    private $rubrique;

    /**
     * @var integer
     *
     * @ORM\Column(name="field_order", type="integer", nullable=false)
     */
    private $fieldOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set idPayslip
     *
     * @param integer $idPayslip
     * @return IndemnitesDeductions
     */
    public function setIdPayslip($idPayslip)
    {
        $this->idPayslip = $idPayslip;

        return $this;
    }

    /**
     * Get idPayslip
     *
     * @return integer 
     */
    public function getIdPayslip()
    {
        return $this->idPayslip;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return IndemnitesDeductions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set determinant
     *
     * @param float $determinant
     * @return IndemnitesDeductions
     */
    public function setDeterminant($determinant)
    {
        $this->determinant = $determinant;

        return $this;
    }

    /**
     * Get determinant
     *
     * @return float 
     */
    public function getDeterminant()
    {
        return $this->determinant;
    }

    /**
     * Set rate
     *
     * @param float $rate
     * @return IndemnitesDeductions
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set value
     *
     * @param float $value
     * @return IndemnitesDeductions
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return IndemnitesDeductions
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set rubrique
     *
     * @param string $rubrique
     * @return IndemnitesDeductions
     */
    public function setRubrique($rubrique)
    {
        $this->rubrique = $rubrique;

        return $this;
    }

    /**
     * Get rubrique
     *
     * @return string 
     */
    public function getRubrique()
    {
        return $this->rubrique;
    }

    /**
     * Set fieldOrder
     *
     * @param integer $fieldOrder
     * @return IndemnitesDeductions
     */
    public function setFieldOrder($fieldOrder)
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    /**
     * Get fieldOrder
     *
     * @return integer 
     */
    public function getFieldOrder()
    {
        return $this->fieldOrder;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
