<?php

namespace App\Easyjet\OtpBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Entity\OtpRequest;
use App\Easyjet\OtpBundle\Entity\OtpDisruption;
use App\Easyjet\OtpBundle\Form\OtpNewDisruptionAdjForm;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;
use App\Easyjet\OtpBundle\Services\OtpMailerService;


class DisruptionClaimsRequestController extends AbstractController
{

    const REMOVE_INTENTION = "REMOVE_EXPENSE";
    const SIDEBAR_ITEM = "OTP_REQUEST";

    /**
     * @Route("otp-disruption-adj/new", name="otp_disruption_adj_new")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        $otpDisruption = new OtpDisruption();

        $form = $this->createForm(OtpNewDisruptionAdjForm::class,  $otpDisruption);
        $form->handleRequest($request);

        try {
            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $initialStartDate = $request->request->get('initial_start_date');
                    $initialStartTime = $request->request->get('initial_start_time');
                    $initialEndTime   = $request->request->get('initial_end_time');
                    $dateOfChange     = $request->request->get('date_of_change');
                    $timeOfChange     = $request->request->get('time_of_change');
                    $newStartDate     = $request->request->get('new_start_date');
                    $newStartTime     = $request->request->get('new_start_time');
                    $newEndTime       = $request->request->get('new_end_time');

                    // First we calculate the end dates (if end time less than start time, then the end date is the next day
                    if ($initialStartTime < $initialEndTime) {
                        $initialEndDate = $initialStartDate;
                    } else {
                        list($day, $month, $year) = explode("/",  $initialStartDate);
                        $time = mktime(0, 0, 0, $month, $day + 1, $year);
                        $initialEndDate = date("d/m/Y", $time);
                    }


                    $initialStart = \DateTime::createFromFormat("d/m/Y H:i:s", $initialStartDate . " " . $initialStartTime . ":00");
                    $initialEnd   = \DateTime::createFromFormat("d/m/Y H:i:s", $initialEndDate . " " . $initialEndTime . ":00");
                    $newStart     = \DateTime::createFromFormat("d/m/Y H:i:s", $newStartDate . " " . $newStartTime . ":00");
                    $newEnd       = \DateTime::createFromFormat("d/m/Y H:i:s", $newStartDate . " " . $newEndTime . ":00");
                    $changeOfDate = \DateTime::createFromFormat("d/m/Y H:i:s", $dateOfChange . " " . $timeOfChange . ":00");

                    if ($newEnd < $newStart) {
                        $newEnd->add(new \DateInterval("P1D"));
                    }

                    // If the change request is made before 48 hours from the start of the roster, then an error is displayed...
                    $errorMessage = "Sorry but your claim does not meet the actual acceptance rules. Please review the rules \"addendum dated October 6th 2006 valid as from October 1st 2006 until September 30th 2007\". ";

                    if (TimeFormat::minutesInterval($initialStart, $changeOfDate) > 2880) {
                        throw new \Exception($errorMessage);
                    }


                    // If the roster does not start at least 2 hours before the initial roster, then we must see if it ends at least 2 hours after the end time of the initial roster
                    if (TimeFormat::minutesInterval($newStart, $initialStart) < 120) {
                        //If the new roster does not finish at least 2 hours after the initial then we refuse the request
                        if (TimeFormat::minutesInterval($newEnd, $initialEnd) < 120) {
                            throw new \Exception($errorMessage);
                        }
                    }
                    //If we get here, everything is ok and we can validate the request in the database...
                    $otpDisruption->setDate(\DateTime::createFromFormat("Y-m-d", date('Y-m-d')))
                        ->setInitialStart($initialStart)
                        ->setInitialEnd($initialEnd)
                        ->setNewStart($newStart)
                        ->setNewEnd($newEnd)
                        ->setState(0)
                        ->setDateOfChange($changeOfDate);

                    $em->persist($otpDisruption);
                    $em->flush();

                    $otpRequest  = new OtpRequest();

                    $otpRequest->setConcernedDate($otpDisruption->getInitialStart())
                        ->setConcernedUser($myself)
                        ->setType('disruption')
                        ->setDisruption($otpDisruption)
                        ->setStatus('pending')
                        ->setCreatedAt(\DateTime::createFromFormat("Y-m-d", date('Y-m-d')));

                    $em->persist($otpRequest);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your request has been transmitted to the RH.'
                    );
                    return $this->redirect($this->generateUrl("otp_request_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("otp_request_index"));
        }

        return $this->render('@EasyjetOtp/DisruptionClaimsRequest/new.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "title" => 'Adding a disruption claim',
            "form" => $form->createView(),
            "otpDisruption" => $otpDisruption,
            'isAdmin' => $this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN'),
        ]);
    }


    /**
     * @Route("otp-disruption-adj/edit/{disruption}", name="otp_disruption_adj_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function editAction(OtpDisruption $disruption, Request $request, OtpMailerService $otpMailerService)
    {
        $em = $this->getDoctrine()->getManager();
        $alertMultiple = $statusString =  $refuseReason = '';
        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        $row = $disruption->getRow();
        $disruptionRequest = $disruption->getRequest();
        $empno =  $row ?  $row->getEmpno() : $disruptionRequest->getConcernedUser()->getLogUser();
        $date =  $disruptionRequest->getConcernedDate()->format('Y-m-d');
        $otpDisruptionsCount = $em->getRepository("App\Easyjet\OtpBundle\Entity\OtpDisruption")->disruptionsCountByDate($empno, $date);

        if ($otpDisruptionsCount > 1) {
            $alertMultiple = $otpDisruptionsCount;
        }

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN')) {
            switch ($disruption->getState()) {
                case 0:
                    $statusString = "In progress...";
                    break;
                case 1:
                    $statusString = "Accepted";
                    break;
                case 2;
                    $statusString = "Refused";
                    $refuseReason = $disruption->getRefuseReason();
                    break;
            }
        }

        $form = $this->createForm(OtpNewDisruptionAdjForm::class,  $disruption);
        $form->handleRequest($request);

        try {
            if ($form->isSubmitted()) {
                if ($form->isValid()) {

                    if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN')) {
                        throw new \Exception("You must be an admin to edit the state of this disruption.");
                    }
                    $disruption->setState($request->request->get('etat'))
                        ->setRefuseReason($request->request->get('refuse_reason'))
                        ->setStatusChangedAt(\DateTime::createFromFormat("Y-m-d H:i:s", date('Y-m-d H:i:s')));
                    $em->persist($disruption);
                    $em->flush();

                    $status = "pending";
                    switch ((int)$request->request->get('etat')) {
                        case "2":
                            $status = "refused";
                            break;
                        case "1":
                            $status = "validated";
                            break;
                    }
                    $disruptionRequest = $disruption->getRequest();
                    $disruptionRequest->setStatus($status)
                        ->setDisruption($disruption);
                    $em->persist($disruptionRequest);
                    $em->flush();

                    if ($request->request->get('etat') == 2) {

                        $params = [
                            "user_firstname" => $row ? $row->getFirstname() : '',
                            "user_lastname" =>  $row ? $row->getLastname() : '',
                            "refuse_reason" => nl2br($request->request->get('refuse_reason')),
                            "submission_date" => TimeFormat::convertDateIntoFrance($disruption->getDate()->format('Y-m-d')),
                            "admin_user" => $myself->getPrenomUser() . " " . $myself->getNomUser()
                        ];

                        $otpMailerService->sendMail("Sorry, your disruption has been refused", $disruptionRequest->getConcernedUser()->getEmailUser(), '@EasyjetOtp/Mails/mailRefuseDisruption.html.twig', $params);
                    }

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your request has been transmitted to the RH.'
                    );
                    return $this->redirect($this->generateUrl("otp_request_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("otp_request_index"));
        }

        return $this->render('@EasyjetOtp/DisruptionClaimsRequest/edit.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "statusString" => $statusString,
            "refuseReason" => $refuseReason,
            "alertMultiple" => $alertMultiple,
            "otpDisruption" => $disruption,
            'isAdmin' => $this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN'),
        ]);
    }

    /**
     *
     * @Route("otp-sect-adj/delete/{disruption}", name="otp_disruption_adj_delete")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function deleteAction(OtpDisruption $disruption, Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $disruptionRequest = $disruption->getRequest();
            $em->remove($disruptionRequest);
            $em->flush();
            $em->remove($disruption);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                'The Disruption expense has been removed successfully'
            );
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("otp_request_index"));
        }

        return $this->redirect($this->generateUrl('otp_request_index'));
    }
}
