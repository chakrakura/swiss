<?php

namespace App\Easyjet\EwishBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\EwishBundle\Entity\DoRequest;
use App\Easyjet\UmanBundle\Entity\Users;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;
use App\Easyjet\EwishBundle\Services\EwishMailerService;

class EwishGdoController extends AbstractController
{

    const SIDEBAR_ITEM = "EWISHGDO";

    public $statusList = ["all" => "All", "0" => "In progress", "2" => "Accepted","1" => "Refused"];

    /**
     * @Route("gdo/list", name="ewish_gdo_list")
     * @Security("is_granted('ROLE_EWISH_SIMPLE_USER') or is_granted('ROLE_EWISH_ADMIN')")
     */
    public function index(Request $request): Response
    {
        $numberOfMonths =  date("d") <= 5 ? 2 : 3;
        $month = date("m") + $numberOfMonths;
        $year = date("Y");
        if ($month > 12) {
            $month =  $month - 12;
            $year++;
        }
        if (strlen($month) == 1) {
            $month = "0" . $month;
        }
        $from = "01/" . $month . "/" . $year;
        $to = TimeFormat::daysInMonth($month, $year) . "/" . $month . "/" . $year;

        $em = $this->getDoctrine()->getManager();
        $stations = $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findBy(array(),array('airportName' => 'ASC'));
        $hideAdvancedSearch = $request->query->get('advanceShowStatus') ? '' : 'none';
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_EWISH_ADMIN')) {
            $hideAdvancedSearch  = true;
        }
        $typesEftrResult = $em->getRepository("App\Easyjet\UmanBundle\Entity\TypesEftr")->findBy(array(),array('type' => 'ASC'));
        $typesEftr = $this->getSelectedEftrType($typesEftrResult, $request->query->get('typesEftr', ''));

        return $this->render('@EasyjetEwish/Gdo/list.html.twig', [
            'selectedSidebar' => self::SIDEBAR_ITEM,
            'hideAdvancedSearch' => $hideAdvancedSearch,
            'from' => $request->query->get('from', $from),
            'to' => $request->query->get('to', $to),
            'typesEftr' => $typesEftr,
            'stations' => $stations,
            'selectedStation' => $request->query->get('stations', ''),
            'advanceShowStatus' => $request->query->get('advanceShowStatus', 0),
            'statusList' => $this->statusList,
            'currentStatus' => $request->query->get('status', ''),
            'ewishUser' => $request->query->get('ewishUser', ''),
            'isAdmin' => $this->get('security.authorization_checker')->isGranted('ROLE_EWISH_ADMIN'),
        ]);
    }


    /**
     * @Route("gdo/search", name="ewish_gdo_list_search")
     * @Security("is_granted('ROLE_EWISH_SIMPLE_USER') or is_granted('ROLE_EWISH_ADMIN')")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository("App\Easyjet\EwishBundle\Entity\DoRequest")->doRequestDatatableResults(
            $request,
            $this->get('security.authorization_checker')->isGranted('ROLE_EWISH_ADMIN'),
            $this->getUser()->getId()
        );
        $response = new Response(
            $result
        );
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("gdo/add", name="ewish_gdo_add_request")
     * @Security("is_granted('ROLE_EWISH_SIMPLE_USER') or is_granted('ROLE_EWISH_ADMIN')")
     */
    public function addGdoRequest(Request $request, EwishMailerService $ewishMailerService)
    {
        $em        = $this->getDoctrine()->getManager();
        $displayTo = "none";
        $idUser    = $this->getUser()->getId();
        $isPilot   = false;
        $userData  = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($idUser);
        $stations  = [];
        //Checks the user is pilot user not
        if ($userData->getIdTypeEftr() && $userData->getTypeEftr() && $userData->getTypeEftr()->getEmployeeType() == 3) {
            $isPilot = true;
        }
        if ($userData->getIdStation()) {
            $stations   = $em->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->find($userData->getIdStation());
        }

        $festivalPeriodDate = $em->getRepository("App\Easyjet\EwishBundle\Entity\FestivalPeriodDate")->find(1);
        $nextYear = $festivalPeriodDate->getNextYear();
        $actualStartDate = $festivalPeriodDate->getStartDate()->format('Y-m-d');
        $actualEndDate = $festivalPeriodDate->getEndDate()->format('Y-m-d');
        $currentYearJanDate = $festivalPeriodDate->getCurrentYearJanDate()->format('Y-m-d');
      
        if (!$request->isMethod('post')) {
            // Request date format(dd/mm/yyyy)
            $date = $request->query->get('date');
            list($dd, $mm, $yyyy) = explode('/', $date);
            if (!checkdate($mm, $dd, $yyyy)) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    'Invalid date'
                );
                return  $this->redirect($this->generateUrl('ewish_index'));
            }
            if ($isPilot) {
                $minDays = 1;
                $maxDays = 3;
            } else {
                $minDays = 1;
                $maxDays = 4;
                $cDate = TimeFormat::convertDateFranceToEnglish($date);
                // making date condition dynamic
                if ($cDate >= $actualStartDate && $cDate <= $actualEndDate) {
                    $displayTo = "block";
                }
            }
        }

        if ($request->isMethod('post')) {
            try {
                $endDate       =  $request->request->get('end');
                $startDate     = $postStartDate = $request->request->get('date');
                if (!$endDate) {
                    $endDate = $startDate;
                }
                list($dd, $mm, $yyyy) = explode('/', $startDate);
                if (!checkdate($mm, $dd, $yyyy)) {
                    throw new \Exception("Invalid start date format : " . $startDate);
                }
                list($dd, $mm, $yyyy) = explode('/', $endDate);
                if (!checkdate($mm, $dd, $yyyy)) {
                    throw new \Exception("Invalid end date format : " . $endDate);
                }
                
                $user = $userData->__toString();
                $startDate = TimeFormat::convertDateFranceToEnglish($startDate);
                $endDate = TimeFormat::convertDateFranceToEnglish($endDate);
                $minDays = 1;
                $maxDays = 1;
                $nbDays = TimeFormat::numberOfDaysBetweenTwoDates($startDate, $endDate);
                //For Pilot users maximum Days of leave is 1
                if ($isPilot) {
                    if ($nbDays > 1) {
                        throw new \Exception('You can take only a single day off for this period');
                    }
                } else {
                    //For Normal users maximum Days of leave is 4
                    if ($nbDays > 1) {
                        $outsideChristmass = true;
                        if (($startDate >= $actualStartDate) && ($startDate <= $actualEndDate)) {
                            $outsideChristmass = false;
                        }
                        if ($outsideChristmass || $nbDays > 4) {
                            throw new \Exception('You cannot bid more than 4 days outside the Christmas period (from dec 21st until jan 4th inclusiv)');
                        } else {
                            $maxDays = 4;
                        }
                    }
                }
              
                if ($nbDays > $maxDays || $nbDays < $minDays) {
                    throw new \Exception('Invalid period!');
                }
                // Checking the number of wishes already made for this month

                $daysForFirstMonth = $nbDays;
                $daysForNextMonth = 0;
                $totalWishKept = 0;

                $wishListForFirstMonth  = $em->getRepository("App\Easyjet\EwishBundle\Entity\DoRequest")->getWishList($startDate, $totalWishKept, $idUser);
              
                switch ($daysForFirstMonth) {
                    case "1":
                        if (is_array($wishListForFirstMonth) && in_array(1, $wishListForFirstMonth)) {
                            throw new \Exception('You have already a one day request for this month');
                        }
                        if ($isPilot) {
                            // Pilots cannot do 1+3
                            if (is_array($wishListForFirstMonth) && in_array(3, $wishListForFirstMonth)) {
                                throw new \Exception('You have already a three day request for this month');
                            }
                        } else {
                            // Cabines peuvent pas prendre
                            foreach ($wishListForFirstMonth as $daysCount) {
                                if ($daysCount > 1) {
                                    $totalWishKept -= $daysCount;
                                }
                            }
                            if ($totalWishKept >= $maxDays) {
                                throw new \Exception("You have already kept $totalWishKept days for this month. Maximum allowed : $maxDays");
                            }
                        }
                        break;

                    case "2":
                    case "3":
                    case "4":
                        if ($isPilot) {
                            throw new \Exception("Maximum allowed : $maxDays");
                        } else {
                            $totalWishKept = 0;
                            if (in_array(2, $wishListForFirstMonth) || in_array(3, $wishListForFirstMonth) || in_array(4, $wishListForFirstMonth)) {
                                throw new \Exception("You have already one or more day(s) request for this month");
                            }
                        }
                }

                if ($daysForFirstMonth + $totalWishKept > $maxDays) {
                    throw new \Exception("With this request we have a total of " . ($daysForFirstMonth + $totalWishKept) . ". That exceds your maximum authorized per month of $maxDays");
                }

                // We list the requested days and place them in the $wish_list[] array
                $wishList[] = $startDate;
                if ($nbDays > 1) {
                    list($year, $month, $day) = explode("-", $startDate);
                    $day2 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 1, (int) $year));
                    $day3 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 2, (int) $year));
                    $day4 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 3, (int) $year));

                    $wishList[] = $day2;
                    if ($nbDays >= 3) {
                        $wishList[] = $day3;
                    }

                    if ($nbDays >= 4) {
                        $wishList[] = $day4;
                    }
                }

                // You can't make a wish request 2x for the same date...
                list($y, $m, $d) = explode("-", $startDate);

                $from = date("Y-m-d", mktime(0, 0, 0, (int) $m, (int) $d - 4, (int) $y));
                $to = date("Y-m-d", mktime(0, 0, 0, (int) $m, (int) $d + 4, (int) $y));

                $userDoRequestData = $em->getRepository("App\Easyjet\EwishBundle\Entity\DoRequest")->getUserDoRequestData($from, $to, $idUser);
                $wishedDaysCount = 0;

                foreach ($userDoRequestData  as $doRequestData) {
                    $wishedList[$doRequestData->getDebut()->format('Y-m-d')] = $doRequestData->getEtat();
                    if (($wishedDaysCount = TimeFormat::numberOfDaysBetweenTwoDates($doRequestData->getDebut()->format('Y-m-d'), $doRequestData->getFin()->format('Y-m-d'))) > 1) {
                        list($year, $month, $day) = explode("-", $doRequestData->getDebut()->format('Y-m-d'));
                        $day2 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 1, (int) $year));
                        $day3 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 2, (int) $year));
                        $day4 = date("Y-m-d", mktime(0, 0, 0, (int) $month, (int) $day + 3, (int) $year));
                        $wishedList[$day2] =  $doRequestData->getEtat();
                        if ($wishedDaysCount >= 3) {
                            $wishedList[$day3] = $doRequestData->getEtat();
                        }

                        if ($wishedDaysCount >= 4) {
                            $wishedList[$day4] = $doRequestData->getEtat();
                        }
                    }
                }

                foreach ($wishList as $myWish) {
                    if (isset($wishedList[$myWish])) {
                        switch ($wishedList[$myWish]) {
                            case "0":
                                throw new \Exception("You have already made a request for the same period and it's waiting for approval ...");
                                break;
                            case "1":
                                throw new \Exception("You have already made a request for the same period and it was already refused.");
                                break;
                            case "2":
                                throw new \Exception("You have already made a request for the same period and it was already accepted");
                                break;
                        }
                    }
                }

                // Management of the end of year celebrations
                if ($isPilot) {
                    if (TimeFormat::inEndOfYear($wishList)) {
                        throw new \Exception("GDO day(s) request on Christmas and New year periods can only be made by cabin crew");
                    }
                } else {
                    $hasAlreadyEndYearDays = $em->getRepository("App\Easyjet\EwishBundle\Entity\DoRequest")->hasAlreadyEndYearDays($startDate, $idUser);

                    if (TimeFormat::inEndOfYear($wishList) && $hasAlreadyEndYearDays) {
                        throw new \Exception("You already made a request for the holidays seasons");
                    }
                }

                $requestObj = new DoRequest();
                $userObj = new Users();
                $userObj = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($idUser);
                $requestObj->setDebut(\DateTime::createFromFormat('Y-m-d', $startDate));
                $requestObj->setFin(\DateTime::createFromFormat('Y-m-d', $endDate));
                $requestObj->setIdUser($idUser);
                $requestObj->setEWishUser($userObj);
                $requestObj->setEtat(0);
                $requestObj->setComment($request->request->get('comment'));
                $requestObj->setRequestDate(\DateTime::createFromFormat('Y-m-d', date("Y-m-d")));
                $em->persist($requestObj);
                $em->flush();
                $comment = $request->request->get('comment');
                $comment = htmlentities($comment, ENT_COMPAT, "UTF-8");
                $comment = str_replace("\n", "<br/>", $comment);

                $requestedDate = TimeFormat::convertDateIntoFrance($startDate);
                if ($startDate != $endDate) {
                    $requestedDate .= " - " . TimeFormat::convertDateIntoFrance($endDate);
                }

                $params = [
                    'date' => date("d/m/Y"),
                    'comment' => $comment,
                    'requestedDate' => $requestedDate,
                    'user' => $user,
                    'contrat' => $userData->getIdTypeEftr() && $userData->getTypeEftr() ?  $userData->getTypeEftr() : '',
                    'base' =>  !empty($stations) ? $stations->getIataCode() : ''
                ];

                $emailsList  = $em->getRepository("App\Easyjet\EwishBundle\Entity\EmailNotifications")->findAll();
                foreach ($emailsList as $list) {
                    $ewishMailerService->sendMail('New GDO request',$list->getLabel(),'@EasyjetEwish/EmailTemplates/addDoRequest.html.twig',$params);
                }
                $ewishMailerService->sendMail('New GDO request',$userData->getEmailUser(),'@EasyjetEwish/EmailTemplates/addDoRequest.html.twig',$params);
              
                $this->get('session')->getFlashBag()->add(
                    'success',
                    "You have successfully applied for leaves"
                );
                list($day, $month, $year) = explode("/", $postStartDate);
                return  $this->redirect($this->generateUrl('ewish_index', array('month' => $month, 'year' => $year)));
               
            } catch (\Exception  $e) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    $e->getMessage()
                );
                return  $this->redirect($this->generateUrl('ewish_gdo_add_request', array('date' => $postStartDate)));
            }
        }

        return $this->render('@EasyjetEwish/Gdo/add.html.twig', [
            'date'      => $date,
            'nextYear'  => $nextYear,
            'endDate'   => $actualEndDate,
            'startDate' => $actualStartDate,
            'currentYearJanDate' => $currentYearJanDate,
            'displayTo' => $displayTo,
            'maxDays'   => $maxDays,
            'isPilot'   => $isPilot,
            'selectedSidebar' => self::SIDEBAR_ITEM,
        ]);
    }

    /**
     * @Route("gdo/{type}/{id}", name="ewish_gdo_do_request")
     * @Security("is_granted('ROLE_EWISH_ADMIN')")
     */
    public function editDoRequest($id)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository("App\Easyjet\EwishBundle\Entity\DoRequest")->getDoRequestById($id);
        return $this->render('@EasyjetEwish/Gdo/update.html.twig', [
            'selectedSidebar' => self::SIDEBAR_ITEM,
            'data' => $result,
            'title' => 'GDO request',
            'statusList' => ["0" => "In progress", "2" => "Accepted","1" => "Refused"]
        ]);
    }

    /**
     * @Route("gdo/update", name="ewish_gdo_update_request")
     * @Security("is_granted('ROLE_EWISH_ADMIN')")
     */
    public function updateGDORequest(Request $request, EwishMailerService $ewishMailerService)
    {
        $em = $this->getDoctrine()->getManager();
        $requestData  = $em->getRepository("App\Easyjet\EwishBundle\Entity\DoRequest")->find($request->get('id'));
        $requestData->setEtat((int) $request->get('status'));
        $em->flush();
        
        $requestedDate = TimeFormat::convertDateIntoFrance($requestData->getDebut()->format('Y-m-d'));
        if ($requestData->getDebut()->format('Y-m-d') != $requestData->getFin()->format('Y-m-d')) {
            $requestedDate .= " - " . TimeFormat::convertDateIntoFrance($requestData->getFin()->format('Y-m-d'));
        }
        $status = '';
        if ($request->get('status') == 1) {
            $status = 'Refused';
        } else if ($request->get('status') == 2) {
            $status = 'Accepted';
        }

        $params = ['comment' => str_replace("\n", "<br/>", htmlentities($requestData->getComment(), ENT_COMPAT, "UTF-8")),
                    'date' => date("d/m/Y"),
                    'requestedDate' => $requestedDate,
                    'status' => $status
                ];

        $user  = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($requestData->getEwishUser()->getIdUser());
      
       
        if ($request->get('status') == 1) {
            $ewishMailerService->sendMail('Your request has been refused',$user->getEmailUser(),'@EasyjetEwish/EmailTemplates/updateDoRequest.html.twig',$params);
              
        } elseif ($request->get('status') == 2) {
            $ewishMailerService->sendMail('Your request has been accepted',$user->getEmailUser(),'@EasyjetEwish/EmailTemplates/updateDoRequest.html.twig',$params);
            
        } elseif ($request->get('status') == 0) {
            //Do nothing for the moment
        }
        $this->get('session')->getFlashBag()->add(
            'success',
            'Status updated successfully'
        );
        return $this->redirect($this->generateUrl("ewish_gdo_list"));
    }

    /**
     * This function gets the eftr array data.
     */
    public function getSelectedEftrType($typesEftrData, $selectedTypesEftr)
    {

        $noContractSelected = false;
        $results = [];

        if (!is_array($selectedTypesEftr) || count($selectedTypesEftr) < 1) {
            $noContractSelected = true;
        }

        foreach ($typesEftrData as $key => $result) {
            $selected = "";
            $results[$key]['id'] = $result->getId();
            $results[$key]['type'] = $result->getType();
            if ($noContractSelected || in_array($result->getId(), $selectedTypesEftr)) {
                $selected = "selected";
            }
            $results[$key]['selected'] = $selected;
        }
        return $results;
    }
}
