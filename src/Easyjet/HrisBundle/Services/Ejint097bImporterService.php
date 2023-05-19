<?php

namespace App\Easyjet\HrisBundle\Services;

use Exception;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

class Ejint097bImporterService
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
     * @var \App\Easyjet\HrisBundle\Classes\Import\Ejint097ImportLogger $loger
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

    public function setImportLogger(\App\Easyjet\HrisBundle\Classes\Import\Ejint097ImportLogger $importLogger)
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
        $this->expectedEmpnosInGross2Net = $expectedEmpnosInGross2Net ? $expectedEmpnosInGross2Net : array();
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

    public function start($salaryMonth, $salaryYear)
    {
        $salaryMonthDateTime = \DateTime::createFromFormat("Y-m-d H:i:s", $salaryYear . "-" . $salaryMonth . "-01 00:00:00");
        if (!$salaryMonthDateTime) {
            throw new \Exception(sprintf("The month '%s' and year '%s' are illegal", $salaryMonth, $salaryYear));
        }

        $this->importLogger->addLine(sprintf("Starting process of certificate salary import for the '%s'", $salaryMonthDateTime->format('F Y')));
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

        $this->currentTmpFolder = $this->tmpFolder . "/salary_certificate" . uniqid();
        $this->importLogger->addLine(sprintf("Creating temporary folder '%s'", $this->currentTmpFolder));
        mkdir($this->currentTmpFolder, 0, true);

        try {
            $this->importSalaryCertificate($salaryMonthDateTime);
        } catch (\Exception $e) {
            throw $e;
        }
        //die("sending file" . $this->bashScriptsFolder . "/pgp-and-transmit-to-safeguard-salary-certificate " . escapeshellarg($this->currentTmpFolder) . " " . escapeshellarg($salaryMonth) . " " . escapeshellarg($salaryYear) . " " . escapeshellarg($this->archiveFolder) . " 2>&1");

        $command = $this->bashScriptsFolder . "/pgp-and-transmit-to-safeguard-salary-certificate " . escapeshellarg($this->currentTmpFolder) . " " . escapeshellarg($salaryMonth) . " " . escapeshellarg($salaryYear) . " " . escapeshellarg($this->archiveFolder) . " 2>&1";
        $this->importLogger->addLine(sprintf("Starting pgp and tranmit to safeguard command : %s", $command));
        $output = implode("\n", $this->execCommand($command));

        $matches = null;
        preg_match("/Copying the PGP file named '(.*)' to the ftp/i", $output, $matches);
        if (count($matches) == 2) {
            $this->importLogger->addArchivedFile($matches[1]);
        } else {
            $message = sprintf("pgp-and-transmit-to-safeguard-salary-certificate should return the pgp file name in order to complete the script. Filename not returned properly. The command return is the following : '%s'" . $output);
            throw new \Exception($message);
        }

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

    private function importSalaryCertificate(\DateTime $payslipMonth)
    {
        require_once "/etc/auth/oracle.php";
        // Connexion à la base oracle
        $oci_conn = oci_connect(ORACLE_LOGIN, ORACLE_PASSWORD, ORACLE_HOST, "UTF8");
        if (!$oci_conn) {
            throw new \Exception("Oracle connexion failed");
        }

        // Configuration du format date
        $sql = 'ALTER SESSION SET NLS_DATE_FORMAT = "YYYY-MM-DD HH24:MI:SS"';
        $stmt = oci_parse($oci_conn, $sql);
        oci_execute($stmt);

        $e = oci_error($stmt);
        if (!empty($e)) {
            throw new \Exception(sprintf("An error occured when changing NLS_DATE_FORMAT : %s. \nThe request was the following : \n%s", $e['message'], $sql));
        }

        $sql = "SELECT *
                FROM " . ORACLE_INSTANCE . "V_IND_INTERFACE_PAYSLIP_V2
                WHERE
                HPS_PAY_PERIOD>='" . $payslipMonth->format("Y-m-01") . "' AND
                HPS_PAY_PERIOD<='" . $payslipMonth->format("Y-m-t") . "' AND
                C_HRM_PAYSLIP_TYPE = '02'";
        $stmtSalaryCertificate = oci_parse($oci_conn, $sql);
        oci_execute($stmtSalaryCertificate);
        $e = oci_error($stmtSalaryCertificate);
        if (!empty($e)) {
            throw new \Exception(sprintf("An error occured during working certificate retrieving execution : %s. \nThe request was the following : \n%s", $e['message'], $sql));
        }
        $timestamp = date("YmdHis");

        $employeesWithNoPayslips = $this->expectedEmpnosInGross2Net;
        $unexpectedEmployeeFound = array();

        while ($salary = oci_fetch_array($stmtSalaryCertificate)) {
            $this->importLogger->addLine(sprintf("Importing salary certificate for empno '%s'", $salary['EMP_SECONDARY_KEY']));
            $filename = $this->currentTmpFolder . "/" . sprintf('%s_Yearlytax_%s.pdf',
                $salary['EMP_SECONDARY_KEY'],
                $payslipMonth->format('Y')
            );
            file_put_contents($filename, $salary['HPS_PAYSLIP']->read($salary['HPS_PAYSLIP']->size()));
            if (count($this->expectedEmpnosInGross2Net) && !isset($this->expectedEmpnosInGross2Net[$salary['EMP_SECONDARY_KEY']])) {
                // Employé inattendu trouvé dans la table
                $unexpectedEmployeeFound[] = sprintf("employee %s found in staging table but not in gross2net file", $salary['EMP_SECONDARY_KEY']);
            }

            if (isset($employeesWithNoPayslips[$salary['EMP_SECONDARY_KEY']])) {
                // L'employé a été trouvé, alors on le supprime du tableau des payslip non trouvés ...
                unset($employeesWithNoPayslips[$salary['EMP_SECONDARY_KEY']]);
            }
        }

        if (count($unexpectedEmployeeFound)) {
            foreach ($unexpectedEmployeeFound as $currentRow) {
                $this->importLogger->addWarning($currentRow);
            }
        }

        if (count($employeesWithNoPayslips)) {
            foreach ($employeesWithNoPayslips as $currentEmpnoNotFound => $value) {
                $this->importLogger->addWarning(sprintf("No salary certificate found for empno '%s' who was found in the gross 2 net file", $currentEmpnoNotFound));
            }
        }

        if (count($employeesWithNoPayslips)) {
            throw new Exception(sprintf("%s salary certificate not found", count($employeesWithNoPayslips)));
        }

    }
}
