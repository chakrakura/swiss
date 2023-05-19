<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * OtpImportBatch
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_IMPORT_ROW")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\OtpImportRowRepository")
 */
class OtpImportRow
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
     * @var \App\Easyjet\OtpBundle\Entity\OtpImportBatch
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpImportBatch",inversedBy="rows")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="batch_id", referencedColumnName="id")
     * })
     */
    private $batch;

    /**
     * @var string
     *
     * @ORM\Column(name="empno", type="string", length=6, nullable=true)
     */
    private $empno;

    /**
     * @var \DateTime
     *
     * @Assert\Date()
     * @ORM\Column(name="hire_date", type="date", nullable=false)
     */
    private $hireDate;

    /**
     * @var string
     *
     * @ORM\Column(name="compensation_grade", type="string", length=200, nullable=true)
     */
    private $compensationGrade;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\TypesEftr
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\TypesEftr")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_eftr", referencedColumnName="id")
     * })
     */
    private $typeEftr;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

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
     * @var string
     *
     * @ORM\Column(name="disruption_comment", type="text", nullable=true)
     */
    private $disruptionComment;

    /**
     * @ORM\OneToMany(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpDisruption", mappedBy="row", cascade={"persist"})
     */
    private $disruptions;

    /**
     * @ORM\OneToMany(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest", mappedBy="row", cascade={"persist"})
     */
    private $sectorsAdjustments;


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

    public function __construct() {
        $this->sectS = 0;
        $this->sectN = 0;
        $this->sectM = 0;
        $this->sectL = 0;
        $this->sectXL = 0;

        $this->sectManualTaxedChf = 0;
        $this->sectManualNotTaxedChf = 0;

        $this->disruptions =  new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function addDisruption(OtpDisruption $disruption) {
        $this->disruptions->add($disruption);
        $disruption->setRow($this);
        return $this;
    }
    
    public function getDisruptions() {
        return $this->disruptions;
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
     * @return \App\Easyjet\OtpBundle\Entity\OtpImportBatch
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\OtpBundle\Entity\OtpImportBatch $batch the batch
     *
     * @return self
     */
    public function setBatch(\App\Easyjet\OtpBundle\Entity\OtpImportBatch $batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Gets the value of empno.
     *
     * @return string
     */
    public function getEmpno()
    {
        return $this->empno;
    }

    /**
     * Sets the value of empno.
     *
     * @param string $empno the empno
     *
     * @return self
     */
    public function setEmpno($empno)
    {
        $this->empno = $empno;

        return $this;
    }

    /**
     * Gets the value of hireDate.
     *
     * @return \DateTime
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * Sets the value of hireDate.
     *
     * @param \DateTime $hireDate the hire date
     *
     * @return self
     */
    public function setHireDate(\DateTime $hireDate)
    {
        $this->hireDate = $hireDate;

        return $this;
    }

    /**
     * Gets the value of compensationGrade.
     *
     * @return string
     */
    public function getCompensationGrade()
    {
        return $this->compensationGrade;
    }

    /**
     * Sets the value of compensationGrade.
     *
     * @param string $compensationGrade the compensation grade
     *
     * @return self
     */
    public function setCompensationGrade($compensationGrade)
    {
        $this->compensationGrade = $compensationGrade;

        return $this;
    }

    /**
     * Gets the }).
     *
     * @return \App\Easyjet\UmanBundle\Entity\TypesEftr
     */
    public function getTypeEftr()
    {
        return $this->typeEftr;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\UmanBundle\Entity\TypesEftr $typeEftr the type eftr
     *
     * @return self
     */
    public function setTypeEftr(\App\Easyjet\UmanBundle\Entity\TypesEftr $typeEftr)
    {
        $this->typeEftr = $typeEftr;

        return $this;
    }

    /**
     * Gets the value of firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the value of firstname.
     *
     * @param string $firstname the firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Gets the value of lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets the value of lastname.
     *
     * @param string $lastname the lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

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
     * Gets the value of disruptionComment.
     *
     * @return string
     */
    public function getDisruptionComment()
    {
        return $this->disruptionComment;
    }

    /**
     * Sets the value of disruptionComment.
     *
     * @param string $disruptionComment the disruption ccomment
     *
     * @return self
     */
    public function setDisruptionComment($disruptionComment)
    {
        $this->disruptionComment = $disruptionComment;

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
    public function setExportedAt(\DateTime $exportedAt = null)
    {
        $this->exportedAt = $exportedAt;

        return $this;
    }

    /**
     * Gets the value of sectorsAdjustments.
     *
     * @return mixed
     */
    public function getSectorsAdjustments()
    {
        return $this->sectorsAdjustments;
    }

    /**
     * Sets the value of sectorsAdjustments.
     *
     * @param mixed $sectorsAdjustments the sectors adjustments
     *
     * @return self
     */
    public function setSectorsAdjustments($sectorsAdjustments)
    {
        $this->sectorsAdjustments = $sectorsAdjustments;

        return $this;
    }

    public function addSectorsAdjustments($adjustment) {
        $this->sectorsAdjustments->add($adjustment);
        $adjustment->setRow($this);
    }

    /**
     * @ORM\PreUpdate
     * @return null 
     */
    public function preUpdate() {

        $this->sectN = 0;
        $this->sectS = 0;
        $this->sectM = 0;
        $this->sectL = 0;
        $this->sectXL = 0;
        $this->sectManualTaxedChf = 0;
        $this->sectManualNotTaxedChf = 0;
        
        foreach ($this->sectorsAdjustments as $currentAdjustment) {

            if ($currentAdjustment->getStatus() == OtpSectAdjClaimsRequest::STATUS_ACCEPTED) {
                $this->sectN += $currentAdjustment->getSectN();
                $this->sectS += $currentAdjustment->getSectS();
                $this->sectM += $currentAdjustment->getSectM();
                $this->sectL += $currentAdjustment->getSectL();
                $this->sectXL += $currentAdjustment->getSectXL();
                $this->sectManualTaxedChf += $currentAdjustment->getSectManualTaxedChf();
                $this->sectManualNotTaxedChf += $currentAdjustment->getSectManualNotTaxedChf();
            }
            
        }
    }
}
