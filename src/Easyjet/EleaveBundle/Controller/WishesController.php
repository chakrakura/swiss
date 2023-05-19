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

class WishesController extends AbstractController
{
    const SIDEBAR_ITEM = "CABIN_WISHES";
    

    /**
     * @Route("/wishes/index", name="eleave_wishes_index")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function indexAction(Request $request)
    {
      
        $em = $this->getDoctrine()->getManager();
        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        if (!$myself || (!$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN') && $myself->isOffice())) {
            $this->createNotFoundException("Not access to this page");
        }
       
        if (isset($_GET["btn-to-csv"])) {
            $filename = "eleave-" . date("YmdHis");
            $content = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->wishesToCsv(
                WishRepository::WISH_TYPE_CABIN,
                $request,
                $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM'),
                $this->getUser()->getId()
            );
            $response = new Response($content);
            $response->headers->set('Content-Type', 'text/csv');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s.csv"', $filename));
            return $response;
        }

        $stationsList =   $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findAll();
        $typeEftrList =   $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->findAll();

        $selectedTypeEftrs = $request->query->get("type_eftr");
        if (!$selectedTypeEftrs) {
            foreach ($typeEftrList as $typeEftr) {
                $selectedTypeEftrs[] = $typeEftr->getId();
            }
        }
        $preferenceList = array(
            'automatic' => 'Automatic',
            'slve' => 'SLVE',
            'spt' => 'SP/T',
            'ulv' => 'ULV',
            'ldo_ado' => 'LDO/ADO'
        );
        $selectedLeavePreference = $request->query->get("choice1_leave_preference");
        if (!$selectedLeavePreference) {
            $selectedLeavePreference[] = 'automatic';
            $selectedLeavePreference[] = 'slve';
            $selectedLeavePreference[] = 'spt';
            $selectedLeavePreference[] = 'ulv';
            $selectedLeavePreference[] = 'ldo_ado';
        }

        return $this->render('@EasyjetEleave/Wishes/index.html.twig', [
            "from" =>  $request->query->get('from'),
            "to" =>  $request->query->get('to'),
            "state" => $request->query->get("state") !== null ? $request->query->get("state") : "0",
            "preferenceList" => $preferenceList,
            "selectedLeavePreference" => $selectedLeavePreference,
            "stationsList" => $stationsList,
            "eleaveUser" =>  $request->query->get("eleaveUser"),
            "typeEftrList" => $typeEftrList,
            "currentBase" =>  $request->query->get("id_station"),
            "currentEftrType" => $selectedTypeEftrs,
            "adminAccess" =>   $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN'),
            "myself" => $myself,
            'selectedSidebar' =>  !$myself->isOffice() || (($myself->isOffice() && $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN'))) ? self::SIDEBAR_ITEM : '',
        ]);
    }

    /**
     * @Route("wishes/search", name="eleave_wishes_search")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_SWISSINSIDE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function searchAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        if (!$myself) {
            $this->createNotFoundException("User not found");
        }

        $jsonWishesList = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->wishesDatatableResults(
            WishRepository::WISH_TYPE_CABIN,
            $request,
            $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM'),
            $this->getUser()->getId()
        );

        $response = new Response(
            $jsonWishesList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }



    /**
     * @Route("wishes/add", name="eleave_wishes_add")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function wishesAdd(Request $request, RequestMailerService $requestMailerService)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        if ($user->isOffice() &&  !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN')) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You have not access to that page'
            );
            return  $this->redirect($this->generateUrl('eleave_wishes_index'));
        }
       
        $formData['color1'] = $formData['color2'] = $formData['color3'] = '';
        $formData['checked1'] = $formData['checked2'] = $formData['checked3'] = '';
        $formData['disable1'] = $formData['disable2'] = $formData['disable3'] = '';
        $formData['textCheckbox1'] = $formData['textCheckbox2'] = $formData['textCheckbox3'] = 'Accepted';
        $formData['checkbox'] = 'checkbox';
        $formData['choice1Start'] =  $formData['choice2Start'] =  $formData['choice3Start'] = '';
        $formData['choice1End'] = $formData['choice2End'] = $formData['choice3End'] = '';
        $formData['choice1Accepted'] =  $formData['choice2Accepted'] = $formData['choice3Accepted'] = '';

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN') && !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') && !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM')) {
            $formData['disable1'] = $formData['disable2'] = $formData['disable3'] = 'disabled';
            $formData['textCheckbox1'] = $formData['textCheckbox2'] = $formData['textCheckbox3'] = '';
            $formData['checkbox'] = 'hidden';
        }

        $formData['id'] = '';
        $isAdmin = $isPilot = false;
        $autoDisplay = $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM') ?  1 :  0;

        if ($user->isPilot()) {
            $isPilot = true;
        }

        $today = date("Y-m-d");
        $dateMax = date("Y-m-d", mktime(0, 0, 0, date("m") + 16, date("d"), date("Y")));
        $dateMin = date("Y-m", mktime(0, 0, 0, date("m") + 2, 1, date("Y"))) . "-01";
       
        $preferenceList = array(
            '' => '-- Select --',
            'automatic' => 'Automatic',
            'slve' => 'SLVE',
            'spt' => 'SP/T',
            'ulv' => 'ULV',
            'ldo_ado' => 'LDO/ADO'
        );

        $wishData = new Wish();
        // Creation of a new wish
        if ($request->isMethod('POST')) {
            try {
                if ($request->request->get('choice1_start') && TimeFormat::convertDateFranceToEnglish($request->request->get('choice1_start')) > $dateMax) {
                    throw new \Exception("Choice 1 : You cannot do a leave request after the " . TimeFormat::convertDateIntoFrance($dateMax) .  ". Please change your wish date or wait the required time to do this request.");
                }
                if ($request->request->get('choice2_start') && TimeFormat::convertDateFranceToEnglish($request->request->get('choice2_start')) > $dateMax) {
                    throw new \Exception("Choice 2 : You cannot do a leave request after the " . TimeFormat::convertDateIntoFrance($dateMax) .  ". Please change your wish date or wait the required time to do this request.");
                }
                if ($request->request->get('choice3_start') && TimeFormat::convertDateFranceToEnglish($request->request->get('choice3_start')) > $dateMax) {
                    throw new \Exception("Choice 3 : You cannot do a leave request after the " . TimeFormat::convertDateIntoFrance($dateMax) .  ". Please change your wish date or wait the required time to do this request.");
                }

                $eleaveWishObj =   new Wish();
                $eleaveWishObj->setMotifRefus(0);
                $eleaveWishObj->setUser($user);
                $eleaveWishObj->setChoice1LeavePreference($request->request->get('choice1_leave_preference'));
                $eleaveWishObj->setRequestDate(\DateTime::createFromFormat('Y-m-d', date('Y-m-d')));
                $eleaveWishObj->setRequestType(0);
                $eleaveWishObj->setChoice1Start(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_start'))));
                $eleaveWishObj->setChoice1End(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_end'))));
                $eleaveWishObj->setChoice1Accepted(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_accepted'))));
                $eleaveWishObj->setChoice2Start(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice2_start'))));
                $eleaveWishObj->setChoice2End(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice2_end'))));
                $eleaveWishObj->setChoice2Accepted(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice2_accepted'))));
                $eleaveWishObj->setChoice3Start(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice3_start'))));
                $eleaveWishObj->setChoice3End(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice3_end'))));
                $eleaveWishObj->setChoice3Accepted(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice3_accepted'))));
                $eleaveWishObj->setValidationDate(\DateTime::createFromFormat('Y-m-d', '0000-00-00'));
                $eleaveWishObj->setCommentUser(addslashes($request->request->get('comment_user')));
               
                $count = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->checkUserExistingLeaves($request, $this->getUser()->getId());

                if ($count > 0) {
                    throw new \Exception("You are trying to submit a request for a leave period which is already in the database. Please try again using a different leave period!");
                } else {
                    $em->persist($eleaveWishObj);
                    $em->flush();
                    $choice1 = $request->request->get('choice1_start') && $request->request->get('choice1_end') ? $request->request->get('choice1_start') . " - " . $request->request->get('choice1_end') : '';
                    $choice2 = $request->request->get('choice2_start') && $request->request->get('choice2_end') ? $request->request->get('choice2_start') . " - " . $request->request->get('choice2_end') : '';
                    $choice3 = $request->request->get('choice3_start') && $request->request->get('choice3_end') ? $request->request->get('choice3_start') . " - " . $request->request->get('choice3_end') : '';
                    $commentUser = htmlentities($request->request->get('comment_user'), NULL, "UTF-8");
                    $comment = str_replace("\n", "<br/>", $commentUser);
                    // Send mail to the roster manager

                    $params = [
                        'date' => date("Y-m-d"),
                        'choice1' => $choice1,
                        'choice2' => $choice2,
                        'choice3' => $choice3,
                        'comment' => $comment,
                        'user' => $user
                    ];

                    $emailsList = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Email")->findAll();

                    foreach ($emailsList as $list) {
                        $requestMailerService->sendMail('New eLeave request',$list->getLabel(),'@EasyjetEleave/EmailTemplates/mailRequest.html.twig',$params);
                    }

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'You have successfully applied for leaves'
                    );
                    return  $this->redirect($this->generateUrl('eleave_wishes_index'));
                }
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    $e->getMessage()
                );
                return  $this->redirect($this->generateUrl('eleave_wishes_add'));
            }
        }

        return $this->render('@EasyjetEleave/Wishes/add.html.twig', [
            'selectedSidebar' => self::SIDEBAR_ITEM,
            'myself' => $user,
            'user' => $user,
            'isAdmin' => $isAdmin,
            'autoDisplay' => $autoDisplay,
            'isPilot' => $isPilot,
            'today' => $today,
            'dateMax' => $dateMax,
            'dateMin' => $dateMin,
            'preferenceList' => $preferenceList,
            'formData' => $formData,
            'selectedLeavePreference' => $request->request->get('choice1_leave_preference'),
            'wishData' => $wishData,
            'wishUser' => $this->getUser()->getId(),
            'title' => 'Add Wish',
            'isSubmit' => true,
            'isEdit' => false

        ]);
    }


    /**
     * @Route("wishes/edit/{id}", name="eleave_wishes_edit")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function wishesEdit(Request $request, $id, RequestMailerService $requestMailerService)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        if ($user->isOffice() &&  !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN')) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You have not access to that page'
            );
            return  $this->redirect($this->generateUrl('eleave_wishes_index'));
        }
        $refus = [];
        $selectedRefus = 0;
        $formData['color1'] = $formData['color2'] = $formData['color3'] = '';
        $formData['checked1'] = $formData['checked2'] = $formData['checked3'] = '';
        $formData['disable1'] = $formData['disable2'] = $formData['disable3'] = '';
        $formData['textCheckbox1'] = $formData['textCheckbox2'] = $formData['textCheckbox3'] = "Accepted";
        $formData['checkbox'] = 'checkbox';

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN') && !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') && !$this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM')) {
            $formData['disable1'] = $formData['disable2'] = $formData['disable3'] = "disabled";
            $formData['textCheckbox1'] = $formData['textCheckbox2'] = $formData['textCheckbox3'] = '';
            $formData['checkbox'] = "hidden";
        }

        $isAdmin = $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN') ? true : false;
        $dateMax = date("Y-m-d", mktime(0, 0, 0, date("m") + 16, date("d"), date("Y")));
        $dateMin = date("Y-m", mktime(0, 0, 0, date("m") + 2, 1, date("Y"))) . "-01";
        $autoDisplay = 0;
        
        $preferenceList = array(
            '' => '-- Select --',
            'automatic' => 'Automatic',
            'slve' => 'SLVE',
            'spt' => 'SP/T',
            'ulv' => 'ULV',
            'ldo_ado' => 'LDO/ADO'
        );

        $wishData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->getWishData($id, $isAdmin, $this->getUser()->getId());
        if (!$wishData) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You have not acces to this wish!'
            );
            return  $this->redirect($this->generateUrl('eleave_wishes_index'));
        }

        $isPilot = $isSubmit  = false;
        if ($isAdmin && $wishData->getState() == 0) {
            $isSubmit = true;
        }

        $today = "0000-00-00";
        if ($user->isPilot()) {
            $isPilot = true;
        }

        $formData['id'] = $wishData->getId();
        $formData['choice1Start'] = $wishData->getChoice1Start()->format('Y-m-d') != '-0001-11-30' ? TimeFormat::convertDateIntoFrance($wishData->getChoice1Start()->format('Y-m-d')) : null;
        $formData['choice1End'] =  $wishData->getChoice1End()->format('Y-m-d') != '-0001-11-30' ? TimeFormat::convertDateIntoFrance($wishData->getChoice1End()->format('Y-m-d')) : null;
        $formData['choice1Accepted'] = $wishData->getChoice1Accepted()->format('d/m/Y');
        if ($formData['choice1Accepted'] == "30/11/-0001") {
            $formData['choice1Accepted'] = date("d/m/Y");
        } else {
            $formData['checked1'] = "checked";
            $formData['textCheckbox1'] = "Accepted";
            $formData['color1'] = "green";
        }
        $formData['choice2Start'] =  $wishData->getChoice2Start()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice2Start()->format('Y-m-d'));
        $formData['choice2End'] =  $wishData->getChoice2End()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice2End()->format('Y-m-d'));
        $formData['choice2Accepted'] = $wishData->getChoice2Accepted()->format('d/m/Y');
        if ($formData['choice2Accepted'] == "30/11/-0001") {
            $formData['choice2Accepted'] = date("d/m/Y");
        } else {
            $formData['checked2'] = "checked";
            $formData['textCheckbox2'] = "Accepted";
            $formData['color2'] = "green";
        }

        $formData['choice3Start']  = $wishData->getChoice3Start()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice3Start()->format('Y-m-d'));
        $formData['choice3End']  = $wishData->getChoice3End()->format('Y-m-d') == '-0001-11-30' ? null : TimeFormat::convertDateIntoFrance($wishData->getChoice3End()->format('Y-m-d'));
        $formData['choice3Accepted'] = $wishData->getChoice3Accepted()->format('d/m/Y');

        if ($formData['choice3Accepted'] == "30/11/-0001") {
            $formData['choice3Accepted'] = date("d/m/Y");
        } else {
            $formData['checked3'] = "checked";
            $formData['textCheckbox3'] = "Accepted";
            $formData['color3'] = "green";
        }

        $formData['commentUser'] = htmlentities($wishData->getCommentUser(), NULL, "UTF-8");
        if ($isAdmin) {
            $autoDisplay = 1;
            $checked = "";
            if ($wishData->getState() == 1) {
                $checked = "checked";
            }

            //Creation of the drop-down menu of refusals
            $refus = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->findBy(array(), array('label' => 'ASC'));
            $refusData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->find($wishData->getMotifRefus());
            $selectedRefus = $refusData ? $refusData->getId() : 0;
        }

        if ($request->isMethod('post')) {

            try {
                $state = 0;
                if ($request->request->get('motif_refus')) {
                    $state = 1;
                }
                $validationDate = "";
                $stateVal = $wishData->getState();
                if (!$isAdmin && $wishData->getState()) {
                    throw new \Exception("You cannot edit this leave request");
                }
                $wishData->setChoice1Start(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_start'))));
                $wishData->setChoice1End(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_end'))));
                $wishData->setChoice1Accepted(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice1_accepted'))));
                $wishData->setChoice2Start(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice2_start'))));
                $wishData->setChoice2End(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice2_end'))));
                $wishData->setChoice2Accepted(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice2_accepted'))));
                $wishData->setChoice3Start(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice3_start'))));
                $wishData->setChoice3End(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice3_end'))));
                $wishData->setChoice3Accepted(\DateTime::createFromFormat('Y-m-d', TimeFormat::date($request->request->get('choice3_accepted'))));
                $wishData->setcommentUser(addslashes($request->request->get('comment_user')));
                $wishData->setChoice1LeavePreference($request->request->get('choice1_leave_preference'));

                if ($isAdmin) {

                    if (($state != 0 && $wishData->getValidationDate()->format('Y-m-d') == "-0001-11-30") || ($wishData->getChoice1Accepted()->format('Y-m-d') == "-0001-11-30" && $wishData->getChoice2Accepted()->format('Y-m-d') == "-0001-11-30" && $wishData->getChoice3Accepted()->format('Y-m-d') == "-0001-11-30" &&
                        ($request->request->get('choice1_accepted') != "0000-00-00" || $request->request->get('choice2_accepted') != "0000-00-00" || $request->request->get('choice3_accepted') != "0000-00-00"))) {
                        $validationDate = date("Y-m-d");
                    } else {
                        $validationDate = $wishData->getValidationDate()->format('Y-m-d') == "-0001-11-30" ?  date("Y-m-d") :  $wishData->getValidationDate()->format('Y-m-d');
                    }
                    $choice1Accepted  =  $request->request->get('choice1_accepted');
                    $choice2Accepted  =  $request->request->get('choice2_accepted');
                    $choice3Accepted  =  $request->request->get('choice3_accepted');

                    if ($state != 1) {
                        //The leave request is not refused
                        $editState = '';
                        if ($choice1Accepted || $choice2Accepted || $choice3Accepted) {
                            $editState = 2;
                            $state = 2;
                        }
                        if ($choice1Accepted) {
                            $choice2Accepted = "";
                            $choice3Accepted = "";
                        } elseif ($choice2Accepted) {
                            $choice3Accepted = "";
                        }
                    } else {
                        // The leave request is refused
                        $editState = 1;
                        $state = 1;
                        $choice1Accepted = $choice2Accepted = $choice3Accepted = "";
                    }
                    if ($state > 0) {
                        $isRostering = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->isRostering($this->getUser()->getId());
                        if ($isRostering) {
                            $wishData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->getWishData($id, $isAdmin, $this->getUser()->getId());
                            $isUserRostering = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->isRostering($wishData->getUser()->getIdUser());
                            $isRosteringAdmin = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->isRosteringAdmin($this->getUser()->getId());

                            if ($isUserRostering && !$isRosteringAdmin) {
                                $this->get('session')->getFlashBag()->add(
                                    'error',
                                    "A rostering team member cannot validate rostering team member's hollidays unitl he's a rostering team administrator"
                                );
                                return  $this->redirect($this->generateUrl('eleave_wishes_index'));
                            }
                        }
                    }

                    $wishData->setState($editState);
                    $wishData->setValidationDate(\DateTime::createFromFormat('Y-m-d', $validationDate));
                    $wishData->setTotalLeaveDayDue((float) $request->request->get('total_leave_day_due'));
                    $wishData->setTotalLeaveDayConfirmed((float) $request->request->get('total_leave_day_confirmed'));
                    $wishData->setTotalLeaveDayTaken((float) $request->request->get('total_leave_day_taken'));
                    $wishData->setRemainingLeave((float) $request->request->get('remaining_leave'));
                    $wishData->setRemainingRequest((float) $request->request->get('remaining_request'));
                    $wishData->setMotifRefus((int) $request->request->get('motif_refus'));

                    $count = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->checkUserExistingLeaves($request, $wishData->getUser()->getIdUser());

                    if ($count > 0) {
                        $this->get('session')->getFlashBag()->add(
                            'error',
                            "You are trying to submit a request for a leave period which is already in the database. Please try again using a different leave period!"
                        );
                        return  $this->redirect($this->generateUrl('eleave_wishes_index'));
                    } else {

                        $em->persist($wishData);
                        $em->flush();


                        // We send an email to the user if there is a change of state
                        if ($stateVal != $state) {

                            $choice1 = $request->request->get('choice1_start') && $request->request->get('choice1_end') ? $request->request->get('choice1_start') . " - " . $request->request->get('choice1_end') : '';
                            $choice2 = $request->request->get('choice2_start') && $request->request->get('choice2_end') ? $request->request->get('choice2_start') . " - " . $request->request->get('choice2_end') : '';
                            $choice3 = $request->request->get('choice2_start') && $request->request->get('choice2_end') ? $request->request->get('choice3_start') . " - " . $request->request->get('choice3_end') : '';
                            $commentUser = htmlentities($request->request->get('comment_user'), NULL, "UTF-8");
                            $comment = str_replace("\n", "<br/>", $commentUser);

                            //Send the rejection email
                            if ($state == 1) {
                                $refusData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Refus")->find($request->request->get('motif_refus'));
                                $params = [
                                    'date' => date("d/m/Y"),
                                    'totalLeaveDayDue' => (float) $request->request->get('total_leave_day_due'),
                                    'totalLeaveDayConfirmed' => (float) $request->request->get('total_leave_day_confirmed'),
                                    'totalLeaveDayTaken' => (float) $request->request->get('total_leave_day_taken'),
                                    'remainingLeave' => (float) $request->request->get('remaining_leave'),
                                    'remainingRequest' => (float) $request->request->get('remaining_request'),
                                    'refuse' => $refusData->getLabel(),
                                    'choice1' => $choice1,
                                    'choice2' => $choice2,
                                    'choice3' => $choice3,
                                ];
                                $requestMailerService->sendMail('eLeave request refused',$wishData->getUser()->getEmailUser(),'@EasyjetEleave/EmailTemplates/mailRefused.html.twig',$params);
                            }

                            // Send confirmation email
                            if ((int)$state == 2) {
                                if ($request->request->get('choice1_accepted')) $choice = $choice1;
                                if ($request->request->get('choice2_accepted')) $choice = $choice2;
                                if ($request->request->get('choice3_accepted')) $choice = $choice3;

                                $params = [
                                    'date' => date("d/m/Y"),
                                    'totalLeaveDayDue' => (float) $request->request->get('total_leave_day_due'),
                                    'totalLeaveDayConfirmed' => (float) $request->request->get('total_leave_day_confirmed'),
                                    'totalLeaveDayTaken' => (float) $request->request->get('total_leave_day_taken'),
                                    'remainingLeave' => (float) $request->request->get('remaining_leave'),
                                    'remainingRequest' => (float) $request->request->get('remaining_request'),
                                    'nomPrenom' => $wishData->getUser(),
                                    'choice1' => $choice1,
                                    'choice2' => $choice2,
                                    'choice3' => $choice3,
                                    'choice' => $choice,
                                ];
                                $requestMailerService->sendMail('eLeave request accepted',$wishData->getUser()->getEmailUser(),'@EasyjetEleave/EmailTemplates/mailAccepted.html.twig',$params);
                            }
                        }
                        $this->get('session')->getFlashBag()->add(
                            'success',
                            'Leave request updated succesfully'
                        );
                        return  $this->redirect($this->generateUrl('eleave_wishes_index'));
                    }
                } else {
                    $count = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->checkUserExistingLeaves($request, $wishData->getUser()->getIdUser());
                    if ($count > 0) {
                        throw new \Exception("You are trying to submit a request for a leave period which is already in the database. Please try again using a different leave period!");
                    } else {
                        $em->persist($wishData);
                        $em->flush();
                        return  $this->redirect($this->generateUrl('eleave_wishes_index'));
                    }
                }
            } catch (\Exception $e) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    $e->getMessage()
                );
                return  $this->redirect($this->generateUrl('eleave_wishes_index'));
            }
        }

        return $this->render('@EasyjetEleave/Wishes/add.html.twig', [
            'myself' => $user,
            'user' => $wishData->getUser(). ' (' .$wishData->getUser()->getWorkRatioPercent() .'%)',
            'isAdmin' => $isAdmin,
            'autoDisplay' => $autoDisplay,
            'isPilot' => $isPilot,
            'today' => $today,
            'dateMin' => $dateMin,
            "preferenceList" => $preferenceList,
            "selectedLeavePreference" => $wishData->getChoice1LeavePreference(),
            'dateMax' => $dateMax,
            'formData' =>  $formData,
            'wishData' => $wishData,
            'refus' => $refus,
            'selectedRefus' => $selectedRefus,
            'title' => 'Edit Wish',
            'wishUser' => $wishData->getUser()->getIdUser(),
            'isSubmit' => $isSubmit,
            'isEdit' => true,
            'selectedSidebar' => self::SIDEBAR_ITEM,
        ]);
    }


    /**
     * @Route("wishes/delete", name="eleave_wishes_delete")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function wishesDelete(Request $request, RequestMailerService $requestMailerService)
    {

        $em = $this->getDoctrine()->getManager();
        $isAdmin = $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_CREW_ADMIN_+_LM') || $this->get('security.authorization_checker')->isGranted('ROLE_ELEAVE_ADMIN') ? true : false;
        $wishData = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->getWishData($request->get('id'), $isAdmin, $this->getUser()->getId());
        $inTwoMonths = date("Y-m-d", mktime(date("H"), date("i"), date("s"), date("m") + 2, date("d"), date("Y")));
      
        if (!$wishData) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'You cannot delete this wish!'
            );
            return  $this->redirect($this->generateUrl('eleave_wishes_index'));
        }

        $user = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($wishData->getUser()->getIdUser());
        $choice1Start    = $wishData->getChoice1Start()->format('Y-m-d') != "-0001-11-30"   ? $wishData->getChoice1Start()->format('Y-m-d') : '0000-00-00';
        $choice2Start    = $wishData->getChoice2Start()->format('Y-m-d') != "-0001-11-30"   ? $wishData->getChoice2Start()->format('Y-m-d'): '0000-00-00';
        $choice3Start    = $wishData->getChoice3Start()->format('Y-m-d') != "-0001-11-30"   ? $wishData->getChoice3Start()->format('Y-m-d'): '0000-00-00';
        $choice1End      = $wishData->getChoice1End()->format('Y-m-d')   != "-0001-11-30"     ? $wishData->getChoice1End()->format('Y-m-d'): '0000-00-00';
        $choice2End      = $wishData->getChoice2End()->format('Y-m-d')   != "-0001-11-30"      ? $wishData->getChoice2End()->format('Y-m-d'): '0000-00-00';
        $choice3End      = $wishData->getChoice3End()->format('Y-m-d')   != "-0001-11-30"      ? $wishData->getChoice3End()->format('Y-m-d'): '0000-00-00';
        $choice1Accepted = $wishData->getChoice1Accepted()->format('Y-m-d')!= "-0001-11-30" ? $wishData->getChoice1Accepted()->format('Y-m-d'): '0000-00-00';
        $choice2Accepted = $wishData->getChoice2Accepted()->format('Y-m-d')!= "-0001-11-30" ? $wishData->getChoice2Accepted()->format('Y-m-d'): '0000-00-00';
        $choice3Accepted = $wishData->getChoice3Accepted()->format('Y-m-d')!= "-0001-11-30" ? $wishData->getChoice3Accepted()->format('Y-m-d'): '0000-00-00';
      
        if (!$isAdmin) {

            $quit = false;
            // The accept period must not start before 2 months, otherwise we do not delete and we stop the script
            if ($choice1Accepted  != "0000-00-00" && ($choice1Start < $inTwoMonths ||  $choice1End < $inTwoMonths)) $quit = true;
            if ($choice2Accepted  != "0000-00-00" && ($choice2Start < $inTwoMonths || $choice2End < $inTwoMonths)) $quit = true;
            if ($choice3Accepted  != "0000-00-00" && ($choice3Start < $inTwoMonths || $choice3End < $inTwoMonths)) $quit = true;
            if ($quit) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    'You cannot delete this wish!'
                );
                return $this->redirect($this->generateUrl("eleave_wishes_index"));
            }
            // We send an email to the admins so that they are aware of the deletion of the report
        }

        $choice1 = TimeFormat::convertDateIntoFrance($choice1Start) . " - " . TimeFormat::convertDateIntoFrance($choice1End);
        $choice2 = TimeFormat::convertDateIntoFrance($choice2Start) . " - " . TimeFormat::convertDateIntoFrance($choice2End);
        $choice3 = TimeFormat::convertDateIntoFrance($choice3Start) . " - " . TimeFormat::convertDateIntoFrance($choice3End);
        
        $wish = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->find($request->get('id'));
        $em->remove($wish);
        $em->flush();
        $params = [
            'date' => date("d/m/Y"),
            'choice1' => $choice1,
            'choice2' => $choice2,
            'choice3' => $choice3,
            'user' => $user
        ];
      
        $emailsList = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Email")->findAll();
        foreach ($emailsList as $list) {
            $requestMailerService->sendMail('eLeave request deleted',$list->getLabel(),'@EasyjetEleave/EmailTemplates/mailDelete.html.twig',$params);
        }
    
        $this->get('session')->getFlashBag()->add(
            'success',
            'The leave request have been removed successfully'
        );

        return $this->redirect($this->generateUrl("eleave_wishes_index"));
    }



    /**
     * @Route("choice/preference/check", name="eleave_choice_preference_check")
     * @Security("is_granted('ROLE_ELEAVE_SIMPLE_USER') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM')")
     */
    public function choicePreferenceCheck(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jsonWishesList = $em->getRepository("App\Easyjet\EleaveBundle\Entity\Wish")->checkUserExistingLeaves(
            $request,
            $request->request->get('user_id'),
        );

        $response = new Response(
            $jsonWishesList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
