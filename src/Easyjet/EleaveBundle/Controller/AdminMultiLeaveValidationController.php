<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\EleaveBundle\Services\RequestMailerService;



class AdminMultiLeaveValidationController extends AbstractController
{
    const SIDEBAR_ITEM = "MULTI_LEAVE_VALIDATION";

    /**
     * @Route("/admin/multi-leave-validation", name="eleave_admin_multi_leave_validation")
     * @Security("is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function multiLeaveValidationAction(Request $request, RequestMailerService $requestMailerService)
    {
        $em = $this->getDoctrine()->getManager();
        try {
            if (isset($request->files) && !empty($request->files)) {
                foreach ($request->files as $file) {
                    $fileType = $file->getClientOriginalExtension();
                    if ($fileType == 'csv') {
                        $wishData    = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->updateWishData($file);
                        $mailingData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->mailData($file);

                        foreach ($mailingData as $data) {
                            $state =  $data[0]['state'];
                            if ($state == 2) {
                                $requestMailerService->sendAcceptMail($data);
                            } elseif ($state == 1) {
                                $requestMailerService->sendRefusedMail($data);
                            }
                        }
                        // Loop over the data
                        $this->get('session')->getFlashBag()->add(
                            'success',
                            sprintf("Import done successfully with following records having either state or Leave choice as blank:" . $wishData)
                        );
                    } else {
                        $this->get('session')->getFlashBag()->add(
                            'error',
                            sprintf("Only csv files are allowed !")
                        );
                    }
                }
            }
        } catch (\Exception $ex) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $ex->getMessage()
            );
        }

        return $this->render('@EasyjetEleave/Admin/multiLeaveValidation.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
        ]);
    }
}
