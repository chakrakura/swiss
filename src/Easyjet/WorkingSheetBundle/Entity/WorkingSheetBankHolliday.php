<?php

namespace App\Easyjet\WorkingSheetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkingSheetBankHolliday
 *
 * @ORM\Table(name="WORKING_SHEET_BANK_HOLLIDAY")
 * @ORM\Entity
 */
class WorkingSheetBankHolliday
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bank_holliday_date", type="date", nullable=false)
     */
    private $bankHollidayDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Stations
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Stations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="station_id", referencedColumnName="id_station")
     * })
     */
    private $station;

    public function getBankHollidayDate() {
        return $this->bankHollidayDate;
    }

    public function getId() {
        return $this->id;
    }

    public function getStation() {
        return $this->station;
    }

    public function setBankHollidayDate(\DateTime $bankHollidayDate) {
        $this->bankHollidayDate = $bankHollidayDate;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setStation(\App\Easyjet\UmanBundle\Entity\Stations $station) {
        $this->station = $station;
        return $this;
    }

}
