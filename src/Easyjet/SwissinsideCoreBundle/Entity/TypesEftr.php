<?php

namespace App\Easyjet\SwissinsideCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypesEftr.
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
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=40, nullable=false)
     */
    protected $type;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire_base", type="decimal", nullable=false)
     */
    protected $salaireBase;

    /**
     * @var float
     *
     * @ORM\Column(name="salaire_base_3_premiers_mois", type="decimal", nullable=false)
     */
    protected $salaireBase3PremiersMois;

    /**
     * @var float
     *
     * @ORM\Column(name="paiement_secteurs_base", type="decimal", nullable=false)
     */
    protected $paiementSecteursBase;

    /**
     * @var int
     *
     * @ORM\Column(name="employee_type", type="smallint", nullable=false)
     */
    protected $employeeType;

    /**
     * @var string
     *
     * @ORM\Column(name="type_label", type="string", length=100, nullable=false)
     */
    protected $typeLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=100, nullable=false)
     */
    protected $responsable;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return TypesEftr
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set salaireBase.
     *
     * @param float $salaireBase
     *
     * @return TypesEftr
     */
    public function setSalaireBase($salaireBase)
    {
        $this->salaireBase = $salaireBase;

        return $this;
    }

    /**
     * Get salaireBase.
     *
     * @return float
     */
    public function getSalaireBase()
    {
        return $this->salaireBase;
    }

    /**
     * Set salaireBase3PremiersMois.
     *
     * @param float $salaireBase3PremiersMois
     *
     * @return TypesEftr
     */
    public function setSalaireBase3PremiersMois($salaireBase3PremiersMois)
    {
        $this->salaireBase3PremiersMois = $salaireBase3PremiersMois;

        return $this;
    }

    /**
     * Get salaireBase3PremiersMois.
     *
     * @return float
     */
    public function getSalaireBase3PremiersMois()
    {
        return $this->salaireBase3PremiersMois;
    }

    /**
     * Set paiementSecteursBase.
     *
     * @param float $paiementSecteursBase
     *
     * @return TypesEftr
     */
    public function setPaiementSecteursBase($paiementSecteursBase)
    {
        $this->paiementSecteursBase = $paiementSecteursBase;

        return $this;
    }

    /**
     * Get paiementSecteursBase.
     *
     * @return float
     */
    public function getPaiementSecteursBase()
    {
        return $this->paiementSecteursBase;
    }

    /**
     * Set employeeType.
     *
     * @param int $employeeType
     *
     * @return TypesEftr
     */
    public function setEmployeeType($employeeType)
    {
        $this->employeeType = $employeeType;

        return $this;
    }

    /**
     * Get employeeType.
     *
     * @return int
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }

    public function getEmployeeTypeLabel()
    {
        switch ($this->employeeType) {
            case self::TYPE_ADMIN: return 'Admin'; break;
            case self::TYPE_CABIN: return 'Cabin'; break;
            case self::TYPE_PILOT: return 'Pilot'; break;
            default: return '-';
        }
    }

    /**
     * Set typeLabel.
     *
     * @param string $typeLabel
     *
     * @return TypesEftr
     */
    public function setTypeLabel($typeLabel)
    {
        $this->typeLabel = $typeLabel;

        return $this;
    }

    /**
     * Get typeLabel.
     *
     * @return string
     */
    public function getTypeLabel()
    {
        return $this->typeLabel;
    }

    /**
     * Set responsable.
     *
     * @param string $responsable
     *
     * @return TypesEftr
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable.
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    public function __toString()
    {
        return $this->type;
    }
}
