<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Easyjet\OtpBundle\Form\RequestsSearchForm;
use App\Easyjet\OtpBundle\Entity\OtpRequest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Services\FixRequestAssignation;

class OtpRequestController extends AbstractController
{
    const REMOVE_INTENTION = "REMOVE_EXPENSE";
    const SIDEBAR_ITEM = "OTP_REQUEST";


    /**
     * @Route("/requests/index", name="otp_request_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function indexAction(Request $request, FixRequestAssignation $fixRequestAssignation)
    {
       
        $isAdmin = $this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN');

        $csrfToken  = $this->get('security.csrf.token_manager')->getToken(self::REMOVE_INTENTION)->getValue();

        $url = $this->generateUrl("otp_request_index");
        $from = $request->query->get('effectiveDateFrom', "01" . date("/m/Y"));
        $to = $request->query->get('effectiveDateTo', date("t/m/Y"));
        $disruptionInProgress = $request->query->get('disruptionInProgress', "all");
        $hasPendingSectorAdjustment = $request->query->get('hasPendingSectorAdjustment', "all");
        $url .= "?effectiveDateFrom=" . $from . "&effectiveDateTo=" . $to . "&disruptionInProgress=" . $disruptionInProgress  . "&hasPendingSectorAdjustment=" . $hasPendingSectorAdjustment;

        $this->get('request_stack')->getSession()->set("OtpListUrl", $url);
        $fixRequestAssignation->fix();
        $otpRequest = new OtpRequest();
        $form = $this->createForm(RequestsSearchForm::class, $otpRequest, ['isAdmin' => $isAdmin]);
        $form->handleRequest($request);

        return $this->render('@EasyjetOtp/OtpRequest/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "effectiveDateFrom" => $from,
            "effectiveDateTo" =>  $to,
            "form" => $form->createView(),
            "disruptionInProgress" => $disruptionInProgress,
            "hasPendingSectorAdjustment" => $hasPendingSectorAdjustment,
            "csrfToken" => $csrfToken,
            "isAdmin" => $isAdmin
        ]);
    }

    /**
     * @Route("/requests/search", name="otp_request_search")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        $jsonYourselfList = $em->getRepository("App\Easyjet\OtpBundle\Entity\OtpRequest")->otpDatatableResults(
            $request,
            $this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN'),
            $myself
        );

        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
