<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Twig_Environment;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_USERS_IMPORT_LOG")
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisUsersImportLogRepository")
 */

class HrisUsersImportLog
{
    const STATUS_FAILED = "FAILED";
    const STATUS_SUCCESS = "SUCCESS";
    const STATUS_NO_FILE = "NO_FILE_TO_PARSE";
    const STATUS_WARNING = "WARNING";
    /**
     * @var string
     *
     * @ORM\Column(name="script_log_content", type="text", nullable=false)
     */
    private $scriptLogContent;


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

    /**no
     * @var string
     *
     * @ORM\Column(name="mail_raw_content", type="text", nullable=true)
     */
    private $mailRawContent;

    /**
     * @var string
     *
     * @ORM\Column(name="html_report", type="string", nullable=false)
     */
    private $htmlReport;

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

    /**
     * Gets the value of payElementsLog.
     *
     * @return string
     */
    public function getPayElementsLog()
    {
        return $this->payElementsLog;
    }

    /**
     * Sets the value of payElementsLog.
     *
     * @param string $payElementsLog the pay elements log
     *
     * @return self
     */
    public function setPayElementsLog($payElementsLog)
    {
        $this->payElementsLog = $payElementsLog;

        return $this;
    }

    /**
     * Get the value of Should notify the HR team or not
     *
     * @return bool
     */
    public function getNotifyHR()
    {
        return $this->notifyHR;
    }

    /**
     * Set the value of Should notify the HR team or not
     *
     * @param bool notifyHR
     *
     * @return self
     */
    public function setNotifyHR($notifyHR)
    {
        $this->notifyHR = $notifyHR;

        return $this;
    }

    /**
     * Get the value of Html Report
     *
     * @return string
     */
    public function getHtmlReport()
    {
        return $this->htmlReport;
    }
 
    /**
     * Set the value of Html Report
     *
     * @param string htmlReport
     *
     * @return self
     */
    public function setHtmlReport($htmlReport)
    {
        $this->htmlReport = $htmlReport;

        return $this;
    }
}
