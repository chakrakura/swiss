<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Entity\HrisEjint096Log;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class Ejint096Controller extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_EJINT096_LOGS";
    /**
     * @Route("/EJINT096/logs/index", name="ejint096_logs_index")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        $now = new \DateTime();
        return $this->render('@EasyjetHris/Ejint096/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "logTo" => $request->query->get('logTo', $now->format("d/m/Y")),
            "logFrom" => $request->query->get('logFrom', $now->modify("-1 month")->format("d/m/Y")),
        ]);
    }

    /**
     * @Route("/EJINT096/logs/search", name="ejint096_logs_search")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function searchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();        
        
        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096Log")->logsDatatableResults(
            $request
        );
        
        $response = new Response(
            $jsonYourselfList
        );
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }

    /**
     * @Route("/EJINT096/logs/view/{log}", name="ejint096_logs_view")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function logViewAction(HrisEjint096Log $log) {
        return $this->render('@EasyjetHris/Ejint096/logView.html.twig', [
            "log" => $log,
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }
    
    /**
     * @Route("/EJINT096/logs/pay-elements/download/{log}", name="ejint096_logs_pay_elements_dl")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function dlPayElementsAction(HrisEjint096Log $log) {
        return new Response($log->getPayElementsLog(), 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="export.csv"'
        ));
    }
    
}
