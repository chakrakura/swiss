<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cantons
 *
 * @ORM\Table(name="cantons")
 * @ORM\Entity(repositoryClass="\App\Easyjet\UmanBundle\Repository\CantonsRepository")
 */
class Cantons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=80, nullable=false)
     */
    private $label;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Cantons
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }
    
    public function __toString() {
        return $this->label;
    }
}