<?php

namespace App\Easyjet\FdtrBundle\Services;

use App\Easyjet\FdtrBundle\Classes\Import\ImportLogger;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Finder\Finder;
use App\Easyjet\SwissinsideCoreBundle\Classes\Smb;
use Exception;

/**
 * 
 */
class FdtrImporterService
{
    /**
     * string Target to find the files to import
     * @var string
     */
    private  $importFolder;

    /**
     * string Target to find the files to import
     * @var string
     */
    private  $archiveFolder;

    /**
     * @var ImportLogger $loger
     */
    private $importLogger;

    /**
     * Entity manager
     * @var \Doctrine\ORM\EntityManager EntityManager
     */
    private $entityManager;

    /**
     * Connexion dbal
     * @var \Doctrine\DBAL\Connection $dbalConnexion
     */
    private $dbalConnexion;

    private $usersBuffer;

    /**
     *
     * @var \Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface
     */
    private $params;

    function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
        $this->importFolder = $this->params->get('fdtr.incoming_folder');
        $this->archiveFolder =  $this->params->get('fdtr.archive_folder');
    }

    public function setDbalConnexion($dbalConnexion)
    {
        $this->dbalConnexion = $dbalConnexion;
        return $this;
    }

    private function generateError($error)
    {
        if ($this->importLogger) {
            $this->importLogger->fatalException($error);
        }
        throw new \Exception($error);
    }

    private function generateWarning($warning)
    {
        if ($this->importLogger) {
            $this->importLogger->addWarning($warning);
        }
    }

    private function addLogInfo($info)
    {
        if ($this->importLogger) {
            $this->importLogger->addLine($info);
        }
    }

    /**
     * Set the entity manager
     * @param \Doctrine\ORM\EntityManager $entityManager The entity manager
     * @return self
     */
    public function setEntityManager(\Doctrine\ORM\EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        return $this;
    }

    /**
     * Start the import process
     * @return  [description]
     */
    public function start()
    {
        if (!($this->entityManager instanceof \Doctrine\ORM\EntityManager)) {
            throw new \Exception("No entity manager set");
        }

        $this->initUsersCache();

        if (!is_dir($this->archiveFolder)) {
            try {
                mkdir($this->archiveFolder);
            } catch (\Exception $e) {
                $this->generateError($e->getMessage());
            }
        }

        try {
            $finder = new Finder();
            $finder->files()->in($this->importFolder)->depth("== 0");
            $parsed = false;

            foreach ($finder as $currentFile) {
                $parsed = true;
                $file = $currentFile;
                $currentFile->getFileInfo();
                $moveTo = $this->archiveFolder . "/" . uniqid() . "-" . $currentFile->getFilename();
                if ($this->importLogger) {
                    $this->importLogger->addArchivedFile($currentFile->getFilename());
                }
                if (is_file($file)) {
                    if (preg_match('/^ftdr_[0-9]{14}\.xml$/i', $currentFile->getFilename())) {
                        copy($file, $moveTo);
                        if (!is_file($moveTo)) {
                            $this->generateError(sprintf("Unable to copy '%s' to '%s'", $file, $moveTo));
                        }
                        unlink($file);
                        if (Smb::is_file($file)) {
                            $this->generateError(sprintf("Unable to remove remote '%s' file", $file));
                        }
                        $this->processFile($moveTo);

                        if ($this->importLogger) {
                            $this->importLogger->fileParsedSuccessfully($currentFile->getFilename());
                        }
                    } else {
                        $this->generateWarning(sprintf("The '%s' file does not meet the standard name convention (ftdr_yyyymmddhhiiss.xml) and will be ignored", $currentFile->getFilename()));
                    }
                }
            }
        } catch (\Exception $e) {
            $this->generateError($e->getMessage());
        }

        if (!$parsed && $this->importLogger) {
            $this->importLogger->nothingToParse();
        } else {
            $currentProcessingCalendar = $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisProcessingCalendar")->findCurrent();
            $currentProcessingCalendar->setEjint099FdtrImportSatisfied(new \DateTime);

            $this->entityManager->persist($currentProcessingCalendar);
            $this->entityManager->flush();
        }
    }

    private function initUsersCache()
    {
        $this->usersBuffer = $this->entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->keyedByEmpnoUsersList($this->dbalConnexion);
    }

    private function getCorrespondingUser($empno)
    {
        $empno = str_pad($empno, 6, "0", STR_PAD_LEFT);
        if (!empty($this->usersBuffer[$empno])) {
            return $this->usersBuffer[$empno];
        } else {
            return null;
        }
    }

    public function processFile($file)
    {
        $this->addLogInfo(sprintf("Parsing file %s", $file));


        $doc = new \DOMDocument;
        $doc->load($file);

        $cpt = 1;
        $monthlyUserDataList = $doc->getElementsByTagName('monthly_user_data');
        foreach ($monthlyUserDataList as $monthlyUserData) {

            $empno = $monthlyUserData->getAttribute("empno");
            $month = $monthlyUserData->getAttribute("month");

            if (!$empno || !$month) {
                $this->generateWarning(sprintf("Unable to parse the current block (empno='%s', month='%s')", $empno, $month));
                continue;
            }

            $currentUser = $this->getCorrespondingUser($empno);
            if (!$currentUser) {
                $this->addLogInfo(sprintf("User '%s' not found in the swissinside user database", $empno));
                continue;
            }

            $this->addLogInfo(sprintf("Parsing new block (empno='%s', month='%s')", $empno, $month));
            $monthDateTime = \DateTime::createFromFormat("Y-m-d", $month . "-01");
            //$FdtrMonthlyReport = new FdtrMonthlyReport($monthDateTime , $currentUser);
            $existingReport = $this->entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->dropData($this->dbalConnexion, $monthDateTime, $currentUser);
            if ($existingReport) {
                $this->addLogInfo(sprintf("Drop previous data for empno='%s' and month='%s'", $empno, $month));
                $currentMonthlyReportId = $existingReport;
            } else {
                $currentMonthlyReportId = $this->entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->dbalNewMonthlyReport(
                    $this->dbalConnexion,
                    $monthDateTime,
                    $currentUser
                );
            }


            // Recherche de toutes les rows
            $rowsList = $monthlyUserData->getElementsByTagName('row');
            $totalDutyTime = 0;
            foreach ($rowsList as $currentRow) {
                //$fdtrRow->setMonthlyReport($FdtrMonthlyReport);
                $currentFdtrRow = array(
                    "monthly_report_id" => $currentMonthlyReportId,
                    "columns" => array()
                );

                $currentDateString = $currentDutyTimeBegin = $currentDutyTimeEnd = $currentDutyDuration = $currentBtDuration = null;
                $columnsList = array();

                $columnsXmlList = $currentRow->getElementsByTagName('column');
                foreach ($columnsXmlList as $currentColumn) {
                    $columnAttributeValue = $currentColumn->getAttribute('name');
                    $columnValue = $currentColumn->nodeValue;
                    switch ($columnAttributeValue) {
                        case 'Day':
                            $currentDateString = $month . "-" . $columnValue;
                            $currentFdtrRow['concerned_date'] = \DateTime::createFromFormat("Y-m-d", $currentDateString);
                            break;
                        case 'Duty Time Begin':
                            $currentDutyTimeBegin = $columnValue;
                            break;
                        case 'Duty Time End':
                            $currentDutyTimeEnd = $columnValue;
                            break;
                        case 'Duty Duration':
                            $currentDutyDuration = $columnValue;
                            break;
                        case 'Block Time Duration':
                            $currentBtDuration = $columnValue;
                            break;
                    }

                    $currentFdtrRow['columns'][] = array("column_name" => $columnAttributeValue, "column_value" => $columnValue);
                }

                if ($currentDateString === null || $currentDutyTimeBegin === null || $currentDutyTimeEnd === null || $currentDutyDuration === null || $currentBtDuration === null) {
                    $this->generateWarning(sprintf("User '%s' has missing information", $empno));
                } else {
                    // Populate row and associate the columns
                    $currentDutyTimeBegin = \DateTime::createFromFormat("Y-m-d H:i", $currentDateString . " " . $currentDutyTimeBegin);
                    if ($currentDateString == false || $currentDutyTimeEnd == false) {
                        throw new Exception("Date/Time seems to be in wrong format");
                    }
                    $currentDutyTimeEnd   = \DateTime::createFromFormat("Y-m-d H:i", $currentDateString . " " . $currentDutyTimeEnd);

                    list($durationHour, $durationMin) = explode(":", $currentDutyDuration);
                    $currentDutyDuration = (int)$durationHour * 60 + (int)$durationMin;
                    $currentFdtrRow['duty_time_begin'] = $currentDutyTimeBegin;
                    $currentFdtrRow['duty_time_end'] = $currentDutyTimeEnd;
                    $currentFdtrRow['duty_duration_minutes'] = $currentDutyDuration;
                    $currentFdtrRow['block_time_duration_decimal'] = $currentBtDuration;
                    $totalDutyTime += $currentDutyDuration;

                    $this->entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrRow")->dbalCreateRow(
                        $this->dbalConnexion,
                        $currentFdtrRow
                    );
                }
            }

            // finished block
            $this->entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->dbalUpdateDutyTime(
                $this->dbalConnexion,
                $currentMonthlyReportId,
                $totalDutyTime
            );
        }
    }


    /**
     * Gets the string Target to find the files to import.
     *
     * @return 
     */
    public function getImportFolder()
    {
        return $this->importFolder;
    }

    /**
     * Sets the string Target to find the files to import.
     *
     * @param  $importFolder the import folder
     *
     * @return self
     */
    public function setImportFolder($importFolder)
    {
        $this->importFolder = $importFolder;

        return $this;
    }

    /**
     * Gets the value of importLogger.
     *
     * @return ImportLogger $loger
     */
    public function getImportLogger()
    {
        return $this->importLogger;
    }

    /**
     * Sets the value of importLogger.
     *
     * @param Classes\Import\ImportLogger $loger $importLogger the import logger
     *
     * @return self
     */
    public function setImportLogger(ImportLogger $importLogger)
    {
        $this->importLogger = $importLogger;

        return $this;
    }
}
