<?php

namespace App\Easyjet\EleaveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EleaveEmail
 *
 * @ORM\Table(name="eleave_email")
 * @ORM\Entity(repositoryClass="App\Easyjet\EleaveBundle\Repository\EmailRepository")
 */
class Email
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
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
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
     * @return Email
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
}