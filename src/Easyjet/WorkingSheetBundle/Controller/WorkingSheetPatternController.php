<?php

namespace App\Easyjet\WorkingSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern;
use App\Easyjet\WorkingSheetBundle\Form\WorkingSheetPatternType;
use App\Easyjet\WorkingSheetBundle\Form\WorkingSheetPatternValidateType;

class WorkingSheetPatternController extends AbstractController
{
    
    const SELECTED_SIDEBAR = "PATTERNS";

    /**
     * Lists all WorkingSheetPattern entities.
     *
     * @Route("/pattern/index", name="working_sheet_pattern", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entities = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->findBy(array("patternForUser" => $myself));
        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig', [
            'entities' => $entities,
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }
    
    /**
     * Lists all WorkingSheetPattern entities.
     * @Route("/pattern/validation", name="working_sheet_pattern_validation", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function validationAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());


        $entities = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->findAdministrablePatterns(
            $myself,
            $this->get('security.authorization_checker')
        );

        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig', [
            'entities' => $entities,
            'selectedSidebar'  => "PATTERN_VALIDATION"
        ]);
    }
    /**
     * Creates a new WorkingSheetPattern entity.
     *
     * @Route("/pattern/create", name="working_sheet_pattern_create", methods={"POST"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function createAction(Request $request)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = new WorkingSheetPattern($myself);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add(
                'success',
                'Your pattern was created successfully.'
            );

            return $this->redirect($this->generateUrl('working_sheet_pattern_show', array('id' => $entity->getId())));
        }

        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/new.html.twig', [
            'entity' => $entity,
            'form'   => $form->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }

    /**
     * Creates a form to create a WorkingSheetPattern entity.
     *
     * @param WorkingSheetPattern $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(WorkingSheetPattern $entity)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        $form = $this->createForm(WorkingSheetPatternType::class, $entity, array(
            'action' => $this->generateUrl('working_sheet_pattern_create'),
            'method' => 'POST',
        ));
        return $form;
    }

    /**
     * Displays a form to create a new WorkingSheetPattern entity.
     *
     * @Route("/pattern/new", name="working_sheet_pattern_new", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function newAction()
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        $entity = new WorkingSheetPattern($myself);
        $form   = $this->createCreateForm($entity);
        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/new.html.twig', [
            'entity' => $entity,
            'form'   => $form->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }

    /**
     * Finds and displays a WorkingSheetPattern entity.
     *
     * @Route("/pattern/{id}", name="working_sheet_pattern_show", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->find($id);
        $granted = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->patternAccessGrantedForUser(
                $entity, 
                $myself,
                $this->get('security.authorization_checker')
        );

        if (!$entity || !$granted) {
            throw $this->createNotFoundException('Unable to find WorkingSheetPattern entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig', [
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }

    /**
     * Displays a form to edit an existing WorkingSheetPattern entity.
     *
     * @Route("/pattern/{id}/edit", name="working_sheet_pattern_edit", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function editAction($id)
    {
        
        
        $em = $this->getDoctrine()->getManager();

        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->find($id);
        $granted = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->patternAccessGrantedForUser(
                $entity, 
                $myself,
                $this->get('security.authorization_checker')
        );
        
                
        if (!$entity || !$granted) {
            throw $this->createNotFoundException('Unable to find WorkingSheetPattern entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig', [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }
    
    /**
     * Displays a form to edit an existing WorkingSheetPattern entity.
     *
     * @Route("/pattern/{id}/validate", name="working_sheet_pattern_validate", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function validateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->find($id);
        $granted = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->patternAccessGrantedForUser(
                $entity, 
                $myself,
                $this->get('security.authorization_checker')
        );
        
        if (!$entity || !$granted) {
            throw $this->createNotFoundException('Unable to find WorkingSheetPattern entity.');
        }

        $editForm = $this->createValidateForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig', [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => "PATTERN_VALIDATION"
        ]);
    }

    /**
    * Creates a form to edit a WorkingSheetPattern entity.
    *
    * @param WorkingSheetPattern $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(WorkingSheetPattern $entity)
    {
        $form = $this->createForm(WorkingSheetPatternType::class, $entity, array(
            'action' => $this->generateUrl('working_sheet_pattern_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));


        return $form;
    }
    
    /**
    * Creates a form to edit a WorkingSheetPattern entity.
    *
    * @param WorkingSheetPattern $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createValidateForm(WorkingSheetPattern $entity)
    {
        $form = $this->createForm(WorkingSheetPatternValidateType::class, $entity, array(
            'action' => $this->generateUrl('working_sheet_pattern_valdidate_save', array('id' => $entity->getId())),
            'method' => 'POST',
        ));


        return $form;
    }
    /**
     * Edits an existing WorkingSheetPattern entity.
     *
     * @Route("/pattern/{id}", name="working_sheet_pattern_update", methods={"POST"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->find($id);
        $granted = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->patternAccessGrantedForUser(
                $entity, 
                $myself,
                $this->get('security.authorization_checker')
        );

        if (!$entity || !$granted) {
            throw $this->createNotFoundException('Unable to find WorkingSheetPattern entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Your pattern was updated successfully.'
            );
            
            return $this->redirect($this->generateUrl('working_sheet_pattern_edit', array('id' => $id)));
        }

        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig', [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }
    
    /**
     * Edits an existing WorkingSheetPattern entity.
     *
     * @Route("/pattern/{id}/validate", name="working_sheet_pattern_valdidate_save", methods={"POST"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function validateUpdateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->find($id);
        $granted = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->patternAccessGrantedForUser(
                $entity, 
                $myself,
                $this->get('security.authorization_checker')
        );
        
        if (!$entity || !$granted) {
            throw $this->createNotFoundException('Unable to find WorkingSheetPattern entity.');
        }

        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createValidateForm($entity);
        $editForm->handleRequest($request);
        $entity->setStatusChangedByUser($myself);
        $em->persist($entity);
        
        if ($editForm->isValid()) {
            $em->flush();
            $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern")->setActivePatternForUser($entity->getPatternForUser());

            $this->get('session')->getFlashBag()->add(
                'success',
                'the pattern status was updated successfully.'
            );
            
            return $this->redirect($this->generateUrl('working_sheet_pattern_validation'));
        }

        return $this->render('@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig', [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => "PATTERN_VALIDATION"
        ]);
    }
    /**
     * Deletes a WorkingSheetPattern entity.
     *
     * @Route("/pattern/{id}", name="working_sheet_pattern_delete", methods={"DELETE"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
            $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->find($id);
            $granted = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->patternAccessGrantedForUser(
                    $entity, 
                    $myself,
                    $this->get('security.authorization_checker')
            );

            if (!$entity || !$granted) {
                throw $this->createNotFoundException('Unable to find WorkingSheetPattern entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('working_sheet_pattern'));
    }

    /**
     * Creates a form to delete a WorkingSheetPattern entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('working_sheet_pattern_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
