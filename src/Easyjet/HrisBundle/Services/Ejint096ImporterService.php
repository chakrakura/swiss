<?php

namespace App\Easyjet\HrisBundle\Services;

use App\Easyjet\HrisBundle\Classes\ProConcept\IndInterfacePerson;
use Symfony\Component\Finder\Finder;
use App\Easyjet\HrisBundle\Classes\PayElements\Tester;

class Ejint096ImporterService
{

    /**
     * string Target to find the files to import
     * @var string
     */
    private $archiveFolder;

    /**
     * string Target to find the files to import temp folder
     * @var string
     */
    private $tmpFolder;

    private $bashScriptsFolder;

    /**
     * @var \App\Easyjet\HrisBundle\Classes\Import\Ejint096ImportLogger $loger
     */
    private $importLogger;

    private $forceDemographicFile;
    private $forcePayElementFile;

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

    private $currentTmpFolder;

    private $testSplitPayElement;

    private $tester;


    public function __construct($archiveFolder, $tmpFolder)
    {
        $this->archiveFolder = $archiveFolder;
        $this->tmpFolder = $tmpFolder;
    }

    public function setTestSplitPayElement($folder)
    {
        $this->testSplitPayElement = $folder;
        return $this;
    }
    public function setForceCsvFile($forceDemographicFile)
    {
        $this->forceDemographicFile = $forceDemographicFile;
        return $this;
    }

    public function setForcePayElementFile($forcePayElementFile)
    {
        $this->forcePayElementFile = $forcePayElementFile;
        return $this;
    }

    public function setDbalConnexion($dbalConnexion)
    {
        $this->dbalConnexion = $dbalConnexion;
        return $this;
    }

    public function setImportLogger(\App\Easyjet\HrisBundle\Classes\Import\Ejint096ImportLogger $importLogger)
    {
        $this->importLogger = $importLogger;
        return $this;
    }

    public function getImportLogger()
    {
        return $this->importLogger;
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

    public function setbashScriptsFolder($folder)
    {
        $this->bashScriptsFolder = $folder;
        return $this;
    }

    /**
     * @var $fixPayElements Y-m-d
     */
    public function start($fixPayElements = false)
    {
       
        if ($this->testSplitPayElement) {
            $this->importLogger->addLine(sprintf("Starting to split the pay elements file in folder : %s", $this->testSplitPayElement));
            $this->splitPayElements($this->testSplitPayElement);
            return;
        }

      
        if ($this->forceDemographicFile) {
            $this->importLogger->addLine(sprintf("Starting to import forced csv file : %s", $this->forceDemographicFile));
            $demographicCsvFile = $this->forceDemographicFile;
        } elseif ($this->forcePayElementFile) {
            $this->testPayElementsFile($this->forcePayElementFile);
            $this->importLogger->fileParsedSuccessfully($this->forcePayElementFile);
            return;
        } else {
            $command = $this->bashScriptsFolder . "/ejint096-retrieve-demographic-data-file " . escapeshellarg($this->archiveFolder) . "  " . escapeshellarg($this->tmpFolder) . " 2>&1";
            $this->importLogger->addLine(sprintf("Retrieve data from SGWI FTP : %s", $command));

            $errorCode = 0;
            $commandReturn = $this->execCommand($command, $errorCode);
            $demographicCsvFile = trim($commandReturn[count($commandReturn)-1]);
            if ($errorCode != 0) {
                return;
            }
        }

        // If error code is 0, script has been completed successfully and we can start to parse the csv file
        if (!is_file($demographicCsvFile)) {
            throw new \Exception(sprintf("The '%s' demographic data file does not exist", $demographicCsvFile));
        }


        $finder = new Finder();
        $finder->files()->in(dirname($demographicCsvFile));

        $files = array();
        foreach ($finder as $file) {
            $returns = null;
            if (preg_match("/^Proconcept-Elements_([0-9]{4})_([0-9]{2})_([0-9]{2})/", $file->getFilename(), $returns)) {
                $this->testPayElementsFile($file->getRealpath());
            }
        }

        if ($fixPayElements) {
            $this->fixPayElements($fixPayElements, dirname($demographicCsvFile));
        }

        if (!$this->forceDemographicFile) {
            $this->splitPayElements(dirname($demographicCsvFile));
            $command = $this->bashScriptsFolder . "/ejint096-move-pay-elements " . escapeshellarg($this->archiveFolder) . "  " . escapeshellarg($this->tmpFolder) . " 2>&1";
            $this->importLogger->addLine(sprintf("Move pay elements file on the proconcept server : %s", $command));
            $errorCode = 0;
            $commandReturn = $this->execCommand($command, $errorCode);
            if ($errorCode != 0) {
                throw new \Exception("The command $command failed with error code '$errorCode'");
            }
        }

        $this->importLogger->addArchivedFile($demographicCsvFile);

        $this->importLogger->addLine(sprintf("Importing '%s' file", $demographicCsvFile));

        $row = 1;
        $headersName = array();
        $headersId = array();
        if (($handle = fopen($demographicCsvFile, "r")) !== false) {
            while (($data = fgetcsv($handle, 100000, ",")) !== false) {
                $num = count($data);

                /*foreach ($data as &$currentData) {
                    $currentData = iconv( "Windows-1252", "UTF-8", $currentData );
                }*/

                if ($row <= 3) {
                    for ($c=0; $c < $num; $c++) {
                        if (!isset($headersName[$c])) {
                            $headersName[$c] = "";
                        }
                        $headersName[$c] .= " " . $data[$c];
                    }
                    if ($row == 3) {
                        foreach ($headersName as $id => $name) {
                            $headersId[trim($name)] = $id;
                        }
                    }
                } else {
                    $person = IndInterfacePerson::fromEjint096($this->entityManager, $data, $headersId);
                    $this->importLogger->addLine(sprintf("Persisting employee number '%s'", $person->getEmpno()));
                    $person->persist();
                }
                $row++;
            }
            fclose($handle);
        }

        $currentProcessingCalendar = $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisProcessingCalendar")->findCurrent();
        $currentProcessingCalendar->setEjint096IntegrationFileSatisfied(new \DateTime);

        $this->entityManager->persist($currentProcessingCalendar);
        $this->entityManager->flush();


        $this->importLogger->addLine("Commiting Oracle transaction");
        IndInterfacePerson::commit();
        $this->importLogger->addLine("File parsed... Removing temporary file");

        unlink($demographicCsvFile);
        $this->importLogger->addLine("File removed");

        $this->importLogger->fileParsedSuccessfully($demographicCsvFile);
    }

    private function showPayElementsError(Tester $tester)
    {
       
        $tester->finalizeEmpnoTesting();
        $errorsList = $tester->getErrorsList();
        foreach ($errorsList as $currentError) {
            $this->importLogger->AddPayElementWarning($currentError);
            $this->importLogger->addWarning($currentError['empno'] . " - \"" . $currentError['payElement'] . "\" - " . $currentError['message'] . ' (value = ' . $currentError['payElementValue'] . ')');
        }
    }

    public function testPayElementsFile($file)
    {
      
        if (!is_file($file)) {
            throw new \Exception("The pay elements file does not exist");
        }
        $this->importLogger->addLine("Starting to test pay elements file");

        $previousEmpno = "nope";
        $first = true;
        if (($handle = fopen($file, "r")) !== false) {
            while (($data = fgetcsv($handle, 100000, ",")) !== false) {
                if (!preg_match("/[0-9]+/", $data[0])) {
                    continue;
                }
                $empno = utf8_encode($data[0]);
                $lastname = utf8_encode($data[1]);
                $firstname = utf8_encode($data[2]);
                $payElementName = utf8_encode($data[3]);
                $payElementValue = utf8_encode($data[9]);


                if ($previousEmpno != $empno) {
                    if ($previousEmpno != "nope") {
                        $this->showPayElementsError($tester);
                    }
                    $this->importLogger->addLine("Testing pay elements for " . $empno);
                    $tester = new Tester($this->entityManager, $empno, $firstname, $lastname);
                }

                $tester->testPayElement($payElementName, $payElementValue);

                $previousEmpno = $empno;
                $first = false;
            }

            if ($tester) {
                $this->showPayElementsError($tester);
            }

            fclose($handle);
        }
    }

    public function splitPayElements($folder)
    {
        $this->importLogger->addLine("Opening folder to get the pay element file");

        $finder = new Finder();
        $finder->files()->in($folder);

        $files = array();
        foreach ($finder as $file) {
            if (preg_match("/^Proconcept-Elements_([0-9]{4})_([0-9]{2})_([0-9]{2})/", $file->getFilename(), $returns)) {
                $files[] = array(
                    "filename" => $file->getFilename(),
                    "filetarget" => $file->getRealpath(),
                    "filefolder" => $folder,
                    "y" => $returns[1],
                    "m" => $returns[2],
                    "d" => $returns[3],
                );
            }

            //Proconcept-Elements_2016_01_31_V5
        }

        if (count($files) == 0) {
            throw new \Exception("No pay elements file found for split");
        }

        if (count($files) > 1) {
            throw new \Exception("There are multiple pay elements files found");
        }

        $this->importLogger->addLine(sprintf("File '%s' found. Splitting it ...", $files[0]['filetarget']));

        if (($handle = fopen($files[0]['filetarget'], "r")) !== false) {
            $firstLine = true;
            $elementsHeader = array();
            $elementsData = array();
            while (($data = fgetcsv($handle, 100000, ",")) !== false) {
                if ($firstLine) {
                    $firstLine = false;
                    $elementsHeader = $data;
                } else {
                    $elementsData[$data[0]][] = $data;
                }
            }
            fclose($handle);
        }

        $activesFile = $files[0]['filefolder'] . "/" . str_replace(".csv", "", $files[0]['filename']) . "-Actives.csv";
        $leaversFile = $files[0]['filefolder'] . "/" . str_replace(".csv", "", $files[0]['filename']) . "-Leavers.csv";


        $this->importLogger->addLine(sprintf("Creating '%s' file", $activesFile));
        file_put_contents($activesFile, $this->csvLine($elementsHeader));
        $this->importLogger->addLine(sprintf("Creating '%s' file", $leaversFile));
        file_put_contents($leaversFile, $this->csvLine($elementsHeader));

        foreach ($elementsData as $currentEmpno => $currentDataForCurrentEmpno) {
            $isLeaver = true;
            foreach ($currentDataForCurrentEmpno as $currentElementLine) {
                if ($currentElementLine[3] == "Salary") {
                    $isLeaver = false;
                    break;
                }
            }

            reset($currentDataForCurrentEmpno);
            foreach ($currentDataForCurrentEmpno as $currentElementLine) {
                if ($isLeaver) {
                    $date1 = \DateTime::createFromFormat("M-Y-d", $currentElementLine['5'] . "-01");
                    //$date2 = \DateTime::createFromFormat("M-Y-d", $currentElementLine['6'] . "-01");
                    if (!$date1) {
                        throw new \Exception("Incorrect format for Start Period");
                    }

                    // if (!$date2) {
                    //     throw new \Exception("Incorrect format for End Period");
                    // }

                    $currentElementLine['5'] = $date1->sub(new \DateInterval('P1M'))->format("M-y");
                    //$currentElementLine['6'] = $date2->sub(new \DateInterval('P1M'))->format("M-y");
                    $currentElementLine['6'] = $currentElementLine['5'];
                    file_put_contents($leaversFile, $this->csvLine($currentElementLine), FILE_APPEND);
                } else {
                    file_put_contents($activesFile, $this->csvLine($currentElementLine), FILE_APPEND);
                }
            }
        }

        @unlink($files[0]['filetarget']);
        $this->importLogger->addLine(sprintf("Split done... Deleting '%s' file", $files[0]['filetarget']));
        if (is_file($files[0]['filetarget'])) {
            @unlink($activesFile);
            @unlink($leaversFile);
            throw new \Exception("Unable to remove the initial pay elements file after active / leavers split");
        }
    }

    private function csvLine($data)
    {
        return implode(',', $data) . PHP_EOL;
    }


    private function fixPayElements($fixPaymentDate, $folder)
    {
        $this->importLogger->addLine("Fixing pay elements... Searching file in folder");


        $finder = new Finder();
        $finder->files()->in($folder);

        $files = array();
        foreach ($finder as $file) {
            if (preg_match("/^Proconcept-Elements_([0-9]{4})_([0-9]{2})_([0-9]{2})/", $file->getFilename(), $returns)) {
                $files[] = array(
                    "filename" => $file->getRealpath(),
                    "y" => $returns[1],
                    "m" => $returns[2],
                    "d" => $returns[3],
                );
            }
        }

        if (count($files) == 0) {
            throw new \Exception("No pay elements file found for fix");
        }

        if (count($files) > 1) {
            throw new \Exception("There are multiple pay elements files found");
        }

        $this->importLogger->addLine(sprintf("File '%s' found. Fixing it ...", $files[0]['filename']));

        $datetimeFix = \DateTime::createFromFormat('Y-m-d', substr($fixPaymentDate, 0, 7) . "-01");
        $datetimeFix->sub(new \DateInterval('P1M'));

        $newCsvContent = array();

        if (($handle = fopen($files[0]['filename'], "r")) !== false) {
            while (($data = fgetcsv($handle, 100000, ",")) !== false) {
                /*
                if ($data[6] == "indefinite") {
                    $this->importLogger->addLine(sprintf("Fixing End period for empno '%s'", $data[0]));
                    $data[6] = $datetimeFix->format('M-y');
                }
                */

                $entitledFrom = \DateTime::createFromFormat('d/m/Y', $data[7]);
                if ($entitledFrom) {
                    if ($entitledFrom->format("Y-m-d") == $datetimeFix->format('Y-m-d')) {
                        $this->importLogger->addLine(sprintf("Removing entitiled from date ('%s') for empno '%s'", $data[7], $data[0]));
                        $data[7] = "";
                    }
                    if ($entitledFrom->format('Y') != $datetimeFix->format('Y') || $entitledFrom->format('m') != $datetimeFix->format('m')) {
                        $this->importLogger->addLine(sprintf("Removing entitiled from date ('%s') for empno '%s'", $data[7], $data[0]));
                        $data[7] = "";
                    }
                }

                $newCsvContent[] = $data;
            }
            fclose($handle);
        }

        $this->importLogger->addLine("Opening file with write perdmission and clearing data");
        $fp = fopen($files[0]['filename'], 'w');

        $this->importLogger->addLine("Writing new data");
        foreach ($newCsvContent as $fields) {
            fputs($fp, implode($fields, ',') . "\n");
        }

        $this->importLogger->addLine("Closing pay elements file");
        fclose($fp);
    }

    private function execCommand($command, &$errorCode)
    {
        exec($command, $output, $returnVar);
        switch ($returnVar) {
            case '0': //No error, gross to net file present
                $this->importLogger->addLine("Command returned the following messages :");
                foreach ($output as $currentLine) {
                    $this->importLogger->addLine($currentLine);
                }
                break;
            case '1': //No error, but no file to parse
                $this->importLogger->setNoFile();
                break;
            default:
                $outputString = sprintf("Command returned message '%s'", $output[count($output) - 1]);
                foreach ($output as $currentLine) {
                    $this->importLogger->fatalException($currentLine);
                }
                throw new \Exception($outputString);
                break;
        }

        $errorCode = $returnVar;
        return $output;
    }
}
