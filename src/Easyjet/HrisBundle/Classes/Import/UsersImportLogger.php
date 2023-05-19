<?php

namespace App\Easyjet\HrisBundle\Classes\Import;

use App\Easyjet\HrisBundle\Entity\HrisUsersImportLog;

use Twig\Environment;

/**
* This is the class to log the users import process
*/
class UsersImportLogger
{
    private $logContent;

    const MESSAGE_FATAL = "FATAL";
    const MESSAGE_INFO = "INFO";
    const MESSAGE_WARNING = "WARNING";

    private $archivedFile = array();
    private $status = null;

    /**
     * Twig environment
     * @var Twig_Environment
     */
    protected $twigEnv;

    /**
     * Report data to be sent to the twig template
     * @var array
     */
    protected $reportData;

    /**
     * Template file to be used to generate the report
     * @var string
     */
    protected $reportTemplate;

    /**
     * Should notify the HR team or not
     * @var bool
     */
    protected $notifyHR;

    /**
     * Html report once everything's done
     * @var null
     */
    protected $htmlReport;
    
    /**
     * Dry run or not
     * @var bool
     */
    protected $dryRun;


    public function __construct(Environment $twigEnv, $reportTemplate, $dryRun = false)
    {
        $this->status = HrisUsersImportLog::STATUS_NO_FILE;

        $this->twigEnv = $twigEnv;
        $this->reportTemplate = $reportTemplate;
        $this->notifyHR = false;
        $this->dryRun = $dryRun;

        $this->reportData = array(
            "new_users" => array(),
            "new_leavers" => array(),
            "update_users" => array(),
            "log_details" => array(),
            "user_to_be_checked" => array(),
            "new_movers" => array()
        );
    }

    /**
     * Add a new user to the log
     * @param array $user User data
     * @return self;
     */
    public function addNewUser($user)
    {
        $this->reportData['new_users'][] = $user;
        $this->notifyHR = true;

        return $this;
    }


    public function addUpdate($logUpdateUser)
    {
        $this->reportData['update_users'][] = $logUpdateUser;
        $this->notifyHR = true;

        return $this;
    }

    /**
     * Add a new leaver to the log
     * @param array $user User data
     * @return self;
     */
    public function addLeaver($user)
    {
        $this->reportData['new_leavers'][] = $user;
        $this->notifyHR = true;

        return $this;
    }
    
    
    /**
     * Add a new mover to the log
     * @param array $user User data
     * @return self;
     */
    public function addMover($user)
    {
        $this->reportData['new_movers'][] = $user;
        $this->notifyHR = true;

        return $this;
    }
    
    /**
     * Add a new user to be checked to the log
     * @param array $user User data
     * @return self;
     */
    public function addUserToBeChecked($user)
    {
        $this->reportData['user_to_be_checked'][] = $user;
        $this->notifyHR = true;

        return $this;
    }

    /**
     * Return the html report to be sent to the HRs
     * @return string Html report
     */
    private function generateReport()
    {
        return $this->twigEnv->render(
            $this->reportTemplate,
            array(
                "reportData" => $this->reportData,
                "logContent"=> $this->logContent,
                "status" => $this->status
            )
        );
    }

    /**
     * Add a fatal exception
     * @param  string $error The text to be shown for the fatal exception
     * @return null
     */
    public function fatalException($error)
    {
        $this->addLine($error, self::MESSAGE_FATAL);
        $this->status = HrisUsersImportLog::STATUS_FAILED;
        $this->notifyHR = true;
    }

    public function addWarning($warning)
    {
        $this->addLine($warning, self::MESSAGE_WARNING);
        $this->status = HrisUsersImportLog::STATUS_WARNING;
        $this->notifyHR = true;
    }

    public function setNoFile()
    {
        $this->addLine("No import file found", self::MESSAGE_WARNING);
        $this->status = HrisUsersImportLog::STATUS_NO_FILE;
    }

    public function addArchivedFile($file)
    {
        $this->archivedFile[] = $file;
    }

    public function addLine($text, $type=self::MESSAGE_INFO)
    {
        $this->logContent .= sprintf("%s %s - [%s] %s\n", date("Y-m-d H:i:s"), $this->dryRun ? "(DRY RUN)" : "", $type, $text);
    }

    public function fileParsedSuccessfully($filename)
    {
        $this->addLine(sprintf("The '%s' has been parsed successfully", $filename));
        $this->status = ($this->status == HrisUsersImportLog::STATUS_NO_FILE ? HrisUsersImportLog::STATUS_SUCCESS : $this->status);
    }
    
    public function parsedSuccessfully() {
        $this->status = ($this->status == HrisUsersImportLog::STATUS_NO_FILE ? HrisUsersImportLog::STATUS_SUCCESS : $this->status);
        $this->addLine("Data provider successfully comsumed");
    }

    public function nothingToParse()
    {
        $this->addLine("Nothing to parse", self::MESSAGE_INFO);
    }

    public function getEntity()
    {
        $hrisUsersImportLog = new HrisUsersImportLog();
        $hrisUsersImportLog
                ->setArchivedFile(implode(",", $this->archivedFile))
                ->setScriptLogContent($this->logContent)
                ->setStatus($this->status)
                ->setHtmlReport($this->generateReport());

        return $hrisUsersImportLog;
    }

    /**
     * Get the value of Template file to be used to generate the report
     *
     * @return string
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }

    /**
     * Set the value of Template file to be used to generate the report
     *
     * @param string reportTemplate
     *
     * @return self
     */
    public function setReportTemplate($reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;

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
     * Return the html report to be sent to the ITSD
     * @return string Html report
     */
    
    public function getMoverReport()
    {
        return $this->reportData['new_movers'];
    }

}
