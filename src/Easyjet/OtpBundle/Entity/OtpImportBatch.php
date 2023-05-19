<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * OtpImportBatch
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_IMPORT_BATCH")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\ImportBatchRepository")
 */
class OtpImportBatch
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
     * @Assert\Date(groups={"Strict"})
     * @ORM\Column(name="import_date", type="datetime", nullable=false)
     */
    private $importDate;


    /**
     * @var \DateTime
     *
     * @Assert\Date(groups={"Strict"})
     * @ORM\Column(name="exported_at", type="datetime", nullable=false)
     */
    private $exportedAt;

    /**
     * @var \DateTime
     *
     * @Assert\Date(groups={"Strict"})
     * @Assert\NotBlank(groups={"Strict"})
     * @ORM\Column(name="cvp_month", type="date", nullable=false)
     */
    private $cvpMonth;

    /**
     * @var \DateTime
     *
     * @Assert\Date(groups={"Strict"})
     * @Assert\NotBlank(groups={"Strict"})
     * @ORM\Column(name="effective_date", type="date", nullable=false)
     */
    private $effectiveDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="removed", type="datetime", nullable=true)
     */
    private $removed;

    /**
     * @var integer
     *
     * @ORM\Column(name="published", type="integer", nullable=false)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="locked", type="integer", nullable=false)
     */
    private $locked;

    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imported_by", referencedColumnName="id_user")
     * })
     */
    private $importedBy;

    /**
     * @ORM\OneToMany(targetEntity="OtpImportRow", mappedBy="batch", cascade={"persist"})
     */
    private $rows;

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"Strict"})
     */
    private $otpFile;




    public function __construct(\App\Easyjet\UmanBundle\Entity\Users $importedBy = null, \DateTime $effectiveDate = null, \DateTime $cvpDate = null)
    {
        $this->importedBy = $importedBy;
        $this->effectiveDate = $effectiveDate;
        $this->importDate = new \DateTime();
        $this->cvpMonth = $cvpDate;

        $this->locked = false;
        $this->published = false;

        $this->rows =  new \Doctrine\Common\Collections\ArrayCollection();
    }



    public function remove()
    {
        $this->removed = new \DateTime;
    }

    public function addRow(OtpImportRow $row)
    {
        $this->rows->add($row);
        $row->setBatch($this);
        return $this;
    }

    public function getRows()
    {
        return $this->rows;
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
     * Gets the value of importDate.
     *
     * @return \DateTime
     */
    public function getImportDate()
    {
        return $this->importDate;
    }

    /**
     * Sets the value of importDate.
     *
     * @param \DateTime $importDate the import date
     *
     * @return self
     */
    public function setImportDate(\DateTime $importDate = null)
    {
        $this->importDate = $importDate;

        return $this;
    }

    /**
     * Gets the value of effectiveDate.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets the value of effectiveDate.
     *
     * @param \DateTime $effectiveDate the effective date@
     *
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate = null)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets the }).
     *
     * @return \App\Easyjet\UmanBundle\Entity\Users
     */
    public function getImportedBy()
    {
        return $this->importedBy;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\UmanBundle\Entity\Users $importedBy the imported by
     *
     * @return self
     */
    public function setImportedBy(\App\Easyjet\UmanBundle\Entity\Users $importedBy = null)
    {
        $this->importedBy = $importedBy;

        return $this;
    }

    public function __toString()
    {
        return $this->effectiveDate->format("M Y") . " (imported the " . $this->importDate->format("d/m/Y") . " at " . $this->importDate->format("H:i:s") . ")";
    }

    /**
     * Gets the value of cvpMonth.
     *
     * @return \DateTime
     */
    public function getCvpMonth()
    {
        return $this->cvpMonth;
    }

    /**
     * Sets the value of cvpMonth.
     *
     * @param \DateTime $cvpMonth the cvp month
     *
     * @return self
     */
    public function setCvpMonth(\DateTime $cvpMonth = null)
    {
        $this->cvpMonth = $cvpMonth;

        return $this;
    }



    /**
     * Gets the value of published.
     *
     * @return integer
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Sets the value of published.
     *
     * @param integer $published the published
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Gets the value of locked.
     *
     * @return integer
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Sets the value of locked.
     *
     * @param integer $locked the locked
     *
     * @return self
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Gets the value of otpFile.
     *
     * @return mixed
     */
    public function getOtpFile()
    {
        return $this->otpFile;
    }

    /**
     * Sets the value of otpFile.
     *
     * @param mixed $otpFile the otp file
     *
     * @return self
     */
    public function setOtpFile($otpFile)
    {
        $this->otpFile = $otpFile;

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
}
