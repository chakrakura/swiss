<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * OtpDisruption
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_DISRUPTION")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\OtpDisruptionRepository")
 */
class OtpDisruption
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
     * @var \App\Easyjet\OtpBundle\Entity\OtpImportRow
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpImportRow",inversedBy="disruptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_import_row", referencedColumnName="id")
     * })
     */
    private $row;

    /**
     * @var \App\Easyjet\OtpBundle\Entity\OtpRequest
     *
     * @ORM\OneToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpRequest", mappedBy="disruption")
     */
    private $request;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state;


    /**
     * @var \App\Easyjet\OtpBundle\Entity\ExportLog
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\ExportLog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exported_in", referencedColumnName="id")
     * })
     */
    private $exportedIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="exported_at", type="datetime", nullable=false)
     */
    private $exportedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_changed_at", type="datetime", nullable=false)
     */
    private $statusChangedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="initial_start", type="datetime", nullable=false)
     */
    private $initialStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="initial_end", type="datetime", nullable=false)
     */
    private $initialEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="new_start", type="datetime", nullable=false)
     */
    private $newStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="new_end", type="datetime", nullable=false)
     */
    private $newEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_change", type="datetime", nullable=false)
     */
    private $dateOfChange;

    /**
     * @var text
     *
     * @ORM\Column(name="refuse_reason", type="text", nullable=true)
     */
    private $refuseReason;
    

    private $initialState = null;



    /**
     * @ORM\PostLoad
     */
    public function postLoad()
    {
        $this->initialState = $this->state;
    }

    /**
     * @ORM\PreUpdate
     * @ORM\PrePersist
     * @return null
     */
    public function preUpdate()
    {
        if ($this->initialState != $this->state) {
            $this->statusChangedAt = new \DateTime();
        }
    }

    function getRequest()
    {
        return $this->request;
    }

    function setRequest(\App\Easyjet\OtpBundle\Entity\OtpRequest $request)
    {
        $this->request = $request;
        return $this;
    }


    /**
     * Gets the value of statusChangedAt.
     *
     * @return \DateTime
     */
    public function getStatusChangedAt()
    {
        return $this->statusChangedAt;
    }

    /**
     * Sets the value of statusChangedAt.
     *
     * @param \DateTime $statusChangedAt the status changed at
     *
     * @return self
     */
    public function setStatusChangedAt(\DateTime $statusChangedAt)
    {
        $this->statusChangedAt = $statusChangedAt;

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

    /**
     * Gets the }).
     *
     * @return \App\Easyjet\OtpBundle\Entity\OtpImportRow
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\OtpBundle\Entity\OtpImportRow $row the row
     *
     * @return self
     */
    public function setRow(\App\Easyjet\OtpBundle\Entity\OtpImportRow $row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Gets the value of state.
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the value of state.
     *
     * @param integer $state the state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\OtpBundle\Entity\OtpImportBatch $exportedIn the exported in
     *
     * @return self
     */
    public function setExportedIn(\App\Easyjet\OtpBundle\Entity\ExportLog $exportedIn = null)
    {
        $this->exportedIn = $exportedIn;

        return $this;
    }

    /**
     * Gets the value of exportedAt.
     *
     * @return \DateTime
     */
    public function getExportedAt()
    {
        return $this->exportedAt;
    }

    /**
     * Sets the value of exportedAt.
     *
     * @param \DateTime $exportedAt the exported at
     *
     * @return self
     */
    public function setExportedAt(\DateTime $exportedAt)
    {
        $this->exportedAt = $exportedAt;

        return $this;
    }


    /**
     * Gets the value of date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the value of date.
     *
     * @param \DateTime $date the date at
     *
     * @return self
     */
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets the value of date.
     *
     * @return \DateTime
     */

    function getInitialStart()
    {
        return $this->initialStart;
    }

    /**
     * Sets the value of date.
     *
     * @param \DateTime $date the date at
     *
     * @return self
     */
    function setInitialStart($initialStart)
    {
        $this->initialStart = $initialStart;
        return $this;
    }

    /**
     * Gets the value of date.
     *
     * @return \DateTime
     */

    function getInitialEnd()
    {
        return $this->initialEnd;
    }

    function setInitialEnd(\DateTime $initialEnd)
    {
        $this->initialEnd = $initialEnd;
        return $this;
    }

    /**
     * Gets the value of date.
     *
     * @return \DateTime
     */
    function getNewStart()
    {
        return $this->newStart;
    }

    function setNewStart(\DateTime $newStart)
    {
        $this->newStart = $newStart;
        return $this;
    }

    /**
     * Gets the value of date.
     *
     * @return \DateTime
     */
    function getNewEnd()
    {
        return $this->newEnd;
    }

    function setNewEnd(\DateTime $newEnd)
    {
        $this->newEnd = $newEnd;
        return $this;
    }
    
    /**
     * Gets the value of date.
     *
     * @return \DateTime
     */
    function getDateOfChange()
    {
        return $this->dateOfChange;
    }

    function setDateOfChange(\DateTime $dateOfChange)
    {
        $this->dateOfChange = $dateOfChange;
        return $this;
    }
     /**
     * Gets the value of refuseReason.
     *
     * @return 
     */
    function getRefuseReason()
    {
        return $this->refuseReason;
    }

    function setRefuseReason($refuseReason)
    {
        $this->refuseReason = $refuseReason;
        return $this;
    }
}
