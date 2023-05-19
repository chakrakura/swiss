<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesEftr
 *
 * @ORM\Table(name="types_eftr")
 * @ORM\Entity
 */
class TypesEftr
{
    const TYPE_ADMIN = 1;
    const TYPE_CABIN = 2;
    const TYPE_PILOT = 3;
    
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
     * @ORM\Column(name="type", type="string", length=40, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire_base", type="decimal", nullable=false)
     */
    private $salaireBase;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire_base_3_premiers_mois", type="decimal", nullable=false)
     */
    private $salaireBase3PremiersMois;

    /**
     * @var float
     *
     * @ORM\Column(name="paiement_secteurs_base", type="decimal", nullable=false)
     */
    private $paiementSecteursBase;

    /**
     * @var integer
     *
     * @ORM\Column(name="employee_type", type="smallint", nullable=false)
     */
    private $employeeType;

    /**
     * @var string
     *
     * @ORM\Column(name="type_label", type="string", length=100, nullable=false)
     */
    private $typeLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=100, nullable=false)
     */
    private $responsable;

    /**
     * @var integer
     *
     * @ORM\Column(name="active_type", type="integer", nullable=false)
     */
    private $activeType;

    

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
     * Set type
     *
     * @param string $type
     * @return TypesEftr
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
     * Set salaireBase
     *
     * @param float $salaireBase
     * @return TypesEftr
     */
    public function setSalaireBase($salaireBase)
    {
        $this->salaireBase = $salaireBase;
    
        return $this;
    }

    /**
     * Get salaireBase
     *
     * @return float 
     */
    public function getSalaireBase()
    {
        return $this->salaireBase;
    }

    /**
     * Set salaireBase3PremiersMois
     *
     * @param float $salaireBase3PremiersMois
     * @return TypesEftr
     */
    public function setSalaireBase3PremiersMois($salaireBase3PremiersMois)
    {
        $this->salaireBase3PremiersMois = $salaireBase3PremiersMois;
    
        return $this;
    }

    /**
     * Get salaireBase3PremiersMois
     *
     * @return float 
     */
    public function getSalaireBase3PremiersMois()
    {
        return $this->salaireBase3PremiersMois;
    }

    /**
     * Set paiementSecteursBase
     *
     * @param float $paiementSecteursBase
     * @return TypesEftr
     */
    public function setPaiementSecteursBase($paiementSecteursBase)
    {
        $this->paiementSecteursBase = $paiementSecteursBase;
    
        return $this;
    }

    /**
     * Get paiementSecteursBase
     *
     * @return float 
     */
    public function getPaiementSecteursBase()
    {
        return $this->paiementSecteursBase;
    }

    /**
     * Set employeeType
     *
     * @param integer $employeeType
     * @return TypesEftr
     */
    public function setEmployeeType($employeeType)
    {
        $this->employeeType = $employeeType;
    
        return $this;
    }

    /**
     * Get employeeType
     *
     * @return integer 
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }
    
    public function getEmployeeTypeLabel()
    {
        switch ($this->employeeType) {
            case self::TYPE_ADMIN : return "Admin"; break;
            case self::TYPE_CABIN : return "Cabin"; break;
            case self::TYPE_PILOT : return "Pilot"; break;
            default : return "-";
        }
    }

    /**
     * Set typeLabel
     *
     * @param string $typeLabel
     * @return TypesEftr
     */
    public function setTypeLabel($typeLabel)
    {
        $this->typeLabel = $typeLabel;
    
        return $this;
    }

    /**
     * Get typeLabel
     *
     * @return string 
     */
    public function getTypeLabel()
    {
        return $this->typeLabel;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return TypesEftr
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    
        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set activeType
     *
     * @param string $activeType
     * @return TypesEftr
     */
    public function setActiveType($activeType)
    {
        $this->activeType = $activeType;
    
        return $this;
    }

    /**
     * Get activeType
     *
     * @return integer 
     */
    public function getActiveType()
    {
        return $this->activeType;
    }

    public function __toString () {
        return $this->type;
    }
}