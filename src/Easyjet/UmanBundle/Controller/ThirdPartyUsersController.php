<?php

namespace App\Easyjet\UmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\UmanBundle\Entity\Users;


class ThirdPartyUsersController extends AbstractController
{

    const selectedSidebar = 'UMAN_THIRDPARTY_USERS';

    /**
     * @Route("/third-party-users/all", name="uman_third_party_users_show_all")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN') or is_granted('ROLE_UMANAGER_IT')")
     * @param Request $request The Request object 
     * @return Response A Response instance
     */
    public function showAllAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $thirdPartyUsers = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->getAllThirdPartyUsers();

        return $this->render('@EasyjetUman/ThirdPartyUsers/showAll.html.twig', [
            "thirdPartyUsers" =>  $thirdPartyUsers,
            "selectedSidebar" => self::selectedSidebar
        ]);
    }

    /**
     * @Route("/third-party-users/edit/{user}", name="uman_third_party_users_edit")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN') or is_granted('ROLE_UMANAGER_IT')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function editAction(Users $user, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        // Search for personal user data
        $stations = $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findAll();
        $typesEftr = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->findAll();

        try {
            $form = $this->createForm(\App\Easyjet\UmanBundle\Form\ThirdPartyUserForm::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    // Updating personal fields in the user database
                    $user->setEmailUser($form->get('email_user')->getData());
                    if ($request->request->get('typesEftr')) {
                        $typesEftrEntity = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->find($request->request->get('typesEftr'));
                        $user->setTypeEmploye($typesEftrEntity->getEmployeeType());
                        $user->setTypeEftr($typesEftrEntity);
                    } else {
                        $user->setTypeEmploye(0);
                        $user->setIdTypeEftr(0);
                    }

                    $user->setIdStation($request->request->get('stations'));

                    $user->setLogUser($form->get('logUser')->getData());
                    $user->setPrenomUser($form->get('prenomUser')->getData());
                    $user->setNomUser($form->get('nomUser')->getData());
                    $user->setTelUser($form->get('telUser')->getData());
                    $user->setTel2User($form->get('telUser')->getData());
                    $user->setAdminFunction($request->request->get('admin_function'));
                    $em->persist($user);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "The user has been updated successfully"
                    );
                    return $this->redirect($this->generateUrl('uman_third_party_users_show_all'));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('uman_third_party_users_edit', array('user' => $user->getIdUser())));
        }

        return $this->renderForm('@EasyjetUman/ThirdPartyUsers/edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'stations' => $stations,
            'selectedStation' => $user->getIdStation(),
            'adminFunction' => $user->getAdminFunction(),
            'typesEftr' => $typesEftr,
            'selTypesEftr' =>  $user->getTypeEftr()->getId(),
            'selectedSidebar' => self::selectedSidebar,
        ]);
    }


    /**
     * @Route("/third-party-users/delete", name="uman_third_party_users_delete")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN') or is_granted('ROLE_UMANAGER_IT')")
     */
    public function deleteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // Search for personal user data
        $user = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($request->get('userId'));
        try {
            $user->setActiveUser(0);
            $em->persist($user);
            $em->flush();
            $sql = "DELETE FROM assoc_droits_users WHERE id_user='" . $user->getIdUser() . "'";
            $em->getConnection()->prepare($sql)->executeQuery();
            $this->get('session')->getFlashBag()->add(
                'success',
                "The user has been deleted successfully"
            );
            return $this->redirect($this->generateUrl('uman_third_party_users_show_all'));
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('uman_third_party_users_show_all'));
        }
    }
}
