<?php

namespace App\Easyjet\UmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\UmanBundle\Entity\Users;

class EmployessController extends AbstractController
{
    const selectedSidebar = 'UMAN_EMPLOYEE_USERS';

    /**
     * @Route("/employee-users/all", name="uman_employee_users_show_all")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN') or is_granted('ROLE_UMANAGER_IT')")
     * @param Request $request The Request object 
     * @return Response A Response instance
     */
    public function showAllAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $employeeUsers = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->getAllEmployeeUsers();

        return $this->render('@EasyjetUman/Employess/showAll.html.twig', [
            "employeeUsers" =>  $employeeUsers,
            "selectedSidebar" => self::selectedSidebar
        ]);
    }

    /**
     * @Route("/employee-users/edit/{user}", name="uman_employee_users_edit")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN') or is_granted('ROLE_UMANAGER_IT')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function editAction(Users $user, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $stations = $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findAll();
        $typesEftr = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->findAll();

        try {

            $form = $this->createForm(\App\Easyjet\UmanBundle\Form\EmployeeUserForm::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    // Updating personal fields in the user database
                    $user->setEmailUser($form->get('email_user')->getData());
                    $user->setPersonalEmailUser($form->get('personal_email_user')->getData());
                    if ($request->request->get('typesEftr')) {
                        $typesEftrEntity = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->find($request->request->get('typesEftr'));
                        $user->setTypeEmploye($typesEftrEntity->getEmployeeType());
                        $user->setTypeEftr($typesEftrEntity);
                    } else {
                        $user->setTypeEmploye(0);
                        $user->setIdTypeEftr(0);
                    }

                    $user->setIdStation($request->request->get('stations'));
                    $user->setAdminFunction($request->request->get('admin_function'));
                    $em->persist($user);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "The user has been updated successfully"
                    );
                    return $this->redirect($this->generateUrl('uman_employee_users_show_all'));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('uman_employee_users_edit', array('user' => $user->getIdUser())));
        }

        return $this->renderForm('@EasyjetUman/Employess/edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'stations' => $stations,
            'selectedStation' => $user->getIdStation(),
            'adminFunction' => $user->getAdminFunction(),
            'typesEftr' => $typesEftr,
            'selTypesEftr' => $user->getTypeEftr() ? $user->getTypeEftr()->getId() : 0,
            'selectedSidebar' => self::selectedSidebar,
        ]);
    }
}
