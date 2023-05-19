<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\EleaveBundle\Entity\Email;



class AdminEmailsController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_EMAILS";

    /**
     * @Route("admin/emails", name="eleave_admin_emails")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function getEmailNotifications(Request $request)
    {
        return $this->render('@EasyjetEleave/Admin/Emails/list.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,

        ]);
    }

    /**
     * @Route("admin/emails-list", name="eleave_admin_emails_list")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function emailsList(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository("App\Easyjet\EleaveBundle\Entity\Email")->emailsDatatableResults($request);
        $response = new Response(
            $result
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("admin/emails/add", name="eleave_admin_emails_add")
     * @Route("admin/emails/edit/{id}", name="eleave_admin_emails_edit")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function addEmail(Request $request, $id = null)
    {
        $em = $this->getDoctrine()->getManager();
        if ($id) {
            $type = 'updated';
            $title = 'Edit Email';
            $emailEntity  = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Email")->find($id);
        } else {
            $type = 'add';
            $emailEntity = new Email();
            $title = 'Add Email';
        }

        $form = $this->createForm(\App\Easyjet\EleaveBundle\Form\EmailForm::class, $emailEntity);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($emailEntity);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The notification have been  ' . $type . ' successfully'
                );
                return $this->redirect($this->generateUrl("eleave_admin_emails"));
            }
        }

        return $this->render('@EasyjetEleave/Admin/Emails/add.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "title" => $title
        ]);
    }

    /**
     * @Route("admin/emails/delete", name="eleave_admin_emails_delete")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function deleteEmail(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestData  = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Email")->find($request->get('id'));

        $em->remove($requestData);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'The notification have been removed successfully'
        );

        return $this->redirect($this->generateUrl("eleave_admin_emails"));
    }
}
