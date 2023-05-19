<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Entity\CompensationGrades;
use App\Easyjet\OtpBundle\Form\CompensationGradesForm;

class AdminCompensationGradesController extends AbstractController
{
    const SIDEBAR_ITEM = "ADMIN_COMPENSATION_GRADES";


    /**
     * @Route("/admin/compensation-grades", name="admin_otp_compensation_grades_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('@EasyjetOtp/Admin/CompensationGrades/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "tableData" => $em->getRepository("App\Easyjet\OtpBundle\Entity\CompensationGrades")->findBy(array(), array("label" => "asc"))
        ]);
    }

    /**
     * @Route("/admin/compensation-grades/new", name="admin_otp_compensation_grades_new")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        try {
            $compensationGrade = new CompensationGrades();
            $form = $this->createForm(CompensationGradesForm::class, $compensationGrade);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $em->persist($compensationGrade);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The compensation grade has been created successfully'
                    );
                    return $this->redirect($this->generateUrl("admin_otp_compensation_grades_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("admin_otp_compensation_grades_index"));
        }

        return $this->render('@EasyjetOtp/Admin/CompensationGrades/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "title" => "Add a new compensation grade"
        ]);
    }

    /**
     * @Route("/admin/compensation-grades/edit/{compensationGrade}", name="admin_otp_compensation_grades_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function editAction(CompensationGrades $compensationGrade, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        try {
            $form = $this->createForm(CompensationGradesForm::class, $compensationGrade);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $em->persist($compensationGrade);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The compensation grade has been updated successfully'
                    );
                    return $this->redirect($this->generateUrl("admin_otp_compensation_grades_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("admin_otp_compensation_grades_index"));
        }

        return $this->render('@EasyjetOtp/Admin/CompensationGrades/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "title" => "Edit compensation grade"
        ]);
    }

    /**
     * @Route("/admin/compensation-grades/delete/{compensationGrade}", name="admin_otp_compensation_grades_del")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function deleteAction(CompensationGrades $compensationGrade)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($compensationGrade);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'success',
            'The compensation grade has been removed successfully'
        );
        return $this->redirect($this->generateUrl("admin_otp_compensation_grades_index"));
    }
}
