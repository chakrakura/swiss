<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_PAY_ELEMENT_TYPE_OF_VALUE")
 * @ORM\Entity()
 */

class HrisEjint096PayElementTypeOfValue
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", nullable=false)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reference;


    /**
     * Gets the value of label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets the value of label.
     *
     * @param string $label the label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Gets the value of reference.
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets the value of reference.
     *
     * @param integer $reference the reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function __toString() {
        return $this->label;
    }
}