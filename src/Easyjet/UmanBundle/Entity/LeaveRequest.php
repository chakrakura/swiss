<?php

namespace App\Easyjet\UmanBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeaveRequest
 *
 * @ORM\Table(name="leave_request")
 * @ORM\Entity
 */
class LeaveRequest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="leaver_type", type="string", nullable=false)
     */
    private $leaverType;

    /**
     * @var integer
     *
     * @ORM\Column(name="leaver_reason", type="integer", nullable=false)
     */
    private $leaverReason;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resignation_date", type="date", nullable=false)
     */
    private $resignationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_of_contract", type="date", nullable=false)
     */
    private $endOfContract;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_day_in_office", type="date", nullable=false)
     */
    private $lastDayInOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf_file", type="text", nullable=false)
     */
    private $pdfFile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="termination_request", type="boolean", nullable=false)
     */
    private $terminationRequest;

    /**
     * @var boolean
     *
     * @ORM\Column(name="termination_request_valid", type="boolean", nullable=false)
     */
    private $terminationRequestValid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="termination_request_date", type="date", nullable=false)
     */
    private $terminationRequestDate;

    /**
     * @var float
     *
     * @ORM\Column(name="holidays_to_paid", type="decimal", nullable=false)
     */
    private $holidaysToPaid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validation_date", type="datetime", nullable=false)
     */
    private $validationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="transmitted_to_hrdb", type="date", nullable=true)
     */
    private $transmittedToHrdb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="it_task_generated", type="boolean", nullable=false)
     */
    private $itTaskGenerated;



    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idUser
     *
     * @return integer
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }


    /**
     * Set leaverType
     *
     * @param string $leaverType
     * @return LeaveRequest
     */
    public function setLeaverType($leaverType)
    {
        $this->leaverType = $leaverType;

        return $this;
    }

    /**
     * Get leaverType
     *
     * @return string
     */
    public function getLeaverType()
    {
        return $this->leaverType;
    }

    /**
     * Set leaverReason
     *
     * @param integer $leaverReason
     * @return LeaveRequest
     */
    public function setLeaverReason($leaverReason)
    {
        $this->leaverReason = $leaverReason;

        return $this;
    }

    /**
     * Get leaverReason
     *
     * @return integer
     */
    public function getLeaverReason()
    {
        return $this->leaverReason;
    }

    /**
     * Set resignationDate
     *
     * @param \DateTime $resignationDate
     * @return LeaveRequest
     */
    public function setResignationDate($resignationDate)
    {
        $this->resignationDate = $resignationDate;

        return $this;
    }

    /**
     * Get resignationDate
     *
     * @return \DateTime
     */
    public function getResignationDate()
    {
        return $this->resignationDate;
    }

    /**
     * Set endOfContract
     *
     * @param \DateTime $endOfContract
     * @return LeaveRequest
     */
    public function setEndOfContract($endOfContract)
    {
        $this->endOfContract = $endOfContract;

        return $this;
    }

    /**
     * Get endOfContract
     *
     * @return \DateTime
     */
    public function getEndOfContract()
    {
        return $this->endOfContract;
    }

    /**
     * Set lastDayInOffice
     *
     * @param \DateTime $lastDayInOffice
     * @return LeaveRequest
     */
    public function setLastDayInOffice($lastDayInOffice)
    {
        $this->lastDayInOffice = $lastDayInOffice;

        return $this;
    }

    /**
     * Get lastDayInOffice
     *
     * @return \DateTime
     */
    public function getLastDayInOffice()
    {
        return $this->lastDayInOffice;
    }

    /**
     * Set pdfFile
     *
     * @param string $pdfFile
     * @return LeaveRequest
     */
    public function setPdfFile($pdfFile)
    {
        $this->pdfFile = $pdfFile;

        return $this;
    }

    /**
     * Get pdfFile
     *
     * @return string
     */
    public function getPdfFile()
    {
        return $this->pdfFile;
    }

    /**
     * Set terminationRequest
     *
     * @param boolean $terminationRequest
     * @return LeaveRequest
     */
    public function setTerminationRequest($terminationRequest)
    {
        $this->terminationRequest = $terminationRequest;

        return $this;
    }

    /**
     * Get terminationRequest
     *
     * @return boolean
     */
    public function getTerminationRequest()
    {
        return $this->terminationRequest;
    }

    /**
     * Set terminationRequestValid
     *
     * @param boolean $terminationRequestValid
     * @return LeaveRequest
     */
    public function setTerminationRequestValid($terminationRequestValid)
    {
        $this->terminationRequestValid = $terminationRequestValid;

        return $this;
    }

    /**
     * Get terminationRequestValid
     *
     * @return boolean
     */
    public function getTerminationRequestValid()
    {
        return $this->terminationRequestValid;
    }

    /**
     * Set terminationRequestDate
     *
     * @param \DateTime $terminationRequestDate
     * @return LeaveRequest
     */
    public function setTerminationRequestDate($terminationRequestDate)
    {
        $this->terminationRequestDate = $terminationRequestDate;

        return $this;
    }

    /**
     * Get terminationRequestDate
     *
     * @return \DateTime
     */
    public function getTerminationRequestDate()
    {
        return $this->terminationRequestDate;
    }

    /**
     * Set holidaysToPaid
     *
     * @param float $holidaysToPaid
     * @return LeaveRequest
     */
    public function setHolidaysToPaid($holidaysToPaid)
    {
        $this->holidaysToPaid = $holidaysToPaid;

        return $this;
    }

    /**
     * Get holidaysToPaid
     *
     * @return float
     */
    public function getHolidaysToPaid()
    {
        return $this->holidaysToPaid;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return LeaveRequest
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set validationDate
     *
     * @param \DateTime $validationDate
     * @return LeaveRequest
     */
    public function setValidationDate($validationDate)
    {
        $this->validationDate = $validationDate;

        return $this;
    }

    /**
     * Get validationDate
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Set transmittedToHrdb
     *
     * @param \DateTime $transmittedToHrdb
     * @return LeaveRequest
     */
    public function setTransmittedToHrdb($transmittedToHrdb)
    {
        $this->transmittedToHrdb = $transmittedToHrdb;

        return $this;
    }

    /**
     * Get transmittedToHrdb
     *
     * @return \DateTime
     */
    public function getTransmittedToHrdb()
    {
        return $this->transmittedToHrdb;
    }

    /**
     * Set itTaskGenerated
     *
     * @param boolean $itTaskGenerated
     * @return LeaveRequest
     */
    public function setItTaskGenerated($itTaskGenerated)
    {
        $this->itTaskGenerated = $itTaskGenerated;

        return $this;
    }

    /**
     * Get itTaskGenerated
     *
     * @return boolean
     */
    public function getItTaskGenerated()
    {
        return $this->itTaskGenerated;
    }
}
