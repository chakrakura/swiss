<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Entity\ExportLog;
use Symfony\Component\Routing\Annotation\Route;


class AdminExportLogController extends AbstractController
{
    const SIDEBAR_ITEM = "ADMIN_LOGS";

    /**
     * @Route("/admin/logs", name="admin_otp_logs_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('@EasyjetOtp/Admin/ExportLog/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "logs" => $em->getRepository("App\Easyjet\OtpBundle\Entity\ExportLog")->findAll()
        ]);
    }

    /**
     * @Route("/admin/logs/view/{log}", name="admin_otp_logs_view")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function viewAction(ExportLog $log)
    {
        return $this->render('@EasyjetOtp/Admin/ExportLog/view.html.twig', [
            "log" => $log,
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/admin/logs/dl/{log}", name="admin_otp_logs_dl")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function downloadAction(ExportLog $log)
    {

        return new Response($log->getXlsContent($this->getParameter('otp.archive_folder')), 200, array(
            'Content-Type' => 'application/force-download',
            'Content-Disposition' => 'attachment; filename="' . $log->getExcelFilename() . '"'
        ));
    }
}
