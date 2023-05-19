<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Entity\HrisEjint096DataCheck;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DataAnalyzerController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_EJINT096_DATA_CHECK_LOGS";
    /**
     * @Route("/data-analyzer/index", name="data_analyzer_logs_index")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        $now = new \DateTime();
        return $this->render('@EasyjetHris/DataAnalyzer/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "logTo" => $request->query->get('logTo', $now->format("d/m/Y")),
            "logFrom" => $request->query->get('logFrom', $now->modify("-1 month")->format("d/m/Y")),
        ]);
    }

    /**
     * @Route("/data-analyzer/search", name="data_analyzer_logs_search")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function searchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096DataCheck")->logsDatatableResults(
            $request
        );

        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/data-analyzer/view/{dataCheck}", name="data_analyzer_view")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function dataCheckViewAction(HrisEjint096DataCheck $dataCheck) {
        return $this->render('@EasyjetHris/DataAnalyzer/dataCheckView.html.twig', [
            "dataCheck" => $dataCheck,
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/data-analyzer/xls/download/{dataCheck}", name="data_analyzer_xls_dl")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function dlXsAction(HrisEjint096DataCheck $dataCheck) {
        return new Response($dataCheck->getXlsContent($this->container->get('parameter_bag')->get('hris.ejint096_archive_folder') . "/data-check"), 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="report.xlsx"'
        ));
    }

    /**
     * @Route("/data-analyzer/xls/download-last", name="data_analyzer_xls_last_dl")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function dlLastXsAction() {
        $dataCheck = $this->getDoctrine()->getEntityManager()->getRepository("EasyjetHrisBundle:HrisEjint096DataCheck")->findOneBy(
            array(),
            array('id' => 'DESC')
        );
        return new Response($dataCheck->getXlsContent($this->container->getParameter('hris.ejint096_archive_folder') . "/data-analyzer"), 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="report.xlsx"'
        ));
    }

}
