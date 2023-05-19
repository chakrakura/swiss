<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use App\Easyjet\OtpBundle\Entity\Factorisations;
use App\Easyjet\OtpBundle\Form\FactorisationsForm;

class AdminFactorisationsController extends AbstractController
{
    const SIDEBAR_ITEM = "ADMIN_FACTORISATIONS";

    /**
     * @Route("/admin/factorisations/index", name="admin_otp_factorisations_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('@EasyjetOtp/Admin/Factorisations/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "tableData" => $em->getRepository("App\Easyjet\OtpBundle\Entity\Factorisations")->findBy(array(), array("id" => "asc"))
        ]);
    }

   /**
     * @Route("/admin/factorisation/new", name="admin_otp_factorisation_new")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        try {
            $factorisation = new Factorisations();
            $form = $this->createForm(FactorisationsForm::class, $factorisation);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $em->persist($factorisation);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The factorisation has been created successfully'
                    );
                    return $this->redirect($this->generateUrl("admin_otp_factorisations_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("admin_otp_factorisations_index"));
        }

        return $this->render('@EasyjetOtp/Admin/Factorisations/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "title" => "Add a new factorisation"
        ]);
    }

    /**
     * @Route("/admin/factorisation/edit/{factorisation}", name="admin_otp_factorisation_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function editAction(Factorisations $factorisation, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        try {
            $form = $this->createForm(FactorisationsForm::class, $factorisation);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $em->persist($factorisation);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The factorisation has been updated successfully'
                    );
                    return $this->redirect($this->generateUrl("admin_otp_factorisations_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("admin_otp_factorisations_index"));
        }

        return $this->render('@EasyjetOtp/Admin/Factorisations/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "title" => "Update a factorisation"
        ]);
    }

    /**
     * @Route("/admin/factorisation/delete/{factorisation}", name="admin_otp_factorisation_del")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function deleteAction(Factorisations $factorisation)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($factorisation);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'success',
            'The factorisation has been removed successfully'
        );
        return $this->redirect($this->generateUrl("admin_otp_factorisations_index"));
    }
}
