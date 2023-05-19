<?php

namespace App\Easyjet\EwishBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\EwishBundle\Entity\EmailNotifications;


class EwishAdminController extends AbstractController
{

    const SIDEBAR_ITEM = "SHOW_EMAILS";

    /**
     * @Route("admin/emails", name="ewish_admin_emails")
     * @Security("is_granted('ROLE_EWISH_ADMIN')")
     */
    public function getEmailNotifications(Request $request)
    {
        return $this->render('@EasyjetEwish/Admin/Emails/list.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
        ]);
    }

    /**
     * @Route("admin/emails/list", name="ewish_admin_emails_list")
     * @Security("is_granted('ROLE_EWISH_ADMIN')")
     */
    public function emailsList(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository("App\Easyjet\EwishBundle\Entity\EmailNotifications")->emailsDatatableResults($request);
        $response = new Response(
            $result
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("admin/emails/add", name="ewish_admin_emails_add")
     * @Security("is_granted('ROLE_EWISH_ADMIN')")
     */
    public function addEmail(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $emailEntity = new EmailNotifications();
        $form = $this->createForm(\App\Easyjet\EwishBundle\Form\EmailNotificationsForm::class, $emailEntity);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($emailEntity);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The notification have been saved successfully'
                );
                return $this->redirect($this->generateUrl("ewish_admin_emails"));
            }
        }

        return $this->render('@EasyjetEwish/Admin/Emails/add.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "title" => "Add Email",
        ]);
    }

    /**
     * @Route("admin/emails/edit/{email}", name="ewish_admin_emails_edit")
     * @Security("is_granted('ROLE_EWISH_ADMIN')")
     */
    public function editEmail(EmailNotifications $email, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(\App\Easyjet\EwishBundle\Form\EmailNotificationsForm::class, $email);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($email);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The notification  have been updated successfully'
                );
                return $this->redirect($this->generateUrl("ewish_admin_emails"));
            }
        }

        return $this->render('@EasyjetEwish/Admin/Emails/add.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "title" => "Edit Email",

        ]);
    }


    /**
     * @Route("admin/emails/delete", name="ewish_admin_emails_delete")
     * @Security("is_granted('ROLE_EWISH_ADMIN')")
     */
    public function deleteEmail(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestData  = $em->getRepository("App\Easyjet\EwishBundle\Entity\EmailNotifications")->find($request->get('id'));

        $em->remove($requestData);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'The notification have been removed successfully'
        );

        return $this->redirect($this->generateUrl("ewish_admin_emails"));
    }
}
