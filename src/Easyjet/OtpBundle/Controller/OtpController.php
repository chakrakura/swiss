<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Entity\OtpImportRow;
use App\Easyjet\OtpBundle\Form\OtpImportRowForm;
use App\Easyjet\OtpBundle\Form\OtpImportRowCommentForm;


class OtpController extends AbstractController
{
    const SIDEBAR_ITEM = "OTP";


    /**
     * @Route("/index", name="otp_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function indexAction(Request $request)
    {
        $url  = $this->generateUrl("otp_index");
        $from = $request->query->get('effectiveDateFrom', "01" . date("/m/Y"));

        $to = $request->query->get('effectiveDateTo', date("t/m/Y"));
        $disruptionInProgress = $request->query->get('disruptionInProgress', "all");
        $hasPendingSectorAdjustment = $request->query->get('hasPendingSectorAdjustment', "all");

        $url .= "?effectiveDateFrom=" . $from . "&effectiveDateTo=" . $to . "&disruptionInProgress=" . $disruptionInProgress  . "&hasPendingSectorAdjustment=" . $hasPendingSectorAdjustment;

        $this->get('request_stack')->getSession()->set("OtpListUrl", $url);

        return $this->render('@EasyjetOtp/Otp/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "effectiveDateFrom" => $from,
            "effectiveDateTo" => $to,
            "disruptionInProgress" => $disruptionInProgress,
            "hasPendingSectorAdjustment" => $hasPendingSectorAdjustment
        ]);
    }

    /**
     * @Route("/otp/search", name="otp_search")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $myself = $this->getDoctrine()->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        $jsonYourselfList = $em->getRepository("App\Easyjet\OtpBundle\Entity\OtpImportRow")->otpDatatableResults(
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


    /**
     * @Route("/sector/edit/{row}", name="otp_sector_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function editAction(OtpImportRow $row, Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        try {

            if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN') && ($myself->getLogUser() != $row->getEmpno() || $row->getBatch()->getPublished() == false)) {
                throw new \Exception("You don't have access to this resource");
            }


            $form = $this->createForm(OtpImportRowForm::class, $row);
            $form->handleRequest($request);


            if ($form->isSubmitted()) {

                if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN')) {
                    throw new \Exception("You don't have access to this form");
                }

                if ($form->isValid()) {
                    $em->persist($row);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The claim adjustment has been updated successfully'
                    );

                    if ($this->get('request_stack')->getSession()->get("OtpListUrl")) {
                        return $this->redirect($this->get('request_stack')->getSession()->get("OtpListUrl"));
                    } else {
                        return $this->redirect($this->generateUrl("otp_index"));
                    }
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            if ($this->get('request_stack')->getSession()->get("OtpListUrl")) {
                return $this->redirect($this->get('request_stack')->getSession()->get("OtpListUrl"));
            } else {
                return $this->redirect($this->generateUrl("otp_index"));
            }
        }

        return $this->render('@EasyjetOtp/Otp/sectorEdit.html.twig', [
            "form" => $form->createView(),
            "row" => $row,
            "claimsListUrl" => $this->get('request_stack')->getSession()->get("OtpListUrl"),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/disruption/edit/{row}", name="otp_disruption_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function disruptionEditAction(OtpImportRow $row, Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        try {

            if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN') && ($myself->getLogUser() != $row->getEmpno())) {
                throw new \Exception("You don't have access to this resource");
            }

            $form = $this->createForm(OtpImportRowCommentForm::class, $row);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {

                if (!$row) {
                    throw new \Exception("You have not access to this report!");
                }

                if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN')) {
                    throw new \Exception("You don't have access to this form");
                }
                // if ($form->isValid()) {

                $em->persist($row);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The claim adjustment has been updated successfully'
                );

                if ($this->get('request_stack')->getSession()->get("OtpListUrl")) {
                    return $this->redirect($this->get('request_stack')->getSession()->get("OtpListUrl"));
                } else {
                    return $this->redirect($this->generateUrl("otp_index"));
                }
                //}
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            if ($this->get('request_stack')->getSession()->get("OtpListUrl")) {
                return $this->redirect($this->get('request_stack')->getSession()->get("OtpListUrl"));
            } else {
                return $this->redirect($this->generateUrl("otp_index"));
            }
        }

        return $this->render('@EasyjetOtp/Otp/disruptionEdit.html.twig', [
            "form" => $form->createView(),
            "row" => $row,
            "claimsListUrl" => $this->get('request_stack')->getSession()->get("OtpListUrl"),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }
}
