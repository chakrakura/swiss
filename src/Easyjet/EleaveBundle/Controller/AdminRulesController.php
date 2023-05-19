<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\EleaveBundle\Entity\Rules;

class AdminRulesController extends AbstractController
{

    const SIDEBAR_ITEM = "ADMIN_RULES";

    /**
     * @Route("admin/rules", name="eleave_admin_rules")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function getRules(Request $request)
    {
        return $this->render('@EasyjetEleave/Admin/Rules/list.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
        ]);
    }

    /**
     * @Route("admin/rules-list", name="eleave_admin_rules_list")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function rulesList(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $result = $entityManager->getRepository("App\Easyjet\EleaveBundle\Entity\Rules")->rulesDatatableResults($request);
        $response = new Response(
            $result
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("admin/rules/add", name="eleave_admin_rules_add")
     * @Route("admin/rules/edit/{id}", name="eleave_admin_rules_edit")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function manageRules(Request $request, $id = null)
    {
        $em = $this->getDoctrine()->getManager();
        if ($id) {
            $type = 'updated';
            $refuseEntity  = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Rules")->find($id);
            $title = 'Edit Rule';
        } else {
            $type = 'add';
            $refuseEntity = new Rules();
            $title = 'Add Rule';
        }

        $form = $this->createForm(\App\Easyjet\EleaveBundle\Form\RulesForm::class, $refuseEntity);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($refuseEntity);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The rule have been  ' . $type . ' successfully'
                );
                return $this->redirect($this->generateUrl("eleave_admin_rules"));
            }
        }

        return $this->render('@EasyjetEleave/Admin/Rules/add.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "title" => $title,
        ]);
    }

    /**
     * @Route("admin/rules/delete", name="eleave_admin_rules_delete")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function deleteRule(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestData  = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Rules")->find($request->get('id'));

        $em->remove($requestData);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'The rule have been removed successfully'
        );

        return $this->redirect($this->generateUrl("eleave_admin_rules"));
    }
}
