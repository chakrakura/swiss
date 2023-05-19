<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * SectorPay
 *
 * @ORM\Table(name="eftr_dv_sector_pay")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\SectorPayRepository")
 */

class SectorPay
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
