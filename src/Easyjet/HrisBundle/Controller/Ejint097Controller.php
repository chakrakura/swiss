<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Entity\HrisEjint097Log;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class Ejint097Controller extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_EJINT097_LOGS";
    /**
     * @Route("/EJINT097/logs/index", name="ejint097_logs_index")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        $now = new \DateTime();
        return $this->render('@EasyjetHris/Ejint097/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "logTo" => $request->query->get('logTo', $now->format("d/m/Y")),
            "logFrom" => $request->query->get('logFrom', $now->modify("-1 month")->format("d/m/Y")),
        ]);
    }

    /**
     * @Route("/EJINT097/logs/search", name="ejint097_logs_search")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function searchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();        
        
        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint097Log")->logsDatatableResults(
            $request
        );
        
        $response = new Response(
            $jsonYourselfList
        );
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }

    /**
     * @Route("/EJINT097/logs/view/{log}", name="ejint097_logs_view")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function logViewAction(HrisEjint097Log $log) {
        return $this->render('@EasyjetHris/Ejint097/logView.html.twig', [
            "log" => $log,
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }
    

    
}
