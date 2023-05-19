<?php

namespace App\Easyjet\WorkingSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\WorkingSheetBundle\Form\WorkingSheetSearchReportType;

class WorkingSheetReportingController extends AbstractController
{
    const SELECTED_SIDEBAR = "REPORTING";
    
    /**
     * @Route("/reporting/reporting", name="working_sheet_reporting")
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function reportingAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager(); 
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        $form = $this->createForm(WorkingSheetSearchReportType::class, null, array(
            'action' => $this->generateUrl('working_sheet_reporting'),
            'method' => 'GET',
        ));
        $form->handleRequest($request);
        if ($request->query->has('download')) {  
            $filename = "WorkingSheetReport-" . date("YmdHis");
            $content = $em->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork")->csvDownload(
                $form->get("dateFrom")->getViewData(),
                $form->get("dateTo")->getViewData(),
                $this->get('security.authorization_checker'),
                $myself
            );
            $response = new Response($content);
            $response->headers->set('Content-Type', 'text/csv');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s.csv"', $filename));
            return $response;
        }
        return $this->render('@EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig', [
            'selectedSidebar'  => self::SELECTED_SIDEBAR,
            'dateFrom' => $request->request->get('dateFrom'),
            'dateTo' => $request->request->get('dateTo'),
            'search_form' => $form->createView(),
            "reporting_rows" => $em->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork")->generateReporting(
                $form->get("dateFrom")->getViewData(),
                $form->get("dateTo")->getViewData(),               
                $this->get('security.authorization_checker'),
                $myself
            )
        ]); 
    }

}
