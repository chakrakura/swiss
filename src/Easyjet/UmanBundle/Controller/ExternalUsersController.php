<?php

namespace App\Easyjet\UmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\UmanBundle\Entity\Users;

class ExternalUsersController extends AbstractController
{

    const selectedSidebar = 'UMAN_EXTERNAL_USERS';


    /**
     * @Route("/external-users/all", name="uman_external_users_show_all")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN') or is_granted('ROLE_UMANAGER_IT')")
     *  @return Response A Response instance
     * @param Request $request The Request object
     */
    public function showAllAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $externalUsers = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->getAllExternalUsers();

        return $this->render('@EasyjetUman/ExternalUsers/showAll.html.twig', [
            "externalUsers" =>  $externalUsers,
            "selectedSidebar" => self::selectedSidebar
        ]);
    }

    /**
     * @Route("/external-users/edit/{user}", name="uman_external_users_edit")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN') or is_granted('ROLE_UMANAGER_IT')")
     * @param Request $request The Request object
     * @return Response A Response instance
     */
    public function editAction(Users $user, Request $request)
    {

        $em        = $this->getDoctrine()->getManager();
        $stations  = $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findAll();
        $typesEftr = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->findAll();

        try {
            if (!preg_match("/^external-/", $user->getLogUser())) {
                throw new \Exception(sprintf("The employee '%s' is not an external account", $user->getLogUser()));
            }

            $form = $this->createForm(\App\Easyjet\UmanBundle\Form\ExternalUserForm::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $user->setEngagementDate($form->get('engagementDateCustom')->getData());
                    $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->setUserAsInternal($user);

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "The user has been imported successfully"
                    );
                    return $this->redirect($this->generateUrl('uman_external_users_show_all'));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('uman_external_users_edit', array('user' => $user->getIdUser())));
        }

        return $this->renderForm('@EasyjetUman/ExternalUsers/edit.html.twig', [
            "user" => $user,
            "form" => $form,
            "selectedSidebar" => self::selectedSidebar,
            'typesEftr' => $typesEftr,
            'selTypesEftr' => $user->getTypeEftr()->getId(),
            'stations' => $stations,
            'selectedStation' => $user->getIdStation(),
        ]);
    }
}
