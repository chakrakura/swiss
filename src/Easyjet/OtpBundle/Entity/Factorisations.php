<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * Factorisations
 *
 * @ORM\Table(name="eftr_dv_factorisation")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\FactorisationsRepository")
 */
class Factorisations
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
     * @ORM\Column(name="N", type="decimal", precision=3, scale=2)
     */
    private $nVal;

     /**
     * @var decimal
     *
     * @ORM\Column(name="S", type="decimal", precision=3, scale=2)
     */
    private $sVal;

    /**
     * @var decimal
     *
     * @ORM\Column(name="M", type="decimal",precision=3, scale=2)
     */
    private $mVal;

    /**
     * @var decimal
     *
     * @ORM\Column(name="L", type="decimal",precision=3, scale=2)
     */
    private $lVal;

    /**
     * @var decimal
     *
     * @ORM\Column(name="XL", type="decimal",precision=3, scale=2)
     */
    private $xlVal;

    /**
     * @var \DateTime
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
     * Gets the value of nVal.
     *
     * @return decimal
     */
    public function getNVal()
    {
        return $this->nVal;
    }

    /**
     * Sets the value of nVal.
     *
     * @param decimal $nVal the nVal
     *
     * @return self
     */
    public function setNVal($nVal)
    {
        $this->nVal = $nVal;

        return $this;
    }

     /**
     * Gets the value of sVal.
     *
     * @return decimal
     */
    public function getSVal()
    {
        return $this->sVal;
    }

    /**
     * Sets the value of sVal.
     *
     * @param decimal $sVal the sVal
     *
     * @return self
     */
    public function setSVal($sVal)
    {
        $this->sVal = $sVal;

        return $this;
    }

    /**
     * Gets the value of lVal.
     *
     * @return decimal
     */
    public function getLVal()
    {
        return $this->lVal;
    }

    /**
     * Sets the value of lVal.
     *
     * @param decimal $lVal the lVal
     *
     * @return self
     */
    public function setLVal($lVal)
    {
        $this->lVal = $lVal;

        return $this;
    }

    /**
     * Gets the value of mVal.
     *
     * @return decimal
     */
    public function getMVal()
    {
        return $this->mVal;
    }

    /**
     * Sets the value of nVal.
     *
     * @param decimal $nVal the nVal
     *
     * @return self
     */
    public function setMVal($mVal)
    {
        $this->mVal = $mVal;

        return $this;
    }

    /**
     * Gets the value of xlVal.
     *
     * @return decimal
     */
    public function getXlVal()
    {
        return $this->xlVal;
    }

    /**
     * Sets the value of nVal.
     *
     * @param decimal $nVal the nVal
     *
     * @return self
     */
    public function setXlVal($xlVal)
    {
        $this->xlVal = $xlVal;

        return $this;
    }

    /**
     * Gets the value of dateEffectivite.
     *
     * @return \DateTime
     */
    public function getDateEffectivite()
    {
        return $this->dateEffectivite;
    }

    /**
     * Sets the value of dateEffectivite.
     *
     * @param \DateTime $dateEffectivite the dateEffectivite
     *
     * @return self
     */
    public function setDateEffectivite($dateEffectivite)
    {
        $this->dateEffectivite = $dateEffectivite;

        return $this;
    }
}
