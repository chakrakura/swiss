<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Fpdf\Fpdf;


class DlAvailibilityController extends AbstractController
{

    const SIDEBAR_ITEM = "DL_AVAILIBILITY";

    /**
     * @Route("dl-availibility/{type}", name="eleave_dl_availibility")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function indexAction(Request $request, $type)
    {
       
        switch ($type) {
            case "GVA_FA":
                $filename = "GVA_FA.pdf";
                break;
            case "GVA_PU":
                $filename = "GVA_PU.pdf";
                break;
            case "GVA_FO":
                $filename = "GVA_FO.pdf";
                break;
            case "GVA_CP":
                $filename = "GVA_CP.pdf";
                break;

            case "BSL_FA":
                $filename = "BSL_FA.pdf";
                break;
            case "BSL_PU":
                $filename = "BSL_PU.pdf";
                break;
            case "BSL_FO":
                $filename = "BSL_FO.pdf";
                break;
            case "BSL_CP":
                $filename = "BSL_CP.pdf";
                break;

            default:
                die("No file available for the moment");
                break;
        }
       
        if (!is_file($this->getParameter('availibility_files_folder') . "/" . $filename)) 
        {
            die("File " . $this->getParameter('availibility_files_folder') . "/" . $filename . " not found");
        }
        //Begin writing headers
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: public");
        /*header("Content-Description: File Transfer");*/

        //Use the switch-generated Content-Type
        header("Content-Type: application/pdf");
        header("Content-Disposition:inline;filename=$filename");
        $pdfFile =  @readfile($this->getParameter('availibility_files_folder') . "/" . $filename);

        return new Response($pdfFile, 200, array(
            'Content-Type' => 'application/pdf'
        ));
    }
}
