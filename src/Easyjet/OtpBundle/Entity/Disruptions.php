<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Disruptions
 *
 * @ORM\Table(name="eftr_dv_disruption_allowance")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\DisruptionsRepository")
 */
class Disruptions
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
     * @var decimal
     *
     * @ORM\Column(name="montant_cabin", type="decimal", precision=8, scale=2)
     */
    private $montantCabin;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montant_pilot", type="decimal",precision=8, scale=2)
     */
    private $montantPilot;

    /**
     * @var \DateTimeInterface
     *
     * @ORM\Column(name="date_effectivite", type="datetime", nullable=false)
     */
    private $dateEffectivite;

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

    /**
     * Gets the value of montantPilot.
     *
     * @return decimal
     */
    public function getMontantPilot()
    {
        return $this->montantPilot;
    }

    /**
     * Sets the value of montantPilot.
     *
     * @param decimal $montantPilot the montantPilot
     *
     * @return self
     */
    public function setMontantPilot($montantPilot)
    {
        $this->montantPilot = $montantPilot;

        return $this;
    }

    /**
     * Gets the value of montantCabin.
     *
     * @return decimal
     */
    public function getMontantCabin()
    {
        return $this->montantCabin;
    }

    /**
     * Sets the value of montantCabin.
     *
     * @param decimal $montantCabin the montantCabin
     *
     * @return self
     */
    public function setMontantCabin($montantCabin)
    {
        $this->montantCabin = $montantCabin;

        return $this;
    }

    /**
     * Gets the value of dateEffectivite.
     *
     * @return \DateTimeInterface
     */
    public function getDateEffectivite()
    {
        return $this->dateEffectivite;
    }

    /**
     * Sets the value of dateEffectivite.
     *
     * @param \DateTimeInterface $dateEffectivite the dateEffectivite
     *
     * @return self
     */
    public function setDateEffectivite($dateEffectivite)
    {
        $this->dateEffectivite = $dateEffectivite;

        return $this;
    }
}
