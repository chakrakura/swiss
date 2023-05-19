<?php

namespace App\Easyjet\FdtrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\FdtrBundle\Form\NotificationsForm;
use App\Easyjet\FdtrBundle\Entity\FdtrLog;


class AdminController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_LOGS";

    /**
     * @Route("/admin/logs/index", name="fdtr_logs_index")
     * @Security("is_granted('ROLE_FDTR_ADMIN')")
     */
    public function logsAction(Request $request)
    {
        $now = new \DateTime();

        return $this->render('@EasyjetFdtr/Admin/logs.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "logTo" => $request->query->get('logTo', $now->format("d/m/Y")),
            "logFrom" => $request->query->get('logFrom', $now->modify("-1 month")->format("d/m/Y")),
        ]);
    }

    /**
     * @Route("/admin/logs/search", name="fdtr_logs_search")
     * @Security("is_granted('ROLE_FDTR_ADMIN')")
     */
    public function searchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrLog")->logsDatatableResults(
            $request
        );
        $response = new Response(
            $jsonYourselfList
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/admin/logs/view/{log}", name="fdtr_logs_view")
     * @Security("is_granted('ROLE_FDTR_ADMIN')")
     */
    public function logViewAction(FdtrLog $log)
    {
        return $this->render('@EasyjetFdtr/Admin/logView.html.twig', [
            "log" => $log,
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }


    /**
     * @Route("/admin/notifications", name="fdtr_admin_notifications")
     * @Security("is_granted('ROLE_FDTR_ADMIN')")
     */
    public function notificationsAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $notificationParameter = $em->getRepository('App\Easyjet\FdtrBundle\Entity\FdtrParameters')->find("notifications");

        $form = $this->createForm(NotificationsForm::class, $notificationParameter);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($notificationParameter);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The notification recipients have been saved successfully'
                );
                return $this->redirect($this->generateUrl("fdtr_admin_notifications"));
            }
        }

        return $this->render('@EasyjetFdtr/Admin/notifications.html.twig', [

            "form" => $form->createView(),
            "selectedSidebar" => "NOTIFICATIONS"
        ]);
    }


    /**
     * Lists all FdtrUsers entities.
     *
     * @Route("/admin/rights", name="fdtr_admin_rights_index")
     * @Security("is_granted('ROLE_FDTR_ADMIN')")
     */
    public function rightsAction(Request $request)
    {
        return $this->render('@EasyjetFdtr/Admin/rights.html.twig', [

            "fdtrUser" => $request->get('fdtrUser', ''),
            "selectedSidebar" => "RIGHTS"
        ]);
    }

    /**
     * @Route("/admin/admin-search", name="fdtr_admin_list_search")
     * @Security("is_granted('ROLE_FDTR_ADMIN')")
     */
    public function adminSearchAction(Request $request)
    {
        $entityManager =  $this->getDoctrine()->getManager();

        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport")->fdtrUserDataTableResults(
            $request
        );

        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/admin/allow-dtime/", name="fdtr_allow_dtime")
     * @Security("is_granted('ROLE_FDTR_ADMIN')")
     */
    public function allowDtimeAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $idUser = $request->get("id-user");
        $userData = $entityManager->getRepository('App\Easyjet\UmanBundle\Entity\Users')->find($idUser);
        $userData->setAllowDtimeRequest($request->get("allow_dtime_request"));
        $userData->setDtimeUserBlock($request->get("dtime_user_block"));
        $entityManager->persist($userData);
        $entityManager->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'user rights has been saved successfully'
        );

        return $this->redirect($this->generateUrl("fdtr_admin_rights_index"));
    }
}
