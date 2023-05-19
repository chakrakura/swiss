<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Entity\Disruptions;
use Symfony\Component\Routing\Annotation\Route;
use App\Easyjet\OtpBundle\Form\DisruptionsForm;

class AdminDisruptionsController extends AbstractController
{
    const SIDEBAR_ITEM = "ADMIN_DISRUPTION";

    /**
     * @Route("/admin/disruptions/index", name="admin_otp_disruptions_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('@EasyjetOtp/Admin/Disruptions/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "tableData" => $em->getRepository("App\Easyjet\OtpBundle\Entity\Disruptions")->findBy(array(), array("id" => "asc"))
        ]);
    }

    /**
     * @Route("/admin/disruption/new", name="admin_otp_disruption_new")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        try {

            $disruption = new Disruptions();
            $form = $this->createForm(DisruptionsForm::class, $disruption);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $em->persist($disruption);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The disruption has been created successfully'
                    );
                    return $this->redirect($this->generateUrl("admin_otp_disruptions_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("admin_otp_disruptions_index"));
        }

        return $this->render('@EasyjetOtp/Admin/Disruptions/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "title" => "Add a new disruption"
        ]);
    }

    /**
     * @Route("/admin/disruption/edit/{disruption}", name="admin_otp_disruption_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function editAction(Disruptions $disruption, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        try {
            $form = $this->createForm(DisruptionsForm::class, $disruption);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $em->persist($disruption);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The disruption has been updated successfully'
                    );
                    return $this->redirect($this->generateUrl("admin_otp_disruptions_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("admin_otp_disruptions_index"));
        }

        return $this->render('@EasyjetOtp/Admin/Disruptions/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "title" => "Update a disruption"
        ]);
    }

    /**
     * @Route("/admin/disruption/delete/{disruption}", name="admin_otp_disruption_del")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function deleteAction(Disruptions $disruption)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($disruption);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'The disruption has been removed successfully'
        );
        return $this->redirect($this->generateUrl("admin_otp_disruptions_index"));
    }
}
