<?php

namespace App\Easyjet\UmanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\UmanBundle\Entity\Stations;

class StationsController extends AbstractController
{

    const selectedSidebar = 'UMAN_ADMIN_STATIONS';

    /**
     * 
     * @Route("/admin/stations/all", name="uman_admin_stations_all")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function stationsAllAction(Request $request)
    {
        return $this->render('@EasyjetUman/Admin/Stations/showAll.html.twig', [
            "selectedSidebar" => self::selectedSidebar
        ]);
    }


    /**
     * @Route("/admin/stations/all/search", name="uman_admin_stations_all_search")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function stationsAllSearchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $jsonStationsList = $entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->stationsDatatableResults(
            $request
        );

        $response = new Response(
            $jsonStationsList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * 
     * @Route("/admin/stations/add", name="uman_admin_station_add")
     * @Route("/admin/station/edit/{id}", name="uman_admin_station_edit")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     * @param integer $id The station id 
     */
    public function stationAddAction(Request $request, $id = null)
    {
        $em = $this->getDoctrine()->getManager();
        try {
            $stations =  new Stations();
            $message = 'The station has been created successfully';
            $redirectUrl = $this->generateUrl('uman_admin_station_add');

            if ($id) {
                $stations  = $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->find($id);
                $message = 'The station has been upadeted successfully';
                $redirectUrl = $this->generateUrl('uman_admin_station_edit', array('id' => $id));
            }
            $form = $this->createForm(\App\Easyjet\UmanBundle\Form\StationsForm::class, $stations);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $stations->setIataCode($form->get('iataCode')->getData());
                    $stations->setCountry($form->get('country')->getData());
                    $stations->setStationPhone($form->get('stationPhone')->getData());
                    $stations->setComments(addslashes($form->get('comments')->getData()));
                    $stations->setAirportName($form->get('airportName')->getData());
                    $stations->setCityName($form->get('cityName')->getData());
                    $em->persist($stations);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add(
                    'success',
                    $message
                );
                return $this->redirect($this->generateUrl('uman_admin_stations_all'));
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($redirectUrl);
        }

        return $this->renderForm('@EasyjetUman/Admin/Stations/add.html.twig', [
            'form' => $form,
            'selectedSidebar' => self::selectedSidebar,
        ]);
    }



    /**
     * 
     * @Route("admin/stations/remove", name="uman_admin_station_remove")
     * @Security("is_granted('ROLE_UMANAGER_ADMIN')")
     * @param Request $request The Request object 
     * @return Response A Response instance 
     */
    public function stationRemoveAction(Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            if ($request->get("station-id")) {
                $station = $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->find($request->get("station-id"));
                $em->remove($station);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The station has been deleted successfully'
                );
                return $this->redirect($this->generateUrl('uman_admin_stations_all'));
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('uman_admin_stations_all'));
        }
    }
}
