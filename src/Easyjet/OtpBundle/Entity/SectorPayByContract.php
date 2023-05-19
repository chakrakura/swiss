<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SectorPayByContract
 *
 * @ORM\Table(name="eftr_dv_sector_pay_by_contract")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\SectorPayRepository")
 */
class SectorPayByContract
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
     * @var integer
     *
     * @ORM\Column(name="id_type_eftr", type="integer", nullable=false)
     */
    private $idTypeEftr;

    /**
     * @var integer
     *
     * @ORM\Column(name="DV_sector_pay_id", type="integer", nullable=false)
     */
    private $DVSectorPayId;

    /**
     * @var decimal
     *
     * @ORM\Column(name="salary", type="decimal",precision=8, scale=3)
     */
    private $salary;

    /**
     * @var decimal
     *
     * @ORM\Column(name="allowance", type="decimal",precision=8, scale=2)
     */
    private $allowance;


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
     * Gets the value of salary.
     *
     * @return decimal
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Sets the value of salary.
     *
     * @param decimal $salary the salary
     *
     * @return self
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Gets the value of DVSectorPayId.
     *
     * @return decimal
     */
    public function getAllowance()
    {
        return $this->allowance;
    }

    /**
     * Sets the value of DVSectorPayId.
     *
     * @param decimal $DVSectorPayId the DVSectorPayId
     *
     * @return self
     */
    public function setDVSectorPayId($DVSectorPayId)
    {
        $this->DVSectorPayId = $DVSectorPayId;

        return $this;
    }

    /**
     * Gets the value of DVSectorPayId.
     *
     * @return decimal
     */
    public function getDVSectorPayId()
    {
        return $this->DVSectorPayId;
    }

    /**
     * Sets the value of allowance.
     *
     * @param decimal $allowance the allowance
     *
     * @return self
     */
    public function setAllowance($allowance)
    {
        $this->allowance = $allowance;

        return $this;
    }

    /**
     * Gets the value of idTypeEftr.
     *
     * @return decimal
     */
    public function getIdTypeEftr()
    {
        return $this->idTypeEftr;
    }

    /**
     * Sets the value of idTypeEftr.
     *
     * @param decimal $idTypeEftr the idTypeEftr
     *
     * @return self
     */
    public function setIdTypeEftr($idTypeEftr)
    {
        $this->idTypeEftr = $idTypeEftr;

        return $this;
    }
}
