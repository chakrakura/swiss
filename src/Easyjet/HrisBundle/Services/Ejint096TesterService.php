<?php

namespace App\Easyjet\HrisBundle\Services;

use App\Easyjet\HrisBundle\Classes\ProConcept\IndInterfacePerson;
use Symfony\Component\Finder\Finder;
use App\Easyjet\HrisBundle\Classes\PayElements\Tester as PayElementTester;
use App\Easyjet\HrisBundle\Classes\DemographicData\Tester as DemographicDataTester;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet;

/**
 * The tester service is designed to run data test and comparaison between different sources
 */
class Ejint096TesterService
{
    /**
     * @var \App\Easyjet\HrisBundle\Classes\Import\Ejint096TesterLogger $loger
     */
    private $testerLogger;

    /**
     * The target of the demographic file when forced from the commands
     * @var string
     */
    private $forceDemographicFile;
    /**
     * The target of the pay element file when forced from the commands
     * @var string
     */
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


    private $xlsDocument;
    /**
     * Target of the archive folder where to store the result
     * @var string
     */
    private $archiveFolder = null;

    /**
     * The last parsed row of the pay element file
     * @var integer
     */
    private $lastPayElementsRow = 1;

    /**
     * The last parsed row in the demographic data file
     * @var integer
     */
    private $lastDemographicDataRow = 1;

    /**
     * The last parsed row in the CER file
     * @var integer
     */
    private $lastCerRow = 1;



    public function __construct($archiveFolder)
    {
        $this->archiveFolder = $archiveFolder;
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

    public function setTesterLogger(\App\Easyjet\HrisBundle\Classes\Import\Ejint096TesterLogger $testerLogger)
    {
        $this->testerLogger = $testerLogger;
        return $this;
    }

    public function getTesterLogger()
    {
        return $this->testerLogger;
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
     * Run the ejint096 intergration in testing mode (in order to test if the file is correct)
     * The script tries to save data in the databse. The IndInterfacePerson::comiit() method is not called though which avoid data to be trully persisted.
     * @param  string $file Target of the demographic data file
     * @return null
     * @throws \Exception If file does not exist
     */
    public function testDemographicDataFile($file)
    {

        if (!is_file($file)) {
            throw new \Exception("The demographic data file does not exist");
        }
        $this->testerLogger->addLine("Starting to test demographic data file");

        $row = 1;
        $headersName = array();
        $headersId = array();

        // Create the "DD check" sheet in the global xls document
        $sheet = $this->getXlsSheet("DD Check");

        // Get all the rules for the different columns
        $ddColumns = $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicData")->findAllByArray();

        if (($handle = fopen($file, "r")) !== false) {
            while (($data = fgetcsv($handle, 100000, ",")) !== false) {
                $num = count($data);

                if ($row <= 3) {
                    // The first 3 row don't contain data. They are used to get the column name
                    for ($c = 0; $c < $num; $c++) {
                        if (!isset($headersName[$c])) {
                            $headersName[$c] = "";
                        }
                        $headersName[$c] .= " " . $data[$c];
                    }
                    if ($row == 3) {
                        foreach ($headersName as $id => $name) {
                            $headersId[trim($name)] = $id;
                        }

                        foreach ($ddColumns as $columnName => $currentDDcolumn) {
                            if (!isset($headersId[$columnName])) {
                                // For all configured columns in the HRIS administration section, not found in the demographic data file ...
                                $this->addDemographicErrorMessage(array(
                                    'empno' => '',
                                    'firstname' => '',
                                    'lastname' => '',
                                    'demographicDataColumn' => $columnName,
                                    'message' => "The column does not exist in the CSV file",
                                    'demographicDataValue' => '',
                                ));
                            }
                        }
                    }
                } else {
                    // From the 4th line. Data are parsed
                    try {
                        // Create the IndInterfacePerson oracle entity and persist him
                        $person = IndInterfacePerson::fromEjint096($this->entityManager, $data, $headersId, true);
                        // Log the test
                        $this->testerLogger->addLine(sprintf("Test persisting employee number '%s'", $person->getEmpno()));
                        // Try to save in the database
                        $person->persist();
                    } catch (\Exception $e) {
                        $this->addDemographicErrorMessage(array(
                            'empno' => empty($person) ? "" : $person->getEmpno(),
                            'firstname' => empty($person) ? "" : $person->getPerFirstName(),
                            'lastname' => empty($person) ? "" : $person->getPerLastName(),
                            'demographicDataColumn' => '',
                            'message' => "Oracle error during data persistance test",
                            'demographicDataValue' => '',
                            'oracleError' => $e->getMessage()
                        ));
                        continue;
                    }

                    $tester = new DemographicDataTester($this->entityManager, $person->getEmpno(), $person->getPerFirstName(), $person->getPerLastName());

                    $tester->testDemographicData($data, $headersId);

                    $errors = $tester->getErrorsList();
                    foreach ($errors as $currentError) {
                        $this->addDemographicErrorMessage($currentError);
                    }
                }
                $row++;
            }
            fclose($handle);

            foreach (range('A', 'G') as $columnID) {
                $sheet->getColumnDimension($columnID)->setAutoSize(true);
            }
            $sheet->getStyle('A1:G1')->applyFromArray(
                array(
                    'fill' => array(
                        'fillType' => Fill::FILL_SOLID,
                        'color' => array('rgb' => 'FF6600')
                    ),
                    'borders' => array(
                        'allBorders' => array(
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => array('rgb' => 'FF6600')
                        )
                    )
                )
            );
            $sheet->getStyle('A2:G' . $this->lastDemographicDataRow)->applyFromArray(
                array(
                    'borders' => array(
                        'allBorders' => array(
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => array('rgb' => 'FF6600')
                        )
                    )
                )
            );
        }
    }

    /**
     * Open the CER file
     * @param  string    $cerFile      Target of the CER file
     * @return \PHPExcel &cerXlsObject Excel file stream
     */
    public function openCerFile($cerFile)
    {
        if (!is_file($cerFile)) {
            throw new \Exception("The CER file does not exist");
        }

        $inputFileType = IOFactory::identify($cerFile);
        $objReader = IOFactory::createReader($inputFileType);
        $objReader->setReadDataOnly(true);
        $cerXlsObject = $objReader->load($cerFile);

        return $cerXlsObject;
    }

    /**
     * Add a specific error regarding the demographic data
     * @param array $errorMessage [description]
     */
    public function addDemographicErrorMessage($errorMessage)
    {
        if (!isset($errorMessage['oracleError'])) {
            $errorMessage['oracleError'] = "";
        }

        $this->testerLogger->addWarning($errorMessage['message']);

        // Get or create the DD Check sheet
        $sheet = $this->getXlsSheet("DD Check");
        $sheet->setCellValueByColumnAndRow(1, $this->lastDemographicDataRow, $errorMessage['empno']);
        $sheet->setCellValueByColumnAndRow(2, $this->lastDemographicDataRow, $errorMessage['firstname']);
        $sheet->setCellValueByColumnAndRow(3, $this->lastDemographicDataRow, $errorMessage['lastname']);
        $sheet->setCellValueByColumnAndRow(4, $this->lastDemographicDataRow, $errorMessage['demographicDataColumn']);
        $sheet->setCellValueByColumnAndRow(5, $this->lastDemographicDataRow, $errorMessage['message']);
        $sheet->setCellValueByColumnAndRow(6, $this->lastDemographicDataRow, $errorMessage['demographicDataValue']);
        $sheet->setCellValueByColumnAndRow(7, $this->lastDemographicDataRow, $errorMessage['oracleError']);
        $sheet->setAutoFilter('A1:G1');
        $this->lastDemographicDataRow++;
    }


    /**
     * Add a pay element specific error
     * @param  PayElementTester $tester Tester
     * @return null
     */
    private function showPayElementsError(PayElementTester $tester)
    {
        $tester->finalizeEmpnoTesting();
        $errorsList = $tester->getErrorsList();

        $sheet = $this->getXlsSheet("Pay elements check");

        foreach ($errorsList as $currentError) {
            $this->testerLogger->addWarning($currentError['message']);
            $sheet->setCellValueByColumnAndRow(1, $this->lastPayElementsRow, $currentError['empno']);
            $sheet->setCellValueByColumnAndRow(2, $this->lastPayElementsRow, $currentError['firstname']);
            $sheet->setCellValueByColumnAndRow(3, $this->lastPayElementsRow, $currentError['lastname']);
            $sheet->setCellValueByColumnAndRow(4, $this->lastPayElementsRow, $currentError['payElement']);
            $sheet->setCellValueByColumnAndRow(5, $this->lastPayElementsRow, $currentError['message']);
            $sheet->setCellValueByColumnAndRow(6, $this->lastPayElementsRow, $currentError['payElementValue']);
            $sheet->setAutoFilter('A1:F1');
            $this->lastPayElementsRow++;
        }
    }

    /**
     * Get the sheet by name of create if it does not exist
     * @param  string $tabName Sheet name to search
     * @return \Spreadsheet  Created sheet or existing one
     */
    private function getXlsSheet($tabName)
    {
        if (!$this->xlsDocument) {
            $this->testerLogger->addLine("Create xls document");
            $this->xlsDocument = new Spreadsheet();

            $this->xlsDocument->removeSheetByIndex(0);
        }

        $existingSheet = $this->xlsDocument->getSheetByName($tabName);

        if ($existingSheet) {
            return $existingSheet;
        } else {
            $newsheet = $this->xlsDocument->createSheet();
            $newsheet->setTitle($tabName);

            // Specific headers depending the requested sheet
            switch ($tabName) {
                case 'Pay elements check':
                    $this->lastPayElementsRow = 1;
                    $newsheet->setCellValueByColumnAndRow(1, $this->lastPayElementsRow, 'Empno');
                    $newsheet->setCellValueByColumnAndRow(2, $this->lastPayElementsRow, 'First name');
                    $newsheet->setCellValueByColumnAndRow(3, $this->lastPayElementsRow, 'Last name');
                    $newsheet->setCellValueByColumnAndRow(4, $this->lastPayElementsRow, 'Pay element');
                    $newsheet->setCellValueByColumnAndRow(5, $this->lastPayElementsRow, 'Message');
                    $newsheet->setCellValueByColumnAndRow(6, $this->lastPayElementsRow, 'Pay element value');
                    $this->lastPayElementsRow++;

                    break;
                case 'DD Check':
                    $this->lastDemographicDataRow = 1;
                    $newsheet->setCellValueByColumnAndRow(1, $this->lastDemographicDataRow, 'Empno');
                    $newsheet->setCellValueByColumnAndRow(2, $this->lastDemographicDataRow, 'First name');
                    $newsheet->setCellValueByColumnAndRow(3, $this->lastDemographicDataRow, 'Last name');
                    $newsheet->setCellValueByColumnAndRow(4, $this->lastDemographicDataRow, 'Demographic data column');
                    $newsheet->setCellValueByColumnAndRow(5, $this->lastDemographicDataRow, 'Message');
                    $newsheet->setCellValueByColumnAndRow(6, $this->lastDemographicDataRow, 'Demographic data value');
                    $newsheet->setCellValueByColumnAndRow(7, $this->lastDemographicDataRow, 'Oracle error');
                    $this->lastDemographicDataRow++;
                default:
                    # code...
                    break;
            }

            return $newsheet;
        }
    }

    /**
     * Write the excel sheet in the arcive folder
     * @return [type] [description]
     */
    public function saveXls()
    {
        if (!$this->xlsDocument) {
            return;
        }

        if (!is_dir($this->archiveFolder)) {
            if (!mkdir($this->archiveFolder, 0755, true)) {
                throw new \Exception(sprintf("Unable to create the '%s' folder", $this->archiveFolder));
            }
        }

        $subfolder = date("Y/m/d/");

        if (!is_dir($this->archiveFolder . "/" . $subfolder)) {
            if (!mkdir($this->archiveFolder . "/" . $subfolder, 0755, true)) {
                throw new \Exception(sprintf("Unable to create the '%s' folder", $this->archiveFolder . "/" . $subfolder));
            }
        }

        $filename = $subfolder . uniqid() . ".xls";

        $writer = new Xlsx($this->xlsDocument);
        $writer->save($this->archiveFolder . "/" . $filename);
        chmod($this->archiveFolder . "/" . $filename, 0755);
        chown($this->archiveFolder . "/" . $filename, "apache");
        chgrp($this->archiveFolder . "/" . $filename, "apache");
        $this->testerLogger->setXls($filename);
    }

    /**
     * Run the test of the pay element file
     * @param  string $file Target of the file
     * @return null
     * @throws \Exception If the pay element file does not exist
     */
    public function testPayElementsFile($file)
    {
        if (!is_file($file)) {
            throw new \Exception("The pay elements file does not exist");
        }
        $this->testerLogger->addLine("Starting to test pay elements file");

        $previousEmpno = "nope";
        $first = true;
        if (($handle = fopen($file, "r")) !== false) {
            while (($data = fgetcsv($handle, 100000, ",")) !== false) {
                // Parse each CSV line
                if (!preg_match("/[0-9]+/", $data[0])) {
                    continue;
                }

                if (count($data) < 10) {
                    throw new \Exception("The pay elements csv file is not correct");
                }

                // Set variable from the different fixed columns
                $empno = ($data[0]);
                $lastname = ($data[1]);
                $firstname = ($data[2]);
                $payElementName = ($data[3]);
                $payElementValue = ($data[9]);

                if ($previousEmpno != $empno) {
                    // The pay element is used by block. If current empno different of precedent one. we assume that the previous user data has already been seet.
                    if ($previousEmpno != "nope") {
                        $this->showPayElementsError($tester);
                    }

                    $this->testerLogger->addLine("Testing pay elements for " . $empno);
                    $tester = new PayElementTester($this->entityManager, $empno, $firstname, $lastname);
                }

                $OTPExportData = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpExportData")->findBy(array("empno" => $empno));
                $CurrentMonth = ltrim(date("m"), '0');
                $CurrentYear = date('y');
                if (strlen($empno) < 6) {
                    $diff = 6 - strlen($empno);
                    for ($x = 1; $x <= $diff; $x++) {
                        $empno = "0" . $empno;
                    }
                }

                foreach ($OTPExportData as $currentData) {
                    $batchDate = $currentData->getBatchDate();
                    $date = date_parse_from_format("Y-m-d", $batchDate);
                    $batchMonth = ltrim($date["month"], '0');
                    $batchYear =  substr($date["year"], 2);
                    if (strlen($currentData->getempno()) < 6) {
                        $diff = 6 - strlen($currentData->getempno());
                        for ($x = 1; $x <= $diff; $x++) {
                            $currentData->setempno("0" . $currentData->getempno());
                        }
                    }
                    if ($batchYear == $CurrentYear && $batchMonth == $CurrentMonth && $currentData->getempno() == $empno) {
                        if ((trim($currentData->getPaymentPlan()) == "ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_TAXABLE" && trim($payElementName) == "Sector Related Backpay")
                            || (trim($currentData->getPaymentPlan()) == "ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_NON_TAXABLE" && trim($payElementName) == "Sector Related Backpay non-tax")
                            || (trim($currentData->getPaymentPlan()) == "ONE-TIME_PAYMENT_AMOUNT_PLAN_SHORT_NOTICE_CHANGE" && trim($payElementName) == "Short Notice Disruption")
                        ) {
                            if ($currentData->getAmount() != $payElementValue) {
                                $tester->addError("Value in EJINT96 file is " . $payElementValue . " and value in  Claim table is " . $currentData->getAmount() . " Please check difference.", $payElementName, $payElementValue);
                            }
                        }
                    }
                }

                // Test the pay element
                $tester->testPayElement($payElementName, $payElementValue);
                $previousEmpno = $empno;
                $first = false;
            }

            if ($tester) {
                $this->showPayElementsError($tester);
            }

            fclose($handle);
        }

        // Get or create the pay elements check
        $sheet = $this->getXlsSheet("Pay elements check");
        foreach (range('A', 'F') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }

        // Format the result
        $sheet->getStyle('A1:F1')->applyFromArray(
            array(
                'fill' => array(
                    'fillType' => Fill::FILL_SOLID,
                    'color' => array('rgb' => 'FF6600')
                ),
                'borders' => array(
                    'allBorders' => array(
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => array('rgb' => 'FF6600')
                    )
                )
            )
        );
        $sheet->getStyle('A2:F' . $this->lastPayElementsRow)->applyFromArray(
            array(
                'borders' => array(
                    'allBorders' => array(
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => array('rgb' => 'FF6600')
                    )
                )
            )
        );
    }
}
