<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * OtpImportBatch
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_SECT_ADJ_CLAIMS_REQUEST")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\OtpSectAdjClaimsRequestRepository")
 */
class OtpSectAdjClaimsRequest
{
    const STATUS_ACCEPTED = "accepted";
    const STATUS_PENDING = "pending";
    const STATUS_REFUSED = "refused";

    
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
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpImportRow",inversedBy="sectorsAdjustments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="row_id", referencedColumnName="id")
     * })
     */
    private $row;
    
    /**
     * @var \App\Easyjet\OtpBundle\Entity\OtpRequest
     *
     * @ORM\OneToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpRequest", mappedBy="sectorAdjustment", cascade={"remove"})
     */
    private $request;

    /**
     * @var float
     *
     * @ORM\Column(name="sect_n", type="decimal", nullable=false)
     */
    private $sectN;

    /**
     * @var float
     *
     * @ORM\Column(name="sect_s", type="decimal", nullable=false)
     */
    private $sectS;

    /**
     * @var float
     *
     * @ORM\Column(name="sect_m", type="decimal", nullable=false)
     */
    private $sectM;

    /**
     * @var float
     *
     * @ORM\Column(name="sect_l", type="decimal", nullable=false)
     */
    private $sectL;

    /**
     * @var float
     *
     * @ORM\Column(name="sect_xl", type="decimal", nullable=false)
     */
    private $sectXL;

    /**
     * @var float
     *
     * @ORM\Column(name="sect_manual_taxed_chf", type="decimal", nullable=false)
     */
    private $sectManualTaxedChf;

    /**
     * @var float
     *
     * @ORM\Column(name="sect_manual_not_taxed_chf", type="decimal", nullable=false)
     */
    private $sectManualNotTaxedChf;

    /**
     * @ORM\OneToMany(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpImportRowComment", mappedBy="sectorAdujstment", cascade={"persist","remove"})
     */
    private $comments;


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
     * @var string
     *
     * @ORM\Column(name="status", type="string", columnDefinition="ENUM('accepted', 'refused', 'pending')")
     */
    private $status;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="approved_by", referencedColumnName="id_user")
     * })
     */
    private $approvedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="status_changed_at", type="datetime", nullable=false)
     */
    private $statusChangedAt;

    private $initialState = null;

    /**
     * @var integer
     *
     * @ORM\Column(name="row_id", type="integer", nullable=true)
     */
    private $rowVal;

    /**
     * @ORM\PostLoad
     */
    public function postLoad() {
        $this->initialState = $this->status;
    }

    /**
     * @ORM\PreUpdate
     * @ORM\PrePersist
     * @return null
     */
    public function preUpdate() {
        if ($this->initialState != $this->status) {
            $this->statusChangedAt = new \DateTime();
        }
    }
    
    function getRequest() {
        return $this->request;
    }

    function setRequest(\App\Easyjet\OtpBundle\Entity\OtpRequest $request) {
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

    public function __construct($row = null) {
        $this->sectS = 0;
        $this->sectN = 0;
        $this->sectM = 0;
        $this->sectL = 0;
        $this->sectXL = 0;

        $this->status = self::STATUS_PENDING;

        $this->sectManualTaxedChf = 0;
        $this->sectManualNotTaxedChf = 0;

        $this->row = $row;

        $this->comments =  new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function addComment($comment) {
        $this->comments->add($comment);
        $comment->setSectorAdujstment($this);
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
     * Gets the value of sectN.
     *
     * @return float
     */
    public function getSectN()
    {
        return $this->sectN;
    }

    /**
     * Sets the value of sectN.
     *
     * @param float $sectN the sect
     *
     * @return self
     */
    public function setSectN($sectN)
    {
        $this->sectN = $sectN;

        return $this;
    }

    /**
     * Gets the value of sectS.
     *
     * @return float
     */
    public function getSectS()
    {
        return $this->sectS;
    }

    /**
     * Sets the value of sectS.
     *
     * @param float $sectS the sect
     *
     * @return self
     */
    public function setSectS($sectS)
    {
        $this->sectS = $sectS;

        return $this;
    }

    /**
     * Gets the value of sectM.
     *
     * @return float
     */
    public function getSectM()
    {
        return $this->sectM;
    }

    /**
     * Sets the value of sectM.
     *
     * @param float $sectM the sect
     *
     * @return self
     */
    public function setSectM($sectM)
    {
        $this->sectM = $sectM;

        return $this;
    }

    /**
     * Gets the value of sectL.
     *
     * @return float
     */
    public function getSectL()
    {
        return $this->sectL;
    }

    /**
     * Sets the value of sectL.
     *
     * @param float $sectL the sect
     *
     * @return self
     */
    public function setSectL($sectL)
    {
        $this->sectL = $sectL;

        return $this;
    }

    /**
     * Gets the value of sectXL.
     *
     * @return float
     */
    public function getSectXL()
    {
        return $this->sectXL;
    }

    /**
     * Sets the value of sectXL.
     *
     * @param float $sectXL the sect
     *
     * @return self
     */
    public function setSectXL($sectXL)
    {
        $this->sectXL = $sectXL;

        return $this;
    }

    /**
     * Gets the value of sectManualTaxedChf.
     *
     * @return float
     */
    public function getSectManualTaxedChf()
    {
        return $this->sectManualTaxedChf;
    }

    /**
     * Sets the value of sectManualTaxedChf.
     *
     * @param float $sectManualTaxedChf the sect manual taxed chf
     *
     * @return self
     */
    public function setSectManualTaxedChf($sectManualTaxedChf)
    {
        $this->sectManualTaxedChf = $sectManualTaxedChf;

        return $this;
    }

    /**
     * Gets the value of sectManualNotTaxedChf.
     *
     * @return float
     */
    public function getSectManualNotTaxedChf()
    {
        return $this->sectManualNotTaxedChf;
    }

    /**
     * Sets the value of sectManualNotTaxedChf.
     *
     * @param float $sectManualNotTaxedChf the sect manual not taxed chf
     *
     * @return self
     */
    public function setSectManualNotTaxedChf($sectManualNotTaxedChf)
    {
        $this->sectManualNotTaxedChf = $sectManualNotTaxedChf;

        return $this;
    }

    /**
     * Gets the value of comments.
     *
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets the value of comments.
     *
     * @param mixed $comments the comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Gets the }).
     *
     * @return \App\Easyjet\OtpBundle\Entity\ExportLog
     */
    public function getExportedIn()
    {
        return $this->exportedIn;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\OtpBundle\Entity\ExportLog $exportedIn the exported in
     *
     * @return self
     */
    public function setExportedIn(\App\Easyjet\OtpBundle\Entity\ExportLog $exportedIn)
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
     * Gets the value of status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the value of status.
     *
     * @param string $status the status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }


    /**
     * Gets the }).
     *
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function getApprovedBy()
    {
        return $this->approvedBy;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\UmanBundle\Entity\Users $approvedBy the approved by
     *
     * @return self
     */
    public function setApprovedBy(\App\Easyjet\UmanBundle\Entity\Users $approvedBy = null)
    {
        $this->approvedBy = $approvedBy;

        return $this;
    }

     /**
     * Sets the rowVal.
     *
     * @param $rowVal
     *
     * @return self
     */
    public function setRowVal($rowVal)
    {
        $this->rowVal = $rowVal;

        return $this;
    }

   
}
