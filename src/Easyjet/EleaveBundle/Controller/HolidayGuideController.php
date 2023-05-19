<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Fpdf\Fpdf;


class HolidayGuideController extends AbstractController
{

    const SIDEBAR_ITEM = "HOLIDAY_GUIDE";

    /**
     * @Route("holiday-guide/{type}", name="eleave_holiday_guides")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function indexAction(Request $request, $type)
    {

        //Instantiating the drive class
        $pdf   = new FPDF("L", 'pt', array(1500, 1500));
        $rules = [];
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 9);

        //PDF file header 
        $pdf->SetFillColor(255, 102, 0);
        $pdf->SetFont('helvetica', '', 14);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetDrawColor(0, 0, 0);
        $pdf->SetLineWidth(0.5);

        $pdf->Cell("", 15, "eLeave rules on " . date("Y-m-d"), 0, 0, 'C', '0');
        $pdf->Ln(35);

        //View rules created by admins
        $pdf->SetFont('Times', 'B', 12);
        //Creation of the table header
        $pdf->SetFont('helvetica', '', 10);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->SetFillColor(255, 102, 0);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFillColor(255, 2555, 255);
        //End of table header creation

        $em = $this->getDoctrine()->getManager();
        if ($type == 'cabin-crew') {
            $rules = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Rules")->findBy(['cabinCrew' => 1, 'display' => 1,], ['id' => 'asc']);
        }
        if ($type == 'flight-crew') {
            $rules = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Rules")->findBy(['flightCrew' => 1, 'display' => 1,], ['id' => 'asc']);
        }

        if (!empty($rules)) {
            foreach ($rules as $rule) {
                $pdf->Ln(2);
                $pdf->Cell(50, 10, "R" . $rule->getId(), '0', 0, 'L', '0');
                $pdf->MultiCell(0, 10,  $rule->getText(), '', '', 0);
                $pdf->Ln();
            }
        }

        $pdf->SetY(-15);
        //Font Arial Italic 8
        $pdf->SetFont('Arial', 'I', 8);

        $pdf->SetFont('Arial', 'I', 10);
        //Page number

        return new Response($pdf->Output(), 200, array(
            'Content-Type' => 'application/pdf'
        ));
    }
}
