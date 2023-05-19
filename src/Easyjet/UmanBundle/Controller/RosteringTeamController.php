<?php

namespace App\Easyjet\UmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\UmanBundle\Entity\RosteringTeam;

class RosteringTeamController extends AbstractController
{

    const selectedSidebar = 'UMAN_ADMIN_ROSTERING_TEAM';

    /**
     * 
     * @Route("/admin/rostering/all", name="uman_admin_rostering_all")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function rosteringAllAction(Request $request)
    {

        return $this->render('@EasyjetUman/Admin/Rostering/rosteringAll.html.twig', [
            "selectedSidebar" => self::selectedSidebar
        ]);
    }


    /**
     * @Route("/admin/rostering/all/search", name="uman_admin_rostering_all_search")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function rosteringAllSearchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $jsonUsersList = $entityManager->getRepository("App\Easyjet\UmanBundle\Entity\RosteringTeam")->RosteringDatatableResults(
            $request
        );

        $response = new Response(
            $jsonUsersList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * 
     * @Route("/admin/rostering/add", name="uman_admin_rostering_add_member")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function modalRosteringAddAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('post')) {
            if ($request->get("user")) {
                $user = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->findOneBy(array('logUser' => $request->get("user")));
                $roteringMember = new RosteringTeam();
                $roteringMember->setUser($user);
                $roteringMember->setIsAdmin(0);
                $em->persist($roteringMember);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    "The user has been added successfully"
                );
                return $this->redirect($this->generateUrl("uman_admin_rostering_all"));
            }
        }

        return $this->render('@EasyjetUman/Admin/Rostering/modalRosteringAdd.html.twig', [
            "selectedSidebar" => self::selectedSidebar,
            "usersList" => $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->findUserAddableToRostering()
        ]);
    }

    /**
     * @Route(
     *    "/admin/rostering/rostering-admin/assoc-{assoc}/{isAdmin}", 
     *     requirements={"asso" = "\d+", "isAdmin" = "^(yes|no)$"},
     *    name="set_rostering_admin"
     * )
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function setRosteringAdminAction($assoc, $isAdmin)
    {
        $return = array("success" => false);
        try {
            $em = $this->getDoctrine()->getManager();
            $rosteringTeamUser = $em->getRepository("App\Easyjet\UmanBundle\Entity\RosteringTeam")->find($assoc);
            switch ($isAdmin) {
                case "yes":
                    $rosteringTeamUser->setIsAdmin(true);
                    break;
                case "no":
                    $rosteringTeamUser->setIsAdmin(false);
                    break;
                default:
                    throw new \Exception("Unable to find the requested assoc");
                    break;
            }

            $em->persist($rosteringTeamUser);
            $em->flush();
            $return['success'] = true;
        } catch (\Exception $e) {
            $return['success'] = false;
            $return['error'] = $e->getMessage();
        }
        $response = new Response(json_encode($return));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    /**
     * 
     * @Route("uman/admin/rostering/remove", name="uman_admin_rostering_remove")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function rosteringRemoveAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            if ($request->isMethod('post')) {
                if ($request->get("rostering-id")) {
                    $rostering = $em->getRepository("App\Easyjet\UmanBundle\Entity\RosteringTeam")->find($request->get("rostering-id"));
                    $em->remove($rostering);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "The user has been removed successfully"
                    );
                    return $this->redirect($this->generateUrl("uman_admin_rostering_all"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("uman_admin_rostering_all"));
        }
    }
}
