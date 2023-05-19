<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Form\ExportOtpFileForm;
use App\Easyjet\OtpBundle\Entity\ExportLog;
use App\Easyjet\OtpBundle\Entity\OtpExportData;
use App\Easyjet\OtpBundle\Services\ExportOtpFileService;

class OtpExportController extends AbstractController
{
    const SIDEBAR_ITEM = "EXPORT_OTP";


    /**
     * @Route("/export", name="otp_export_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function indexAction(Request $request, ExportOtpFileService $xlsExporter)
    {
        $em = $this->getDoctrine()->getManager();

        try {
            $form = $this->createForm(ExportOtpFileForm::class);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {

                    $formData = $form->getData();

                    $batch = $formData['batch'];

                    if (!$batch) {
                        throw new \Exception("Please select the month you want to export before to start the process");
                    }

                    $myself = $this->getDoctrine()->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
                 
                    $log = new ExportLog($myself, $batch);
                    $xlsExporter->startExport($batch, $log);


                    if (isset($_POST['preview'])) {
                        return new Response($xlsExporter->download(), 200, array(
                            'Content-Type' => 'application/force-download',
                            'Content-Disposition' => 'attachment; filename="' . $xlsExporter->getFilename() . '"'
                        ));
                    } else {
                      
                        $filename = $xlsExporter->sendToShare();

                        $em->beginTransaction();

                        $log->addLog("SUCCESS", sprintf("The file '%s' has been exported successfully. Please inform ESP/Swissinside team for putting the file to the share folder", $filename));
                        $log->setExcelFilename($filename);
                        $em->persist($log);

                        $xlsExporter->setExported();

                        $em->flush();
                        $em->commit();

                        $this->get('session')->getFlashBag()->add(
                            'success',
                            sprintf("The file '%s' has been shared to the share folder successfully.", $filename)
                        );
                        $this->saveExportData($xlsExporter->getBatchDate(), $xlsExporter->getUserBonuses());
                        return $this->redirect($this->generateUrl("otp_export_index"));
                    }
                }
            }
        } catch (\Exception $e) {
           
            $this->get('session')->getFlashBag()->add(
                'otp-export-error',
                $e->getMessage()
            );

            if (!isset($_POST['preview'])) {
                $log->setExcelFilename($xlsExporter->getFilename());
                $log->addLog("FAILED", $e->getMessage());
                $em->persist($log);
                $em->flush();
            }

            return $this->redirect($this->generateUrl("otp_export_index"));
        }

        return $this->render('@EasyjetOtp/OtpExport/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView()
        ]);
    }

    private function saveExportData($batch, $userData)
    {
        $date = $batch->format("Y-m-d");
        foreach ($userData as $empno => $currentUser) {
            $taxable = $currentUser['sector_pay_taxable'];
            $nonTaxable = $currentUser['sector_pay_non_taxable'];
            $totalDisruption = $currentUser['disruption'];

            try {
                $em = $this->getDoctrine()->getManager();
                $exportDataTaxable = new OtpExportData();
                $exportDataTaxable->setEmpno($empno)
                    ->setBatchDate($date)
                    ->setPaymentPlan('ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_TAXABLE')
                    ->setAmount(number_format($taxable, 2, '.', ''))
                    ->setCurrency('CHF');
                $em->persist($exportDataTaxable);

                $exportDataNonTaxable = new OtpExportData();
                $exportDataNonTaxable->setEmpno($empno)
                    ->setBatchDate($date)
                    ->setPaymentPlan('ONE-TIME_PAYMENT_AMOUNT_PLAN_SWITZERLAND_SECTORS_NON_TAXABLE')
                    ->setAmount(number_format($nonTaxable, 2, '.', ''))
                    ->setCurrency('CHF');
                $em->persist($exportDataNonTaxable);

                $exportDataNotice = new OtpExportData();
                $exportDataNotice->setEmpno($empno)
                    ->setBatchDate($date)
                    ->setPaymentPlan('ONE-TIME_PAYMENT_AMOUNT_PLAN_SHORT_NOTICE_CHANGE')
                    ->setAmount(number_format($totalDisruption, 2, '.', ''))
                    ->setCurrency('CHF');
                $em->persist($exportDataNotice);
                $em->flush();
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add(
                    'otp-export-error',
                    $e->getMessage()
                );
            }
        }
    }
}
