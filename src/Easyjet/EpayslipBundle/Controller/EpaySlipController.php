<?php

namespace App\Easyjet\EpayslipBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class EpaySlipController extends AbstractController
{
    const SIDEBAR_ITEM = "EPAYSLIP";

    /**
     * @Route("/index", name="epayslip_index")
     * @Security("is_granted('ROLE_EPAYSLIP_ADMIN') or is_granted('ROLE_EPAYSLIP_SIMPLE_USER')") 
     */
    public function index(Request $request): Response
    {
        
        return $this->render('@EasyjetEpayslip/Epayslip/list.html.twig', [
            'epaySlipUser' => $request->query->get('epaySlipUser', ''),
            'epaySlipFrom' => $request->query->get('epaySlipFrom', '01/09/2016'),
            'epaySlipTo' => $request->query->get('epaySlipTo', '30/09/2016'),
            'selectedSidebar' => self::SIDEBAR_ITEM,
        ]);
    }

    /**
     * @Route("/search", name="epayslip_list_search")
     * @Security("is_granted('ROLE_EPAYSLIP_ADMIN') or is_granted('ROLE_EPAYSLIP_SIMPLE_USER')")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository("App\Easyjet\EpayslipBundle\Entity\Payslip")->ePayslipDatatableResults(
            $request,
            $this->get('security.authorization_checker')->isGranted('ROLE_EPAYSLIP_ADMIN'),
            $this->getUser()->getId()
        );
        $response = new Response(
            $result
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/cc-report/{cCReportId}", name="epayslip_cc_report")
     * @Security("is_granted('ROLE_EPAYSLIP_ADMIN') or is_granted('ROLE_EPAYSLIP_SIMPLE_USER')")
     */
    public function getCcReportPdf($cCReportId)
    {

        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository("App\Easyjet\EpayslipBundle\Entity\Payslip")->getCcReportPayslipPdf(
            $this->get('security.authorization_checker')->isGranted('ROLE_EPAYSLIP_ADMIN'),
            $cCReportId,
            $this->getUser()->getId()
        );

        return new Response($result, 200, array(
            'Content-Type' => 'application/pdf'
        ));
    }


    /**
     * @Route("/payslip-report/{paySlipId}", name="epayslip_report")
     * @Security("is_granted('ROLE_EPAYSLIP_ADMIN') or is_granted('ROLE_EPAYSLIP_SIMPLE_USER')")
     */
    public function getEpayslipReportPdf($paySlipId)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository("App\Easyjet\EpayslipBundle\Entity\Payslip")->getEpayslipReportPdf(
            $paySlipId,
            $this->get('security.authorization_checker')->isGranted('ROLE_EPAYSLIP_ADMIN'),
            $this->getUser()->getId()
        );

        return new Response($result, 200, array(
            'Content-Type' => 'application/pdf'
        ));
    }
}
