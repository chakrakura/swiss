<?php

namespace App\Easyjet\EleaveBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EleaveRules
 *
 * @ORM\Table(name="eleave_rules")
 * @ORM\Entity(repositoryClass="App\Easyjet\EleaveBundle\Repository\RulesRepository")
 */
class Rules
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
     * @ORM\Column(name="text", type="text", nullable=false)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="display", type="boolean", nullable=false)
     */
    private $display = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cabinCrew", type="boolean", nullable=false)
     */
    private $cabinCrew = true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flightCrew", type="boolean", nullable=false)
     */
    private $flightCrew = true;



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
     * Set text
     *
     * @param string $text
     * @return Rules
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set cabinCrew
     *
     * @param boolean $cabinCrew
     * @return Rules
     */
    public function setCabinCrew($cabinCrew)
    {
        $this->cabinCrew = $cabinCrew;
    
        return $this;
    }

    /**
     * Get cabinCrew
     *
     * @return boolean 
     */
    public function getCabinCrew()
    {
        return $this->cabinCrew;
    }

    /**
     * Set display
     *
     * @param boolean $display
     * @return Rules
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    
        return $this;
    }

    /**
     * Get display
     *
     * @return boolean 
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set flightCrew
     *
     * @param boolean $flightCrew
     * @return Rules
     */
    public function setFlightCrew($flightCrew)
    {
        $this->flightCrew = $flightCrew;
    
        return $this;
    }

    /**
     * Get flightCrew
     *
     * @return boolean 
     */
    public function getFlightCrew()
    {
        return $this->flightCrew;
    }
}