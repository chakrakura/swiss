<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_CIVIL_STATUS")
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisEjint096CivilStatusRepository")
 */

class HrisEjint096CivilStatus
{
    /**
     * @var string
     *
     * @ORM\Column(name="sgwi_name", type="string", length=100, nullable=false)
     * @ORM\Id
     */
    private $sgwiName;


    /**
     * @var string
     *
     * @ORM\Column(name="proconcept_code", type="string", length=100, nullable=false)
     */
    private $proconceptCode;




    /**
     * Gets the value of sgwiName.
     *
     * @return string
     */
    public function getSgwiName()
    {
        return $this->sgwiName;
    }

    /**
     * Sets the value of sgwiName.
     *
     * @param string $sgwiName the sgwi name
     *
     * @return self
     */
    public function setSgwiName($sgwiName)
    {
        $this->sgwiName = $sgwiName;

        return $this;
    }

    /**
     * Gets the value of proconceptCode.
     *
     * @return string
     */
    public function getProconceptCode()
    {
        return $this->proconceptCode;
    }

    /**
     * Sets the value of proconceptCode.
     *
     * @param string $proconceptCode the proconcept code
     *
     * @return self
     */
    public function setProconceptCode($proconceptCode)
    {
        $this->proconceptCode = $proconceptCode;

        return $this;
    }
}