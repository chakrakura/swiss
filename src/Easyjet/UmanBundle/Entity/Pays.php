<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
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
     * @ORM\Column(name="pays", type="string", length=50, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="nationnalite", type="string", length=50, nullable=true)
     */
    private $nationnalite;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=50, nullable=true)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="hr_code", type="string", length=8, nullable=false)
     */
    private $hrCode;

    /**
     * @var string
     *
     * @ORM\Column(name="APIS_CODE", type="string", length=5, nullable=false)
     */
    private $apisCode;



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
     * Set pays
     *
     * @param string $pays
     * @return Pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set nationnalite
     *
     * @param string $nationnalite
     * @return Pays
     */
    public function setNationnalite($nationnalite)
    {
        $this->nationnalite = $nationnalite;
    
        return $this;
    }

    /**
     * Get nationnalite
     *
     * @return string 
     */
    public function getNationnalite()
    {
        return $this->nationnalite;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return Pays
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    
        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set hrCode
     *
     * @param string $hrCode
     * @return Pays
     */
    public function setHrCode($hrCode)
    {
        $this->hrCode = $hrCode;
    
        return $this;
    }

    /**
     * Get hrCode
     *
     * @return string 
     */
    public function getHrCode()
    {
        return $this->hrCode;
    }

    /**
     * Set apisCode
     *
     * @param string $apisCode
     * @return Pays
     */
    public function setApisCode($apisCode)
    {
        $this->apisCode = $apisCode;
    
        return $this;
    }

    /**
     * Get apisCode
     *
     * @return string 
     */
    public function getApisCode()
    {
        return $this->apisCode;
    }
    
    public function __toString() {
        return $this->pays;
    }
}