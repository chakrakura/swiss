<?php

namespace App\Easyjet\HrisBundle\Services;

use DateTime;
use Exception;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

use App\Easyjet\HrisBundle\Classes\Import\Ejint097ImportLogger;

class Ejint097ImporterService
{
    /**
     * string Target to find the files to import
     * @var string
     */
    private $grossToNetFileFolder;

    /**
     * string Target to find the files to import
     * @var string
     */
    private $archiveFolder;

    private $bashScriptsFolder;

    /**
     * @var App\Easyjet\HrisBundle\Classes\Import\Ejint097ImportLogger $loger
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

    /**
     * Mailer Interface
     * @var MailerInterface $mailer Entity manager
     */
    private $mailer;

    private $currentTmpFolder;
    private $expectedEmpnosInGross2Net;
    private $tmpFolder;

    /**
     * @var DateTime $salaryMonthDateTime
     */
    private $salaryMonthDateTime;

    public function __construct(MailerInterface $mailer, $grossToNetFileFolder, $archiveFolder, $tmpFolder)
    {
        $this->grossToNetFileFolder = $grossToNetFileFolder;
        $this->archiveFolder = $archiveFolder;
        $this->tmpFolder = $tmpFolder;

        $this->mailer = $mailer;
        $this->expectedEmpnosInGross2Net = array();
    }

    public function setDbalConnexion($dbalConnexion)
    {
        $this->dbalConnexion = $dbalConnexion;
        return $this;
    }

    public function setImportLogger(Ejint097ImportLogger $importLogger)
    {
        $this->importLogger = $importLogger;
        return $this;
    }

    public function getImportLogger()
    {
        return $this->importLogger;
    }

    public function getExpectedEmpnosInGross2Net()
    {
        return $this->expectedEmpnosInGross2Net;
    }

    public function setExpectedEmpnosInGross2Net($expectedEmpnosInGross2Net)
    {
        $this->expectedEmpnosInGross2Net = $expectedEmpnosInGross2Net;
        return $this;
    }

    public function sendNotification($mailTo)
    {
        $recipients = array_map(function ($user) {
            return new Address($user);
        }, $mailTo);
        $email = (new TemplatedEmail())
            ->subject("EJINT097 successfully processed")
            ->to(...$recipients)
            ->htmlTemplate('@EasyjetHris/Mail/Ejint097SendNotification.html.twig');
        return $this->mailer->send($email);
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

    public function start($salaryMonth, $salaryYear, $supplemantal = false)
    {

        $this->salaryMonthDateTime = \DateTime::createFromFormat("Y-m-d H:i:s", $salaryYear . "-" . $salaryMonth . "-01 00:00:00");

        if (!$this->salaryMonthDateTime) {
            throw new \Exception(sprintf("The month '%s' and year '%s' are illegal", $salaryMonth, $salaryYear));
        }

        $this->importLogger->addLine(sprintf("Starting process of salary for the '%s'", $this->salaryMonthDateTime->format('F Y')));


        if (!is_dir($this->tmpFolder)) {
            try {
                mkdir($this->tmpFolder, 0, true);
            } catch (\Exception $e) {
                throw new \Exception(sprintf("Unable to create the tmp '%s' folder", $this->tmpFolder));
            }
        }
        if (!is_dir($this->tmpFolder) || !is_writeable(($this->tmpFolder))) {
            throw new \Exception(sprintf("The '%s' folder does not exist or is not writeable", $this->tmpFolder));
        }

        # This is for production startes
        $this->currentTmpFolder = $this->tmpFolder . "/gross2net_" . uniqid();
        #Ends
        #This is for UAT starts
        //$this->currentTmpFolder = $this->tmpFolder . "/gross2net_testing_file";
        #Ends 
        #Production starts here
        $this->importLogger->addLine(sprintf("Creating temporary folder '%s'", $this->currentTmpFolder));
        mkdir($this->currentTmpFolder, 0, true);

         $command = $this->bashScriptsFolder . "/retrieve-gross-to-net " . escapeshellarg($this->currentTmpFolder) . " 2>&1";
         $this->importLogger->addLine(sprintf("Starting gross to net retrieve command : %s", $command));

        $errorCode = 0;
        $this->execGross2NetCommand($command, $errorCode);
        //echo $errorCode; die;
        if ($errorCode == 1) {
            return;
        }
        #Ends here 

        $g2netCsvFileArray = array();
        $g2netCsvFileArray = $this->findG2NetLoalFile();

        if (!$g2netCsvFileArray) {
            throw new \Exception("Gross 2 net local file not found in the tmp folder");
        }
        $this->expectedEmpnosInGross2Net = $this->parseEmpnoInGross2net($g2netCsvFileArray["filetarget"]);
        $this->convertCsvToXls($g2netCsvFileArray);
        try {
            $this->importPayslips($this->salaryMonthDateTime, $supplemantal);
        } catch (\Exception $e) {
            throw $e;
        }

        if ($supplemantal) {
            $command = $this->bashScriptsFolder . "/pgp-and-transmit-to-safeguard-salary-complement " . escapeshellarg($this->currentTmpFolder) . " " . escapeshellarg($salaryMonth) . " " . escapeshellarg($salaryYear) . " " . escapeshellarg($this->archiveFolder) . " " . (int) $supplemantal . " 2>&1";
        } else {
            $command = $this->bashScriptsFolder . "/pgp-and-transmit-to-safeguard " . escapeshellarg($this->currentTmpFolder) . " " . escapeshellarg($salaryMonth) . " " . escapeshellarg($salaryYear) . " " . escapeshellarg($this->archiveFolder) . " " . (int) $supplemantal . " 2>&1";
        }
        $this->importLogger->addLine(sprintf("Starting pgp and tranmit to safeguard command : %s", $command));
        $output = implode("\n", $this->execCommand($command));
        $matches = null;
        preg_match("/(Copying the PGP file named|Copying the file named) '(.*)' to the/i", $output, $matches);
        if (count($matches) == 3) {
            $this->importLogger->addArchivedFile($matches[2]);
        } else {
            $message = sprintf("pgp-and-transmit-to-safeguard should return the pgp file name in order to complete the script. Filename not returned properly. The command return is the following : '%s'", $output);
            throw new \Exception($message);
        }

        $this->importLogger->fileParsedSuccessfully($g2netCsvFileArray['filetarget']);
    }

    public function parseEmpnoInGross2net($csvFile)
    {
        if (!is_file($csvFile)) {
            throw new Exception("Unable to parse gross 2 net CSV file");
        }

        $buffer = array();
        $first = true;
        if (($handle = fopen($csvFile, "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, "|")) !== false) {
                if ($first) {
                    $first = false;
                    continue;
                }
                $buffer[$data[0]] = true;
            }
            fclose($handle);
        }

        $this->importLogger->addLine(sprintf("%s employees found in the gross 2 net file", count($buffer)));

        return $buffer;
    }

    private function findG2NetLoalFile()
    {

        $finder = new Finder();
        $finder->files()->in($this->currentTmpFolder);
        foreach ($finder as $file) {
            if (preg_match("/\.csv$/", $file->getFilename(), $returns)) {
                return array(
                    "filename" => $file->getFilename(),
                    "filetarget" => $file->getRealpath(),
                    "filefolder" => $this->currentTmpFolder,
                );
            }
        }

        return null;
    }


    private function convertCsvToXls($g2netCsvFileArray)
    {

        $this->importLogger->addLine(sprintf("Trying to convert the '%s' file to xls", $g2netCsvFileArray['filetarget']));

        if (!is_file($g2netCsvFileArray['filetarget'])) {
            throw new \Exception(sprintf("The '%s' gross to net csv file does not exist", $g2netCsvFileArray['filetarget']));
        }

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Csv');

        // If the files uses a delimiter other than a comma (e.g. a tab), then tell the reader
        $reader->setDelimiter("|");
        // If the files uses an encoding other than UTF-8 or ASCII, then tell the reader
        $reader->setInputEncoding('Windows-1252');

        $this->importLogger->addLine("Loading CSV file");
        $objPHPExcel = $reader->load($g2netCsvFileArray['filetarget']);

        $this->importLogger->addLine("Creating xls writer");
        $objWriter = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($objPHPExcel, 'Xlsx');

        $excelFileTarget = $g2netCsvFileArray['filefolder'] . "/" . str_replace(".csv", ".xls", $g2netCsvFileArray['filename']);

        $this->importLogger->addLine(sprintf("Writing '%s' xls file", $excelFileTarget));
        $result = $objWriter->save($excelFileTarget);
        if (!is_file($excelFileTarget)) {
            throw new \Exception("Unexpected error during the excel file writing");
        }

        $this->importLogger->addLine("Excel file created ... Removing previous csv file (" . $g2netCsvFileArray['filetarget'] . ")");
        @unlink($g2netCsvFileArray['filetarget']);
    }

    private function execGross2NetCommand($command, &$errorCode)
    {
        exec($command, $output, $returnVar);
        switch ($returnVar) {
            case '0': //No error, gross to net file present
                foreach ($output as $currentLine) {
                    $this->importLogger->addLine($currentLine);
                }
                break;
            case '1': //No error, but no gross to net file
                if ($this->alreadyExportedThisMonth()) {
                    $this->importLogger->setNoFile();
                } else {
                    $this->importLogger->addWarning("The file has never been exported successfully this month");
                    throw new \Exception("file_not_exported");
                }
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

    private function alreadyExportedThisMonth()
    {
        return $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint097Log")->alreadyExportedForMonth(
            $this->salaryMonthDateTime
        );
    }

    private function execCommand($command)
    {

        exec($command, $output, $returnVar);

        if ($returnVar != 0) {
            $outputString = sprintf("Command returned message '%s'", $output[count($output) - 1]);
            foreach ($output as $currentLine) {
                $this->importLogger->fatalException($currentLine);
            }
            throw new \Exception($outputString);
        } else {
            foreach ($output as $currentLine) {
                $this->importLogger->addLine($currentLine);
            }
        }
        return $output;
    }

    private function importPayslips(\DateTime $payslipMonth, $supplemantal)
    {
        require_once "/etc/auth/oracle.php";

        echo ORACLE_LOGIN;
        echo ORACLE_PASSWORD;
        echo ORACLE_HOST;
        // Connexion à la base oracle
        $oci_conn = oci_connect(ORACLE_LOGIN, ORACLE_PASSWORD, ORACLE_HOST, "UTF8");
        if (!$oci_conn) {
            $e = oci_error();
            throw new \Exception("Oracle connexion failed");
        }

        $sql = "begin " . ORACLE_INSTANCE . "HRM_EASYJET_INDEX_REBUILD(); end;";
        $stmt = oci_parse($oci_conn, $sql);
        oci_execute($stmt);

        $e = oci_error($stmt);
        if (!empty($e)) {
            throw new \Exception(sprintf("An error occured during HRM_EASYJET_INDEX_REBUILD execution : %s. \nThe request was the following : \n%s", $e['message'], $sql));
        }

        // Configuration du format date
        $sql = 'ALTER SESSION SET NLS_DATE_FORMAT = "YYYY-MM-DD HH24:MI:SS"';
        $stmt = oci_parse($oci_conn, $sql);
        oci_execute($stmt);

        $e = oci_error($stmt);
        if (!empty($e)) {
            throw new \Exception(sprintf("An error occured when changing NLS_DATE_FORMAT : %s. \nThe request was the following : \n%s", $e['message'], $sql));
        }

        if ($supplemantal) {
            $sql = "SELECT EMP_SECONDARY_KEY, HPS_PAYSLIP, EMP_NUMBER
                FROM " . ORACLE_INSTANCE . "V_IND_INTERFACE_PAYSLIP
                WHERE
                    HPS_PAY_PERIOD>='" . $payslipMonth->format("Y-m-01") . "' AND
                    HPS_PAY_PERIOD<='" . $payslipMonth->format("Y-m-t") . "' AND SAL_CODE='Complément'";
        } else {
            $sql = "SELECT EMP_SECONDARY_KEY, HPS_PAYSLIP, EMP_NUMBER
                FROM " . ORACLE_INSTANCE . "V_IND_INTERFACE_PAYSLIP
                WHERE
                    HPS_PAY_PERIOD>='" . $payslipMonth->format("Y-m-01") . "' AND
                    HPS_PAY_PERIOD<='" . $payslipMonth->format("Y-m-t") . "'";
        }

        $stmt = oci_parse($oci_conn, $sql);
        oci_execute($stmt);
        $e = oci_error($stmt);
        if (!empty($e)) {
            throw new \Exception(sprintf("An error occured during payslip retrieving execution : %s. \nThe request was the following : \n%s", $e['message'], $sql));
        }

        $timestamp = date("YmdHis");

        $employeesWithNoPayslips = $this->expectedEmpnosInGross2Net;
        $unexpectedEmployeeFound = array();
        while ($salary = oci_fetch_array($stmt)) {
            $this->importLogger->addLine(sprintf("Importing payslip for empno '%s'", $salary['EMP_SECONDARY_KEY']));
            $filename = $this->currentTmpFolder . "/" . $salary['EMP_SECONDARY_KEY'] . ".pdf";
            $filename = $this->currentTmpFolder . "/" . sprintf(
                'ProconceptPayslip_%s_%s_%s_%s.pdf',
                $salary['EMP_SECONDARY_KEY'],
                $payslipMonth->format('m'),
                $payslipMonth->format('Y'),
                $timestamp
            );
            file_put_contents($filename, $salary['HPS_PAYSLIP']->read($salary['HPS_PAYSLIP']->size()));

            if (!isset($this->expectedEmpnosInGross2Net[$salary['EMP_SECONDARY_KEY']])) {
                // Employé inattendu trouvé dans la table
                $unexpectedEmployeeFound[] = sprintf("employee %s found in staging table but not in gross2net file", $salary['EMP_SECONDARY_KEY']);
            }

            if (isset($employeesWithNoPayslips[$salary['EMP_SECONDARY_KEY']])) {
                // L'employé a été trouvé, alors on le supprime du tableau des payslip non trouvés ...
                unset($employeesWithNoPayslips[$salary['EMP_SECONDARY_KEY']]);
            }

            $cmdResult = null;

            exec("pdftotext " . escapeshellarg($filename) . " -", $cmdResult);
            $pdfText = implode("\n", $cmdResult);
            $pdfText = str_replace(" ", " ", $pdfText);
            preg_match_all("/(Personal Nber|No personnel |Personal Nr.):[\w\W]{1}([0-9]{6})/", $pdfText, $results);
            $payslipEmpno = isset($results[2]) && isset($results[2][0]) ? trim($results[2][0]) : null;

            if ($payslipEmpno && $payslipEmpno != $salary['EMP_NUMBER'] && $payslipEmpno != $salary['EMP_SECONDARY_KEY']) {
                throw new \Exception(sprintf("The empno in the payslip is '%s' and does not correspond with the associated person in the database (first empno = '%s', current empno = '%s')", $payslipEmpno, $salary['EMP_NUMBER'], $salary['EMP_SECONDARY_KEY']));
            }
        }

        if (count($unexpectedEmployeeFound)) {
            foreach ($unexpectedEmployeeFound as $currentRow) {
                $this->importLogger->addWarning($currentRow);
            }
        }

        if (!$supplemantal) {
            if (count($employeesWithNoPayslips)) {
                foreach ($employeesWithNoPayslips as $currentEmpnoNotFound => $value) {
                    $this->importLogger->addWarning(sprintf("No payslip found for empno '%s' who was found in the gross 2 net file", $currentEmpnoNotFound));
                }
            }

            if (count($employeesWithNoPayslips)) {
                $this->importLogger->addWarning(sprintf("%s payslip not found", count($employeesWithNoPayslips)));
            }
        }
    }
}
