<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT097_LOG")
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisEjint097Repository")
 */

class HrisEjint097Log
{

    const STATUS_WAITING_SAFEGUARD = "WAITING_SAFEGUARD";
    const STATUS_SAFEGUARD_WARNING = "SAFEGUARD_WARNING";
    const STATUS_SAFEGUARD_SUCCESS = "SAFEGUARD_SUCCESS";
    const STATUS_SAFEGUARD_FAILED = "SAFEGUARD_FAILED";
    const STATUS_FAILED = "FAILED";
    const STATUS_SUCCESS = "SUCCESS";
    const STATUS_NO_FILE = "NO_GROSS2NET_FILE";
    const STATUS_NOTHING = "NOTHING";
    
    /**
     * @var string
     *
     * @ORM\Column(name="script_log_content", type="text", nullable=false)
     */
    private $scriptLogContent;

    /**
     * @var string
     *
     * @ORM\Column(name="safeguard_log_content", type="text", nullable=false)
     */
    private $safeguardLogContent;

    /**
     * @var string
     *
     * @ORM\Column(name="archived_file", type="string", length=250, nullable=false)
     */
    private $archivedFile;

    /**
     * @var string
     *
     * @ORM\Column(name="script_time", type="datetime", nullable=false)
     */
    private $scriptTime;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_raw_content", type="text", nullable=true)
     */
    private $mailRawContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function __construct()
    {
        $this->scriptTime = new \DateTime();
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
     * Gets the value of scriptLogContent.
     *
     * @return string
     */
    public function getScriptLogContent()
    {
        return $this->scriptLogContent;
    }

    /**
     * Sets the value of scriptLogContent.
     *
     * @param string $scriptLogContent the script log content
     *
     * @return self
     */
    public function setScriptLogContent($scriptLogContent)
    {
        $this->scriptLogContent = $scriptLogContent;

        return $this;
    }

    /**
     * Gets the value of safeguardLogContent.
     *
     * @return string
     */
    public function getSafeguardLogContent()
    {
        return $this->safeguardLogContent;
    }

    /**
     * Sets the value of safeguardLogContent.
     *
     * @param string $safeguardLogContent the safeguard log content
     *
     * @return self
     */
    public function setSafeguardLogContent($safeguardLogContent)
    {
        $this->safeguardLogContent = $safeguardLogContent;

        return $this;
    }

    /**
     * Gets the value of archivedFile.
     *
     * @return string
     */
    public function getArchivedFile()
    {
        return $this->archivedFile;
    }

    /**
     * Sets the value of archivedFile.
     *
     * @param string $archivedFile the archived file
     *
     * @return self
     */
    public function setArchivedFile($archivedFile)
    {
        $this->archivedFile = $archivedFile;

        return $this;
    }

    /**
     * Gets the value of scriptTime.
     *
     * @return string
     */
    public function getScriptTime()
    {
        return $this->scriptTime;
    }

    /**
     * Sets the value of scriptTime.
     *
     * @param string $scriptTime the script time
     *
     * @return self
     */
    public function setScriptTime($scriptTime)
    {
        $this->scriptTime = $scriptTime;

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
     * Gets the value of mailRawContent.
     *
     * @return string
     */
    public function getMailRawContent()
    {
        return $this->mailRawContent;
    }

    /**
     * Sets the value of mailRawContent.
     *
     * @param string $mailRawContent the mail raw content
     *
     * @return self
     */
    public function setMailRawContent($mailRawContent)
    {
        $this->mailRawContent = $mailRawContent;

        return $this;
    }
}