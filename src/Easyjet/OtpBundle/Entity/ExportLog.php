<?php

namespace App\Easyjet\OtpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * OtpImportBatch
 *
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="OTP_EXPORT_LOG")
 * @ORM\Entity(repositoryClass="App\Easyjet\OtpBundle\Repository\ExportLogRepository")
 */
class ExportLog
{
    const STATUS_SUCCESS = "success";
    const STATUS_WARNING = "warning";
    const STATUS_FAILED = "falied";

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
     * @ORM\Column(name="export_date", type="datetime", nullable=false)
     */
    private $exportDate;


    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="excel_filename", type="string", nullable=false)
     */
    private $excelFilename;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status;


    /**
     * @var \App\Easyjet\UmanBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\UmanBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_user")
     * })
     */
    private $user;

    /**
     * @var \App\Easyjet\OtpBundle\Entity\OtpImportBatch
     *
     * @ORM\ManyToOne(targetEntity="\App\Easyjet\OtpBundle\Entity\OtpImportBatch",inversedBy="rows")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="batch_id", referencedColumnName="id")
     * })
     */
    private $batch;


    public function __construct(\App\Easyjet\UmanBundle\Entity\Users $importedBy = null, \App\Easyjet\OtpBundle\Entity\OtpImportBatch $batch = null)
    {
        $this->user = $importedBy;
        $this->exportDate = new \DateTime();
        $this->batch = $batch;
        $this->status = "success";
    }

    public function getXlsContent($archiveFolder)
    {
        if ($this->excelFilename) {
            return file_get_contents($archiveFolder . "/" . $this->excelFilename);
        }
    }


    public function addLog($status, $texte)
    {
        $this->content .= date("H:i:s") . " [$status] $texte\n";

        if ($status == self::STATUS_FAILED) {
            $this->status = $status;
        }

        if ($status == self::STATUS_WARNING && $this->status != self::STATUS_FAILED) {
            $this->status = $status;
        }
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
     * Gets the value of exportDate.
     *
     * @return \DateTime
     */
    public function getExportDate()
    {
        return $this->exportDate;
    }

    /**
     * Sets the value of exportDate.
     *
     * @param \DateTime $exportDate the export date
     *
     * @return self
     */
    public function setExportDate(\DateTime $exportDate)
    {
        $this->exportDate = $exportDate;

        return $this;
    }

    /**
     * Gets the value of content.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the value of content.
     *
     * @param string $content the content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the }).
     *
     * @param \App\Easyjet\UmanBundle\Entity\Users $user the user
     *
     * @return self
     */
    public function setUser(\App\Easyjet\UmanBundle\Entity\Users $user)
    {
        $this->user = $user;

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
     * Gets the value of excelFilename.
     *
     * @return string
     */
    public function getExcelFilename()
    {
        return $this->excelFilename;
    }

    /**
     * Sets the value of excelFilename.
     *
     * @param string $excelFilename the excel filename
     *
     * @return self
     */
    public function setExcelFilename($excelFilename)
    {
        $this->excelFilename = $excelFilename;

        return $this;
    }
}
