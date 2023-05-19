<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Entity\HrisProcessingCalendar;

use App\Easyjet\HrisBundle\Form\ProcessingCalendarForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ProcessingCalendarController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_PROCESSING_CALENDAR";

    protected function checkCsrf($name, $request, $query = '_token')
    {
        $submittedToken = $request->query->get('_token');
        
        if (!$this->isCsrfTokenValid($name, $submittedToken)) {
            throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException('CSRF token is invalid.');
        }

        return true;
    }

    /**
     * @Route("/processing_calendar/index", name="processing_calendar_index")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $tableData = $entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisProcessingCalendar")->findAll();

        return $this->render('@EasyjetHris/ProcessingCalendar/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "tableData" => $tableData
        ]);
    }


    /**
     * @Route("/processing_calendar/new", name="processing_calendar_new")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $calendar = new HrisProcessingCalendar();

        $form = $this->createForm(
            ProcessingCalendarForm::class, 
            $calendar
        );
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {
                $em->beginTransaction();
                try {
                    
                    $em->persist($calendar);
                    $em->flush();
                    $em->commit();
                    
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your new entry has been updated successfully.'
                    );

                } catch (\Exception $e) {
                    $em->rollback();
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Error during the saving : ' . $e->getMessage()
                    );
                }
                
                return $this->redirect($this->generateUrl("processing_calendar_index"));

            }
        }

        return $this->render('@EasyjetHris/ProcessingCalendar/new.html.twig', [
            "calendar" => $calendar,
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);

    }

    /**
     * @Route("/processing_calendar/edit/{calendar}", name="processing_calendar_edit")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function editAction(HrisProcessingCalendar $calendar, Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $form = $this->createForm(
            ProcessingCalendarForm::class, 
            $calendar
        );
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {

                $em->beginTransaction();
                try {
                    
                    $em->persist($calendar);
                    $em->flush();
                    $em->commit();
                    
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your new entry has been updated successfully.'
                    );

                } catch (\Exception $e) {
                    $em->rollback();
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Error during the saving : ' . $e->getMessage()
                    );
                }
                
                return $this->redirect($this->generateUrl("processing_calendar_index"));

            }
        }
        return $this->render('@EasyjetHris/ProcessingCalendar/new.html.twig', [
            "calendar" => $calendar,
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/processing_calendar/delete/{calendar}", name="processing_calendar_del")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function dropAction(HrisProcessingCalendar $calendar, Request $request)
    {

        try {
            $em = $this->getDoctrine()->getManager();
            $this->checkCsrf('processing_calendar_management', $request);

            $em->remove($calendar);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                "The batch has been removed successfully"
            );


        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
        }

        return $this->redirect($this->generateUrl("processing_calendar_index"));
    }
    
}
