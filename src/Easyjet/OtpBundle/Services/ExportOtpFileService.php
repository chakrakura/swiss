<?php

namespace App\Easyjet\OtpBundle\Services;

use App\Easyjet\OtpBundle\Entity\OtpImportBatch;
use App\Easyjet\OtpBundle\Entity\ExportLog;
use App\Easyjet\SwissinsideCoreBundle\Classes\Smb;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
* ExportOtpFileService
*/

class ExportOtpFileService
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
    */
    private $entityManager;
    
    /**
     * Mailer Interface
     * @var MailerInterface $mailer Entity manager
    */
    private $mailer;
    private $exportfolder;
    private $xlsDocument;
    private $batch;
    private $parameterBag;
    private $archiveFolder;
    private $pttEmailAddress;
    private $adjustmentIds = array();
    private $disruptionsId = array();
    private $log;
    private $usersBonuses = array();

	public function __construct(MailerInterface $mailer, \Doctrine\ORM\EntityManagerInterface $entityManager, ParameterBagInterface $parameterBag)
	{
        $this->parameterBag  = $parameterBag;
        $this->entityManager = $entityManager;
        $this->mailer = $mailer;
        $this->archiveFolder = $this->parameterBag->get('otp.archive_folder');
        $this->exportfolder  = $this->parameterBag->get('otp.export_folder');
        $this->pttEmailAddress = $this->parameterBag->get('otp.ptt_email_address');
           
	}

    public function sendExportSuccessEmail()
    {
        $email = (new TemplatedEmail())
            ->subject("Sector correction and disruption EIB file has been sent.")
            ->to($this->pttEmailAddress)
            ->htmlTemplate('@EasyjetOtp/Mails/otpExportSuccess.html.twig')
            ->context(array());
        
        $this->mailer->send($email);
    
    }

    public function getUserBonuses() {
        return $this->usersBonuses;
    }
    
    public function getBatchDate() {
        return $this->batch->getEffectiveDate();
    }
    
    public function getFilename() {
        return "OTP_Switzerland_" . $this->batch->getEffectiveDate()->format("M_Y_") . date("ymdHis") . ".xlsx";
    }

    public function download() {
        
        $writer = new Xlsx($this->xlsDocument);
        ob_start();
        $writer->save('php://output');
        return ob_get_clean();
    }

    public function sendToShare() {  
      
        if (!Smb::is_folder($this->exportfolder)) {
          throw new \Exception("The export folder does not exist. Please try again in a few minutes or contact an administrator to check the issue");
        }
      
        if (!is_dir($this->archiveFolder)) {
            throw new \Exception("The archive folder does not exist. Please try again in a few minutes or contact an administrator to check the issue");
        }       
       
        $writer =  new Xlsx($this->xlsDocument);
        $exportFile = $this->getFilename();
        $filename = $this->exportfolder . '/' . $exportFile;
       
        $tmpFile = $this->archiveFolder . "/" . $exportFile;
        $writer->save($tmpFile);
       
        Smb::copyToSamba($tmpFile, $filename);

        if (!Smb::is_file($filename)) {
          throw new \Exception("Unable to create the file");
        }
     
        $currentProcessingCalendar = $this->entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisProcessingCalendar")->findCurrent();
        $currentProcessingCalendar->setEjint201ClaimsExportSatisfied(new \DateTime);

        $this->entityManager->persist($currentProcessingCalendar);
        $this->entityManager->flush();
      
        try {
            $this->sendExportSuccessEmail();
        } catch(\Exception $e) {
           throw new \Exception("The file has been placed on the folder but the following error happened : " . $e->getMessage());
        }

        return $exportFile;
    }

    public function setExported() {
        foreach ($this->disruptionsId as $currentDisruptionId) {
            $disruption = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpDisruption")->find($currentDisruptionId);
            $disruption->setExportedIn($this->log)->setExportedAt(new \DateTime);
            $this->entityManager->persist($disruption);
        }

        $this->entityManager->flush();

        foreach ($this->adjustmentIds as $currentRowId) {
            $row = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest")->find($currentRowId);
            $row->setExportedIn($this->log)->setExportedAt(new \DateTime);
            $this->entityManager->persist($row);
        }

        $this->batch->setExportedAt(new \DateTime);

        $this->entityManager->persist($this->batch);
        $this->entityManager->flush();
    }

    public function startExport(OtpImportBatch $batch, ExportLog $log) {
        
        $this->batch = $batch;
        $this->log = $log;
        
        $log->addLog("INFO", "Starting export");

        $file = __DIR__ . "/../Resources/xlsExport/export_format.xlsx";
       
        if (!is_file($file)) {
            throw new \Exception(sprintf("Unable to find the '%s' template file", $file));
        }

        $inputFileType = IOFactory::identify($file);
        $objReader = IOFactory::createReader($inputFileType);
        $this->xlsDocument = $objReader->load($file);
      

        if (!$this->xlsDocument) {
            throw new \Exception("Unable to parse input xls file");
        }

        $sheet = $this->xlsDocument->getSheetByName('Request One Time Payment');

        if (!$sheet) {
            throw new \Exception("The 'Request One Time Payment' sheet is not found through your excel sheet. Import cancelled");
        }
    
        $sheet->getStyle('A1:F' . (count($batch->getRows())+1) * 2)->applyFromArray(
            array(
                'borders' => array(
                    'allBorders' => array(
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => array('rgb' => '000000')
                    )
                )
            )
        );
      
        $log->addLog("INFO", "Exporting selected batch data");
        $this->_startExport($batch, $log, $sheet);
    }

    private function _startExport(OtpImportBatch $globalBatch, ExportLog $log, $sheet) {
        
        // Manage pending sector adjustments
        $adjustments = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest")->getAdjustmentClaimsToBeExported();
       
        $bonus = array(
            "sector_pay_taxable" => 0,
            "sector_pay_non_taxable" => 0,
            "disruption" => 0
        );
      

        foreach ($adjustments as $currentAdjustment) {
            $batch = $currentAdjustment->getRow()->getBatch();
            $payRank = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\SectorPay")->getPayranks($batch->getEffectiveDate());
            $factorisations = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\Factorisations")->getFactoriations($batch->getEffectiveDate());
            if (!$factorisations) {
                throw new \Exception("Unable to retrieve the factorisations");            
            }
            $currentRow = $currentAdjustment->getRow();
            

            $this->adjustmentIds[] = $currentAdjustment->getId();
            $log->addLog("INFO", "Parsing sector adjustments for employee (cvp month " . $batch->getCvpMonth()->format("M D") . ") :" . $currentRow->getEmpno());

            $nonTaxable = 
                $currentAdjustment->getSectN()  * $factorisations->getNVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['taxable'] +
                $currentAdjustment->getSectS()  * $factorisations->getSVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['taxable'] +
                $currentAdjustment->getSectM()  * $factorisations->getMVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['taxable'] +
                $currentAdjustment->getSectL()  * $factorisations->getLVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['taxable'] +
                $currentAdjustment->getSectXL() * $factorisations->getXlVal() * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['taxable'];

            $taxable = 
                $currentAdjustment->getSectN()  * $factorisations->getNVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['non_taxable'] +
                $currentAdjustment->getSectS()  * $factorisations->getSVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['non_taxable'] +
                $currentAdjustment->getSectM()  * $factorisations->getMVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['non_taxable'] +
                $currentAdjustment->getSectL()  * $factorisations->getLVal()  * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['non_taxable'] +
                $currentAdjustment->getSectXL() * $factorisations->getXlVal() * $payRank[strtoupper($currentRow->getTypeEftr()->getType())]['non_taxable'];

            $taxable += $currentAdjustment->getSectManualTaxedChf();
            $nonTaxable += $currentAdjustment->getSectManualNotTaxedChf();

            if (!isset($this->usersBonuses[$currentRow->getEmpno()])) {
                $this->usersBonuses[$currentRow->getEmpno()] = $bonus;
            }

            $this->usersBonuses[$currentRow->getEmpno()]['sector_pay_taxable'] += $taxable;
            $this->usersBonuses[$currentRow->getEmpno()]['sector_pay_non_taxable'] += $nonTaxable;


        }
      

        $disruptions = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpDisruption")->getDisruptionsToBeExported();
       
        foreach ($disruptions as $currentDisruption) {
            $batch = $currentDisruption->getRow()->getBatch();
            $currentRow = $currentDisruption->getRow();
            $disruptionsAmount = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\Disruptions")->getDisruptionAmounts($batch->getEffectiveDate());
            if (!$disruptionsAmount) {
                throw new \Exception("Unable to retrieve the disruptions");            
            }
            $isPilot =  $currentRow->getTypeEftr()->getEmployeeType() == "3";

            $log->addLog("INFO", "Managing a disiruption (empno : " . $currentRow->getEmpno() . ", cvp month " . $batch->getCvpMonth()->format("M D") . ") :" . $currentRow->getEmpno());
            $this->disruptionsId[] = $currentDisruption->getId();

            if (!isset($this->usersBonuses[$currentRow->getEmpno()])) {
                $this->usersBonuses[$currentRow->getEmpno()] = $bonus;
            }

            $this->usersBonuses[$currentRow->getEmpno()]['disruption'] += ($isPilot ? $disruptionsAmount->getMontantPilot() : $disruptionsAmount->getMontantPilot());
        }

        $row = 2;
    
        $date = $globalBatch->getEffectiveDate()->format("Y-m-d");
        
        foreach ($this->usersBonuses as $empno => $currentUser) {

            $taxable = $currentUser['sector_pay_taxable'];
            $nonTaxable = $currentUser['sector_pay_non_taxable'];
            $totalDisruption = $currentUser['disruption'];

            if ($taxable != 0 || $nonTaxable != 0) {
                $sheet->setCellValueExplicit('A' . $row, $row -1, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('B' . $row, $empno, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('C' . $row, $date, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('D' . $row, 'ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_TAXABLE', DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('E' . $row, number_format($taxable, 2, '.', ''), DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('F' . $row, "CHF", DataType::TYPE_STRING);

                $row++;

                $sheet->setCellValueExplicit('A' . $row, $row -1, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('B' . $row, $empno, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('C' . $row, $date, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('D' . $row, 'ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_NON_TAXABLE', DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('E' . $row, number_format($nonTaxable, 2, '.', ''), DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('F' . $row, "CHF", DataType::TYPE_STRING);

                $row++;
            }

            if ($totalDisruption != 0) {
                $sheet->setCellValueExplicit('A' . $row, $row -1, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('B' . $row, $empno, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('C' . $row, $date, DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('D' . $row, 'ONE-TIME_PAYMENT_AMOUNT_PLAN_SHORT_NOTICE_CHANGE', DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('E' . $row, number_format($totalDisruption, 2, '.', ''), DataType::TYPE_STRING);
                $sheet->setCellValueExplicit('F' . $row, "CHF", DataType::TYPE_STRING);

                $row++;
            }
            
            
        }     
    }
}