<?php

namespace App\Easyjet\HrisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HrisRow
 *
 * @ORM\Table(name="HRIS_EJINT096_DATA_CHECK")
 * @ORM\Entity(repositoryClass="App\Easyjet\HrisBundle\Repository\HrisEjint096DataCheckRepository")
 */

class HrisEjint096DataCheck
{
    const STATUS_FAILED = "FAILED";
    const STATUS_SUCCESS = "SUCCESS";
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
     * @ORM\Column(name="command", type="text", nullable=false)
     */
    private $command;


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
     * @ORM\Column(name="xls_file", type="string", length=200, nullable=true)
     */
    private $xlsFile;

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

    public function getXlsContent($archiveFolder) {
        if ($this->xlsFile) {
            return file_get_contents($archiveFolder . "/" . $this->xlsFile);
        }
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
     * Gets the value of command.
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Sets the value of command.
     *
     * @param string $command the command
     *
     * @return self
     */
    public function setCommand($command)
    {
        $this->command = $command;

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
     * Gets the value of xlsFile.
     *
     * @return string
     */
    public function getXlsFile()
    {
        return $this->xlsFile;
    }

    /**
     * Sets the value of xlsFile.
     *
     * @param string $xlsFile the xls file
     *
     * @return self
     */
    public function setXlsFile($xlsFile)
    {
        $this->xlsFile = $xlsFile;

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