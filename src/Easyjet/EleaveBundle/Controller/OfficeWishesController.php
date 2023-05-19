<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\EleaveBundle\Repository\WishRepository;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;
use App\Easyjet\EleaveBundle\Entity\Wish;
use App\Easyjet\EleaveBundle\Services\RequestMailerService;

class OfficeWishesController extends AbstractController
{

    const SIDEBAR_ITEM = "OFFICE_WISH";

    /**
     * @Route("office-wishes/index", name="eleave_office_wishes_index")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        if (!$myself || (!$myself->isOffice() && !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_OFFICE_ADMIN')  && !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_LINE_MANAGER'))) {
            $this->createNotFoundException("Not access to this page");
        }

        $stationsList =   $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findAll();
        $typeEftrList =   $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->findAll();

        $selectedTypeEftrs = $request->query->get("type_eftr");
        if (!$selectedTypeEftrs) {
            foreach ($typeEftrList as $typeEftr) {
                $selectedTypeEftrs[] = $typeEftr->getId();
            }
        }

        return $this->render('@EasyjetEleave/OfficeWishes/index.html.twig', [
            "from" => $request->query->get("from"),
            "to" => $request->query->get("to"),
            "state" => $request->query->get("state") !== null ? $request->query->get("state") : "0",
            "stationsList" => $stationsList,
            "typeEftrList" => $typeEftrList,
            "currentBase" => $request->query->get("id_station"),
            "currentEftrType" => $selectedTypeEftrs,
            "adminAccess" =>  $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_OFFICE_ADMIN')  || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_LINE_MANAGER'),
            'selectedSidebar' => self::SIDEBAR_ITEM,
        ]);
    }

    /**
     * @Route("office-wishes/search", name="eleave_office_wishes_search")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        if (!$myself) {
            $this->createNotFoundException("User not found");
        }

        $jsonWishesList = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->officeWishesDatatableResults(
            WishRepository::WISH_TYPE_OFFICE,
            $request,
            $this->getUser()->getId(),
            $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_LINE_MANAGER'),
            $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_OFFICE_ADMIN'),
        );

        $response = new Response(
            $jsonWishesList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    /**
     * @Route("office-wishes/edit/{id}", name="eleave_office_wishes_edit")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function wishesEdit(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        
        if (!$user->isOffice() &&  !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_OFFICE_ADMIN') && !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_LINE_MANAGER') ) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You have not access to that page'
            );
            return  $this->redirect($this->generateUrl('eleave_office_wishes_index'));
        }
        $formData['color1'] = $formData['color2'] = $formData['color3'] = "";
        $formData['checked1'] = $formData['checked2'] = $formData['checked3'] = "";
        $formData['disable1'] = $formData['disable2'] = $formData['disable3'] = "";
        $formData['textCheckbox1'] = $formData['textCheckbox2'] = $formData['textCheckbox3'] = 'Accepted';
        $formData['checkbox'] = 'checkbox';

        $isOfficeAdmin =  $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_OFFICE_ADMIN');
        $isLineManager =  $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_LINE_MANAGER');
       
        if (!$isOfficeAdmin && !$isLineManager) {
            $formData['disable1'] = $formData['disable2'] = $formData['disable3'] = "disabled";
            $formData['textCheckbox1'] = $formData['textCheckbox2'] = $formData['textCheckbox3'] = "";
            $formData['checkbox'] = "hidden";
        }

        $isAdmin = $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN') ? true : false;
        $dateMax = date("Y-m-d", mktime(0, 0, 0, date("m") + 18, date("d"), date("Y")));
        $dateMin = date("Y-m", mktime(0, 0, 0, date("m") + 2, 1, date("Y"))) . "-01";
        $autoDisplay = 0;
        $em = $this->getDoctrine()->getManager();

        $wishData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->getOfficeWishData($id, $isOfficeAdmin, $isLineManager, $this->getUser()->getId());
        if (!$wishData) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You have not acces to this wish!'
            );
            return  $this->redirect($this->generateUrl('eleave_office_wishes_index'));
        }

        $isSubmit  = false;
        $today = "0000-00-00";

        //multiple rights management
        if ($isLineManager && $isOfficeAdmin) {
            switch ($wishData->getState()) {
                case "0": // Waiting for LM validation
                    $isLineManager = true;
                    $isOfficeAdmin = false;
                    break;
                default: // In other cases
                    $isLineManager = false;
                    $isOfficeAdmin = true;
                    break;
            }
        }

        if (($isLineManager && $wishData->getUser()->getIdLineManager() != $this->getUser()->getId()) || ($isOfficeAdmin &&  $wishData->getUser()->getIdUser()  == $this->getUser()->getId())) {
            if ($wishData->getUser()->getIdUser() == $this->getUser()->getId()) {
                // It's a request made by himself, he has the right to see it but not to edit it
                $formData['disable1'] = $formData['disable2'] = $formData['disable3'] = "disabled";
                $formData['textCheckbox1'] = $formData['textCheckbox2'] = $formData['textCheckbox3'] = "";
                $formData['checkbox'] = "hidden";
                $isLineManager = false;
                $isOfficeAdmin = false;
            } else {
                // He can't see requests made by people for whom he is not the line manager
                $this->get('session')->getFlashBag()->add(
                    'error',
                    'Request unreachable'
                );
                return  $this->redirect($this->generateUrl('eleave_office_wishes_index'));
            }
        }


        $formData['formId'] = $wishData->getId();
        $formData['choice1Start'] = $wishData->getChoice1Start()->format('Y-m-d')  != '-0001-11-30' ? TimeFormat::convertDateIntoFrance($wishData->getChoice1Start()->format('Y-m-d')) : '';
        $formData['choice1End'] = $wishData->getChoice1End()->format('Y-m-d') != '-0001-11-30' ? TimeFormat::convertDateIntoFrance($wishData->getChoice1End()->format('Y-m-d')) : '';
        $formData['choice1Accepted'] = $wishData->getChoice1Accepted()->format('Y-m-d');
        if ($formData['choice1Accepted'] == "-0001-11-30") {
            $formData['choice1Accepted'] = date("Y-m-d");
        } else {
            $formData['checked1'] = "checked";
            $formData['textCheckbox1'] = "Accepted";
            $formData['color1'] = "green";
        }
        $formData['choice2Start'] =  $wishData->getChoice2Start()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice2Start()->format('Y-m-d'));
        $formData['choice2End'] =  $wishData->getChoice2End()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice2End()->format('Y-m-d'));
        $formData['choice2Accepted'] = $wishData->getChoice2Accepted()->format('Y-m-d');
        if ($formData['choice2Accepted'] == "-0001-11-30") {
            $formData['choice2Accepted'] = date("Y-m-d");
        } else {
            $formData['checked2'] = "checked";
            $formData['textCheckbox2'] = "Accepted";
            $formData['color2'] = "green";
        }

        $formData['choice3Start']  = $wishData->getChoice3Start()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice3Start()->format('Y-m-d'));
        $formData['choice3End']  = $wishData->getChoice3End()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice3End()->format('Y-m-d'));
        $formData['choice3Accepted'] = $wishData->getChoice3Accepted()->format('Y-m-d');

        if ($formData['choice3Accepted'] == "-0001-11-30") {
            $formData['choice3Accepted'] = date("Y-m-d");
        } else {
            $formData['checked3'] = "checked";
            $formData['textCheckbox3'] = "Accepted";
            $formData['color3'] = "green";
        }

        $formData['commentUser'] = htmlentities($wishData->getCommentUser(), NULL, "UTF-8");
        $refus = '';
       
        $selectedRefus = 0;
        if ($isOfficeAdmin || $isLineManager) {
            $checked = "";
            if ($wishData->getState() == 1) {
                $checked = "checked";
            }
            
            //Creation of the drop-down menu of refusals
            $refus = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->findBy(array(), array('label' => 'ASC'));
            $refusData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->find($wishData->getMotifRefus());
            $selectedRefus = $refusData ? $refusData->getId() : 0;
           
        }

        if (($isLineManager && $wishData->getState() == 0) || ($isOfficeAdmin && $wishData->getState() == 1)) {
            $isSubmit = true;
        }

        return $this->render('@EasyjetEleave/OfficeWishes/add.html.twig', [
            'selectedSidebar' => self::SIDEBAR_ITEM,
            'user' => $user,
            'isAdmin' => $isAdmin,
            'autoDisplay' => $autoDisplay,
            'today' => $today,
            'dateMin' => $dateMin,
            'dateMax' => $dateMax,
            'formData' =>  $formData,
            'wishData' => $wishData,
            'refus' => $refus,
            'selectedRefus' => $selectedRefus,
            'title' => 'Edit Wish',
            'isSubmit' => $isSubmit,
            'isOfficeAdmin' => $isOfficeAdmin,
            'isLineManager' => $isLineManager
       ]);
    }
}
