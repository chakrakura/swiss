<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_DEMOGRAPHIC_DATA_HARD_RULE")
 * @ORM\Entity()
 */

class HrisEjint096DemographicDataHardRule
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="algorithm", type="string", nullable=false)
     */
    private $algorithm;

    /**
     * @var HrisEjint096DemographicData
     * @ORM\ManyToOne(targetEntity="HrisEjint096DemographicData")
     * @ORM\JoinColumn(name="demographic_data_id", referencedColumnName="id")
     */
    private $demographicData;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * Gets the value of algorithm.
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets the value of algorithm.
     *
     * @param string $algorithm the algorithm
     *
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;

        return $this;
    }

    /**
     * Gets the value of demographicData.
     *
     * @return HrisEjint096DemographicData
     */
    public function getDemographicData()
    {
        return $this->demographicData;
    }

    /**
     * Sets the value of demographicData.
     *
     * @param HrisEjint096DemographicData $demographicData the pay element
     *
     * @return self
     */
    public function setDemographicData(HrisEjint096DemographicData $demographicData)
    {
        $this->demographicData = $demographicData;

        return $this;
    }

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
}