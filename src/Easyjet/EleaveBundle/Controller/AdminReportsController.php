<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class AdminReportsController extends AbstractController
{

    const SIDEBAR_ITEM = "ADMIN_REPORTS";

    /**
     * @Route("admin/reports", name="eleave_admin_reports")
     * @Security("is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN')")
     */
    public function getRules(Request $request)
    {
        return $this->render('@EasyjetEleave/Admin/Reports/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
        ]);
    }

    /**
     * @Route("admin/csv-report", name="eleave_admin_csv_report")
     * @Security("is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN')")
     */
    public function getCsvAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $jsonYourselfList = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->wishesCsvResults(
            $request,
            $this->getUser()->getId()
        );
        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename=eleave_office_report.csv');

        return $response;
    }

    /**
     * @Route("admin/search_user", name="eleave_admin_search_user")
     * @Security("is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN')")
     */
    public function getUsers(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $jsonYourselfList = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->getUsers(
            $request,
        );
       
        return $jsonYourselfList;
    }


    
}
