<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\EleaveBundle\Services\RemainingDaysParserService;
use App\Easyjet\EleaveBundle\Services\ImportLog;


class AdminRemainingDaysController extends AbstractController
{
    const SIDEBAR_ITEM = "REMAINING_DAYS";


    /**
     * @Route("/admin/remaining-days", name="eleave_admin_remaining_days")
     * @Security("is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function updateRemainingDaysAction(Request $request, RemainingDaysParserService $remainingDaysParserService)
    {

        //ini_set("memory_limit","256M");
        $em = $this->getDoctrine()->getManager();
        $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->fixTypesEftrProblems();
        $importLog = new ImportLog();
        $params = ["selectedSidebar" => self::SIDEBAR_ITEM];
        try {

            $remainingDaysParserService->beginTransaction();
            $remainingDaysParserService->setImportLog($importLog);

            if (count($request->files)) {
                foreach ($request->files as $currentFile) {
                    if (is_array($currentFile)) {
                        foreach ($currentFile as $xlsFile) {
                            $remainingDaysParserService->parseNewFile($xlsFile->getRealPath());
                        }
                    }
                }

                $remainingDaysParserService->commit();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    sprintf("Import done successfully. %s employees has been imported.", count($importLog))
                );
                $params =  array_merge($params, array("importLog" => $importLog));
            }
        } catch (\Exception $ex) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $ex->getMessage()
            );
        }

        return $this->render('@EasyjetEleave/Admin/updateRemainingDays.html.twig', $params);
    }
}
