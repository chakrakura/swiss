<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_PAY_ELEMENT_TYPE_OF_RULE")
 * @ORM\Entity()
 */

class HrisEjint096PayElementTypeOfRule
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="reference", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reference;


    /**
     * Gets the value of description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of description.
     *
     * @param string $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
        return $this->description;
    }
}