<?php

namespace App\Easyjet\UmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\UmanBundle\Entity\Applications;
use App\Easyjet\UmanBundle\Entity\TypesUsers;

class ApplicationsController extends AbstractController
{

    const selectedSidebar = 'UMAN_ADMIN_APPLICATIONS';

    /**
     * 
     * @Route("/admin/applications/all", name="uman_admin_applications_all")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function applicationsAllAction(Request $request)
    {
        return $this->render('@EasyjetUman/Admin/Applications/list.html.twig', [
            "selectedSidebar" => self::selectedSidebar
        ]);
    }

    /**
     * @Route("/admin/applications/all/search", name="uman_admin_applications_all_search")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function applicationsAllSearchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $jsonApplicationsList = $entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Applications")->applicationsDatatableResults(
            $request
        );

        $response = new Response(
            $jsonApplicationsList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * 
     * @Route("/admin/applications/add", name="uman_admin_application_add")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function applicationAddAction(Request $request)
    {
        try {

            $em = $this->getDoctrine()->getManager();
            $applications = new Applications();
            $form = $this->createForm(\App\Easyjet\UmanBundle\Form\ApplicationsForm::class, $applications);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $data['initiaux'] = $form->get('initiaux')->getData();
                    $data['nom'] =  $form->get('nom')->getData();
                    $data['description'] =  $form->get('description')->getData();
                    $em->getRepository("App\Easyjet\UmanBundle\Entity\Applications")->addApplication($data);
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "The Application has been added successfully"
                    );
                    return $this->redirect($this->generateUrl('uman_admin_applications_all'));
                }
            }
        } catch (\Exception $e) {

            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );

            return $this->redirect($this->generateUrl('uman_admin_application_add'));
        }

        return $this->renderForm('@EasyjetUman/Admin/Applications/add.html.twig', [
            'form' => $form,
            'selectedSidebar' => self::selectedSidebar,
        ]);
    }

    /**
     * 
     * @Route("/admin/applications/remove", name="uman_admin_application_remove")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function applicationRemoveAction(Request $request)
    {
        try {

            $em = $this->getDoctrine()->getManager();
            if ($request->isMethod('post')) {
                if ($request->get("applicationsId")) {
                    $application = $em->getRepository("App\Easyjet\UmanBundle\Entity\Applications")->find($request->get("applicationsId"));
                    $em->remove($application);
                    $em->flush();
                }
            }

            $this->get('session')->getFlashBag()->add(
                'success',
                "The application has been deleted successfully"
            );

            return $this->redirect($this->generateUrl('uman_admin_applications_all'));
        } catch (\Exception $e) {

            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );

            return $this->redirect($this->generateUrl('uman_admin_applications_all'));
        }
    }


    /**
     * 
     * @Route("/admin/applications/edit/{id}", name="uman_admin_application_edit")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @param int $id The Application Id 
     * @return Response A Response instance 
     */
    public function applicationEditAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $applications = $em->getRepository("App\Easyjet\UmanBundle\Entity\Applications")->find($id);
        $form = $this->createForm(\App\Easyjet\UmanBundle\Form\ApplicationsEditForm::class, $applications);
        $form->handleRequest($request);
        $applicationTypeUsers = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesUsers")->findBy(array('idAppli' => $id));
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $applications->setInitiaux($form->get('initiaux')->getData());
                $applications->setNom($form->get('nom')->getData());
                $applications->setDescription($form->get('description')->getData());
                $em->persist($applications);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    "The Application has been updated successfully"
                );
                return $this->redirect($this->generateUrl('uman_admin_applications_all'));
            }
        }

        return $this->renderForm('@EasyjetUman/Admin/Applications/edit.html.twig', [
            'form' => $form,
            'selectedSidebar' => self::selectedSidebar,
            'applicationTypeUsers' => $applicationTypeUsers,
            'id' => $id,
        ]);
    }

    /**
     * 
     * @Route("/admin/applications/type/{type}/{id}", name="uman_admin_add_application_type_users")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @param int $id The Application Id 
     * @param string $type The Application type add/edit 
     * @return Response A Response instance 
     */
    public function applicationTypeUsersAddAction(Request $request, $id, $type)
    {

        $em = $this->getDoctrine()->getManager();
        $applications = new TypesUsers();

        if ($type == 'edit') {
            $applications = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesUsers")->find($id);
            $id = $applications->getIdAppli();
        }

        try {

            $form = $this->createForm(\App\Easyjet\UmanBundle\Form\TypesUsersForm::class, $applications);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {

                    $applications->setType($form->get('type')->getData());
                    $applications->setCommentaire($form->get('commentaire')->getData());
                    $applications->setValeur($form->get('valeur')->getData());
                    $applications->setAdGroup($form->get('adGroup')->getData());
                    if ($type == 'add') {
                        $applications->setIdAppli($id);
                    }
                    $applications->setCanManageRights($form->get('canManageRights')->getData());
                    $em->persist($applications);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "The user has been added successfully"
                    );
                    return $this->redirect($this->generateUrl('uman_admin_application_edit', array('id' => $id)));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('uman_admin_application_edit', array('id' => $id)));
        }

        return $this->renderForm('@EasyjetUman/Admin/Applications/addTypeUsers.html.twig', [
            'form' => $form,
            'selectedSidebar' => self::selectedSidebar,
        ]);
    }

    /**
     * 
     * @Route("admin/applications/type/remove", name="uman_admin_application_type_remove")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function applicationTypeUsersRemoveAction(Request $request)
    {   
        try {
            $em = $this->getDoctrine()->getManager();
            if ($request->isMethod('POST')) {
                if ($request->get("applicationsTypesUsersId")) {
                    $applicationTypeUsers = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesUsers")->find($request->get("applicationsTypesUsersId"));
                    $em->remove($applicationTypeUsers);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        "The Application type user has been removed successfully"
                    );
                    return $this->redirect($this->generateUrl('uman_admin_application_edit', array('id' => $request->get("applicationId"))));
                }
            }
        } catch (\Exception $e) {

            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('uman_admin_application_edit', array('id' => $request->get("applicationId"))));
        }
    }
}
