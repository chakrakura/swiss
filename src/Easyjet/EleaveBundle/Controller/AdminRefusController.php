<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\EleaveBundle\Entity\Refus;

class AdminRefusController extends AbstractController
{

    const SIDEBAR_ITEM = "ADMIN_REFUSE";

    /**
     * @Route("admin/refuses", name="eleave_admin_refuses")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
    */
    public function getRefuses(Request $request)
    {
        return $this->render('@EasyjetEleave/Admin/Refuses/list.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
         
        ]);
    }

    /**
     * @Route("admin/refuses-list", name="eleave_admin_refuses_list")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function refusesList(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->refusDatatableResults($request);
        $response = new Response(
            $result
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("admin/refuses/add", name="eleave_admin_refuses_add")
     * @Route("admin/refuses/edit/{id}", name="eleave_admin_refuses_edit")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function manageRefuses(Request $request, $id = null)
    {
     
        $em = $this->getDoctrine()->getManager();
       
        if ($id) {
            $type = 'updated';
            $refuseEntity  = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->find($id);
            $title = 'Edit Refus';
        } else {
            $type = 'add';
            $refuseEntity = new Refus();
            $title = 'Add Refus';
        }

        $form = $this->createForm(\App\Easyjet\EleaveBundle\Form\RefusForm::class, $refuseEntity);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($refuseEntity);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The refuse reason have been  '.$type.' successfully'
                );
                return $this->redirect($this->generateUrl("eleave_admin_refuses"));
            }
        }

        return $this->render('@EasyjetEleave/Admin/Refuses/add.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "title" =>$title
        ]);
    }

    /**
     * @Route("admin/refuses/delete", name="eleave_admin_refuses_delete")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function deleteRefuse(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestData  = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->find($request->get('id'));

        $em->remove($requestData);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'The refuse reason have been removed successfully'
        );
        
        return $this->redirect($this->generateUrl("eleave_admin_refuses"));
    }
    
    
}
