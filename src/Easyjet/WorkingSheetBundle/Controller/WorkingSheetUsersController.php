<?php

namespace App\Easyjet\WorkingSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers;
use App\Easyjet\WorkingSheetBundle\Form\WorkingSheetUsersType;

class WorkingSheetUsersController extends AbstractController
{
    const SELECTED_SIDEBAR = "USERS";
    /**
     * Lists all WorkingSheetUsers entities.
     *
     * @Route("/users", name="working_sheet_users", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN')") 
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers')->getActiveUsers();

        return $this->render('@EasyjetWorkingSheet/WorkingSheetUsers/index.html.twig', [
            'selectedSidebar'  => self::SELECTED_SIDEBAR,
            'entities' => $entities,
        ]);
    }
    /**
     * Creates a new WorkingSheetUsers entity.
     *
     * @Route("/", name="working_sheet_users_create", methods={"POST"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN')") 
     */
    public function createAction(Request $request)
    {
        $entity = new WorkingSheetUsers();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Your user was created successfully.'
            );
            return $this->redirect($this->generateUrl('working_sheet_users_show_edit', array('id' => $entity->getId())));
        }

        return $this->render('@EasyjetWorkingSheet/WorkingSheetUsers/new.html.twig', [
            'selectedSidebar'  => self::SELECTED_SIDEBAR,
            'entity' => $entity,
            'form'   => $form->createView(),
        ]);
    }

    /**
     * Creates a form to create a WorkingSheetUsers entity.
     *
     * @param WorkingSheetUsers $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(WorkingSheetUsers $entity)
    {
        $form = $this->createForm(WorkingSheetUsersType::class, $entity, array(
            'action' => $this->generateUrl('working_sheet_users_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new WorkingSheetUsers entity.
     *
     * @Route("/new", name="working_sheet_users_new", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN')")
     */
    public function newAction()
    {
        $entity = new WorkingSheetUsers();
        $form   = $this->createCreateForm($entity);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetUsers/new.html.twig', [
            'selectedSidebar'  => self::SELECTED_SIDEBAR,
            'entity' => $entity,
            'form'   => $form->createView(),
        ]);
    }

    /**
     * Displays a form to edit an existing WorkingSheetUsers entity.
     *
     * @Route("/{id}/edit", name="working_sheet_users_edit", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN')")
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkingSheetUsers entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetUsers/edit.html.twig', [
            'selectedSidebar'  => self::SELECTED_SIDEBAR,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
    * Creates a form to edit a WorkingSheetUsers entity.
    *
    * @param WorkingSheetUsers $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(WorkingSheetUsers $entity)
    {
        $form = $this->createForm(WorkingSheetUsersType::class, $entity, array(
            'action' => $this->generateUrl('working_sheet_users_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        return $form;
    }
    /**
     * Edits an existing WorkingSheetUsers entity.
     *
     * @Route("/{id}", name="working_sheet_users_update", methods={"POST"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN')")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find WorkingSheetUsers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            
            $this->get('session')->getFlashBag()->add(
                'success',
                'Your user was updated successfully.'
            );

            return $this->redirect($this->generateUrl('working_sheet_users_edit', array('id' => $id)));
        }

        return $this->render('@EasyjetWorkingSheet/WorkingSheetUsers/edit.html.twig', [
            'selectedSidebar'  => self::SELECTED_SIDEBAR,
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ]);
    }
    /**
     * Deletes a WorkingSheetUsers entity.
     *
     * @Route("/{id}", name="working_sheet_users_delete", methods={"DELETE"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find WorkingSheetUsers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('users'));
    }

    /**
     * Creates a form to delete a WorkingSheetUsers entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('working_sheet_users_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
