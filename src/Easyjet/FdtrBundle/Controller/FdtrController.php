<?php

namespace App\Easyjet\FdtrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\FdtrBundle\Form\ExternalDutyForm;
use App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport;
use App\Easyjet\FdtrBundle\Entity\FdtrExternalDtimeBreakup;



class FdtrController extends AbstractController
{
    const SIDEBAR_ITEM = "FDTR";

    /**
     * @Route("/index", name="fdtr_list_index")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     */
    public function index(Request $request): Response
    {
        if (!$this->getParameter("fdtr.external_dtime_folder")) {
            $this->get('session')->getFlashBag()->add(
                'error',
                "The fdtr.external_dtime_folder parameter is not setup in the config.yml file"
            );
        } elseif (!is_dir($this->getParameter("fdtr.external_dtime_folder"))) {
            try {
                mkdir($this->getParameter("fdtr.external_dtime_folder"));
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    "Unable to create folder '" . $this->getParameter("fdtr.external_dtime_folder") . "'"
                );
            }
        }
        $thisMonth = \DateTime::createFromFormat("Y-m-d", date("Y-m-") . "01");
        $previousMonth = $thisMonth->modify("-1 month");

        $statusList = array(
            "nofill" => "Not filled",
            "pending" => "Pending",
            "validated" => "Validated",
            "rejected" => "Rejected",
        );

        $currentStatus = $request->query->get('fdtrStatus');

        if (!$currentStatus) {
            $currentStatus[] = 'nofill';
            $currentStatus[] = 'pending';
            $currentStatus[] = 'validated';
            $currentStatus[] = 'rejected';
        }

        return $this->render('@EasyjetFdtr/Fdtr/index.html.twig', [
            "fdtrUser" => $request->query->get('fdtrUser', ''),
            "fdtrFrom" => $request->query->get('fdtrFrom', $previousMonth->format("d/m/Y")),
            "fdtrTo" => $request->query->get('fdtrTo', $previousMonth->format("t/m/Y")),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "statusList" => $statusList,
            "selectedStatus" => $currentStatus,
            "noExternalDutyHrs" => $request->query->get('noExternalDutyHrs', ''),
        ]);
    }

    /**
     * @Route("/fdtr/search", name="fdtr_list_search")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jsonYourselfList = $em->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->monthlyFdtrDatatableResults(
            $request,
            $this->get('security.authorization_checker')->isGranted('ROLE_FDTR_ADMIN'),
            $this->getUser()->getId()
        );

        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/fdtr/csv", name="fdtr_generate_csv")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     */
    public function getCsvAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $jsonYourselfList = $em->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->monthlyFdtrCsvResults(
            $request,
            $this->get('security.authorization_checker')->isGranted('ROLE_FDTR_ADMIN'),
            $this->getUser()->getId()
        );
        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename=report.csv');

        return $response;
    }

    /**
     * @Route("/fdtr/external-duty/{monthlyReport}", name="fdtr_external_duty")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     *
     */
    public function externalDutyAction(FdtrMonthlyReport $monthlyReport, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $isAdmin =  $this->get('security.authorization_checker')->isGranted('ROLE_FDTR_ADMIN');
        $externalDutyTime = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrExternalDtime')->findOrCreate($monthlyReport);
        $externalDutyTimeBreakup = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport')->find($monthlyReport->getId());
        $externalDutyTimeBreakupList = $externalDutyTimeBreakup->getExternalDtimeBreakup();

        if (!$isAdmin && $this->getUser()->getId() != $monthlyReport->getFdtrUser()->getIdUser()) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You have no access to this resource'
            );
            return $this->redirect($this->generateUrl("fdtr_list_index"));
        }

        $form = $this->createForm(ExternalDutyForm::class, $externalDutyTime, ['isAdmin' => $isAdmin]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $externalDutyTime->upload($this->getParameter("fdtr.external_dtime_folder"));
                if ($request->get('validate')) {
                    $externalDutyTime->setStatus('validated');
                }
                $em->persist($externalDutyTime);
                $em->flush();

                $concernedDateArr = $request->get("concernedDate");
                $startTimeArr = $request->get("startTime");
                $endTimeArr = $request->get("endTime");

                /*** Saving external duty breakup ***/
                if (count(array_filter($concernedDateArr)) > 0) {
                    $i = 0;
                    foreach ($concernedDateArr as $key => $value) {
                        $date = new \DateTime($concernedDateArr[$i]);
                        $stime = new \DateTime($startTimeArr[$i]);
                        $etime = new \DateTime($endTimeArr[$i]);

                        if (!empty($externalDutyTimeBreakupList)) {
                            $externalDutyTimeBreakup = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport')->find($monthlyReport->getId());
                            $externalDutyTimeBreakup->removeExternalDtimeBreakup();
                            $em->flush();
                        }
                        $externalDtimeBreakup = new FdtrExternalDtimeBreakup();

                        $externalDtimeBreakup->setFdtrMonthlyReportId($monthlyReport);
                        $externalDtimeBreakup->setConcernedDate($date);
                        $externalDtimeBreakup->setStartTime($stime);
                        $externalDtimeBreakup->setEndTime($etime);
                        $em->persist($externalDtimeBreakup);
                        $i++;
                    }
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The external duty have been saved successfully'
                );
                return $this->redirect($this->generateUrl("fdtr_list_index"));
            }
        }

        return $this->render('@EasyjetFdtr/Fdtr/externalDuty.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "monthlyReport" => $monthlyReport,
            "externalDutyTime" => $externalDutyTime,
            "externalDtimeBreakup" => $externalDutyTimeBreakupList
        ]);
    }

    /**
     * @Route("/fdtr/external-duty/{monthlyReport}/attachment", name="fdtr_dtime_download_attachment")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     * 
     */
    public function downloadAttachmentAction(FdtrMonthlyReport $monthlyReport)
    {
        $em = $this->getDoctrine()->getManager();
        $isAdmin =  $this->get('security.authorization_checker')->isGranted('ROLE_FDTR_ADMIN');
        $externalDutyTime = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrExternalDtime')->find($monthlyReport->getId());

        if (!$externalDutyTime || (!$isAdmin && $this->getUser()->getId() != $monthlyReport->getFdtrUser()->getIdUser())) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You have no access to this resource'
            );
            return $this->redirect($this->generateUrl("fdtr_list_index"));
        } else {
            // Generate response

            $filename = $this->getParameter("fdtr.external_dtime_folder") . "/" . $externalDutyTime->getFileTarget();

            if (!is_file($filename) || !is_readable($filename)) {
                throw $this->createNotFoundException('File not found');
            }

            $response = new Response();

            // Set headers
            $response->headers->set('Cache-Control', 'private');
            $response->headers->set('Content-type', mime_content_type($filename));
            $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($filename) . '";');
            $response->headers->set('Content-length', filesize($filename));

            // Send headers before outputting anything
            $response->sendHeaders();

            $response->setContent(readfile($filename));
        }
    }

    /**
     * @Route("/fdtr/view/{report}", name="fdtr_monthly_report_view")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     * 
     */
    public function viewAction(FdtrMonthlyReport $report)
    {

        // Don't allow non admin user to watch others employees's fdtr sheet
        if ($this->get('security.context')->isGranted('ROLE_FDTR_ADMIN') === false) {
            if ($report->getFdtrUser()->getIdUser() != $this->getUser()->getId()) {
                throw $this->createNotFoundException('Fdtr report not found');
            }
        }

        return array(
            "report" => $report,
            "selectedSidebar" => self::SIDEBAR_ITEM
        );
    }

    /**
     * @Route("/fdtr/no-external-duty/", name="no_external_duty")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     */
    public function noExternalDutyAction(Request $request)
    {
        $monthlyReportId = $request->get("monthly-report-id");
        $em = $this->getDoctrine()->getManager();
        $monthlyReport = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport')->find($monthlyReportId);
        $externalDtime = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrExternalDtime')->findOrCreate($monthlyReport);
        $externalDtime->setComment('No external duty');
        $externalDtime->setStatus('');
        $em->persist($externalDtime);

        $externalDtimeReason = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrExternalDtimeReason')->find(1);
        $externalDtime->setReason($externalDtimeReason);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'No external duty has been saved successfully'
        );

        return $this->redirect($this->generateUrl("fdtr_list_index"));
    }
}
