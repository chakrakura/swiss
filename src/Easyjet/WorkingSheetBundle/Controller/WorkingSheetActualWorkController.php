<?php

namespace App\Easyjet\WorkingSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork;
use App\Easyjet\WorkingSheetBundle\Form\WorkingSheetActualWorkType;


class WorkingSheetActualWorkController extends AbstractController
{

    const SELECTED_SIDEBAR = "WORKING_HISTORY";
    
    /**
     * Lists all WorkingSheetActualWork entities.
     *
     * @Route("/actual-work/my-day", name="working_sheet_actual_work_my_day", methods={"GET"})
	 * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function myDayAction()
    {
        $em = $this->getDoctrine()->getManager();
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());

        $listOfPatterns = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetPattern')->findBy(array("patternForUser" => $this->getUser()->getId()));
        $workingDay = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork')->findCurrentDayForUser($myself);
        $editFormView = null;
        if ($workingDay) {
            $editForm = $this->createEditForm($workingDay);
            $editFormView = $editForm->createView();
        }
        return $this->render('@EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig', [
            'working_day' => $workingDay,
            'edit_form' => $editFormView,
            'listOfPatterns' => $listOfPatterns,
            'selectedSidebar'  => "WORKING_SHEET"
        ]);
    }
    
    /**
     * Lists all WorkingSheetActualWork entities.
     *
     * @Route("/actual-work", name="working_sheet_actual_work", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function indexAction(Request $request)
    {
        $thisMonth = \DateTime::createFromFormat("Y-m-d", date("Y-m-") . "01");
        $previousMonth = $thisMonth->modify("-1 month");
        
		return $this->render('@EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig', [
            "workingsheetUser" => $request->query->get('workingsheetUser', ''),
            "workingHistoryFrom" => $request->query->get('workingHistoryFrom', $previousMonth->format("d/m/Y")),
            "workingHistoryTo" => $request->query->get('workingHistoryTo', $previousMonth->format("t/m/Y")),
            "selectedSidebar" => self::SELECTED_SIDEBAR,    
        ]);
    }
    /**
     * Creates a new WorkingSheetActualWork entity.
     *
     * @Route("/actual-work/create", name="working_sheet_actual_work_create", methods={"POST"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function createAction(Request $request)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = new WorkingSheetActualWork($myself);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add(
                'success',
                'Your new working day was created.'
            );

            return $this->redirect($this->generateUrl('working_sheet_actual_work_show', array('id' => $entity->getId())));
        }
		return $this->render('@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig', [
            'entity' => $entity,
            'form'   => $form->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }

    /**
     * Creates a form to create a WorkingSheetActualWork entity.
     *
     * @param WorkingSheetActualWork $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(WorkingSheetActualWork $entity)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $form = $this->createForm(WorkingSheetActualWorkType::class, $entity, array(
            'action' => $this->generateUrl('working_sheet_actual_work_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new WorkingSheetActualWork entity.
     *
     * @Route("/actual-work/new", name="working_sheet_actual_work_new", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function newAction()
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $entity = new WorkingSheetActualWork($myself);
        $form   = $this->createCreateForm($entity);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig', [
            'entity' => $entity,
            'form'   => $form->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }

    /**
     * Finds and displays a WorkingSheetActualWork entity.
     *
     * @Route("/actual-work/{id}", name="working_sheet_actual_work_show", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function showAction($id)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork')->find($id);
        
        $isAdmin = $this->get('security.authorization_checker')->isGranted('ROLE_FDTR_ADMIN');

        if (!$entity || (!$isAdmin &&  $entity->getWorkedByUser()->getId() != $myself->getId())) {
            throw $this->createNotFoundException('Unable to find WorkingSheetActualWork entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig', [
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }

    /**
     * Displays a form to edit an existing WorkingSheetActualWork entity.
     *
     * @Route("/actual-work/{id}/edit", name="working_sheet_actual_work_edit", methods={"GET"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function editAction($id)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $em = $this->getDoctrine()->getManager();
        
        $isAdmin = $this->get('security.authorization_checker')->isGranted('ROLE_FDTR_ADMIN');

        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork')->find($id);
		
        if (!$entity || (!$isAdmin && $entity->getWorkedByUser()->getId() != $myself->getId())) {
            throw $this->createNotFoundException('Unable to find WorkingSheetActualWork entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig', [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }

    /**
    * Creates a form to edit a WorkingSheetActualWork entity.
    *
    * @param WorkingSheetActualWork $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(WorkingSheetActualWork $entity)
    {
        $form = $this->createForm(WorkingSheetActualWorkType::class, $entity, array(
            'action' => $this->generateUrl('working_sheet_actual_work_update', array('id' => $entity->getId()))
        ));

        return $form;
    }
    /**
     * Edits an existing WorkingSheetActualWork entity.
     *
     * @Route("/actual-work/{id}", name="working_sheet_actual_work_update", methods={"POST"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function updateAction(Request $request, $id)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork')->find($id);
        
        $isAdmin = $this->get('security.authorization_checker')->isGranted('ROLE_FDTR_ADMIN');

        if (!$entity || (!$isAdmin &&  $entity->getWorkedByUser()->getId() != $myself->getId())) {
            throw $this->createNotFoundException('Unable to find WorkingSheetActualWork entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        
        $isHoliday = $request->request->get('isHolliday');

        if($isHoliday == 1){
            $requestParam['morningFrom'] = NULL;
            $requestParam['morningTo'] = NULL;
            $requestParam['afternoonFrom'] = NULL;
            $requestParam['afternoonTo'] = NULL;

            $request->set('easyjet_workingsheetbundle_workingsheetactualwork', $requestParam);
        }
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            
            $this->get('session')->getFlashBag()->add(
                'success',
                'Your working day was updated successfully.'
            );

            return $this->redirect($this->generateUrl('working_sheet_actual_work_edit', array('id' => $id)));
        }

        return $this->render('@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig', [
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'selectedSidebar'  => self::SELECTED_SIDEBAR
        ]);
    }
    /**
     * Deletes a WorkingSheetActualWork entity.
     *
     * @Route("/actual-work/{id}", name="working_sheet_actual_work_delete", methods={"DELETE"})
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN') or is_granted('ROLE_WORKING_SHEET_USER') or is_granted('ROLE_WORKING_SHEET_LINE_MANAGER')")
     */
    public function deleteAction(Request $request, $id)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork')->find($id);

            if (!$entity || $entity->getWorkedByUser()->getId() != $myself->getId()) {
                throw $this->createNotFoundException('Unable to find WorkingSheetActualWork entity.');
            }

            $em->remove($entity);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add(
                'success',
                'Your working day was removed successfully.'
            );
        }

        return $this->redirect($this->generateUrl('actual-work'));
    }

    /**
     * Creates a form to delete a WorkingSheetActualWork entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetUsers")->find($this->getUser()->getId());
        
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('working_sheet_actual_work_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    /**
     * @Route("/actual-work/workingsheet/search", name="workingsheet_list_search")
     * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     */
    public function searchAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork")->actualWorkDatatableResults(
            $this->container->get('request_stack')->getCurrentRequest(),
            $this->get('security.authorization_checker')->isGranted('ROLE_WORKING_SHEET_ADMIN'),
            $this->getUser()->getId()
        );
        
        $response = new Response(
            $jsonYourselfList
        );
        
        
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
    
    /**
     * @Route("/actual-work/workingsheet/csv", name="workingsheet_generate_csv")
	 * @Security("is_granted('ROLE_SWISSINSIDE_USER')")
     */
    public function getCsvAction()
    {
        $entityManager = $this->getDoctrine()->getEntityManager();
        
        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\WorkingSheetBundle\Entity\WorkingSheetActualWork")->WorkingSheetActualWorkCsvResults(
            $this->container->get('request_stack')->getCurrentRequest(),
            $this->get('security.authorization_checker')->isGranted('ROLE_WORKING_SHEET_ADMIN'),
            $this->getUser()->getId()
        );
        
        $response = new Response(
            $jsonYourselfList
        );
        
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename=report.csv');
        
        return $response;
    }
}
