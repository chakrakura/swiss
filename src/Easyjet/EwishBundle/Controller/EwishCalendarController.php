<?php

namespace App\Easyjet\EwishBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Easyjet\EwishBundle\Classes\Calendar;
use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;

class EwishCalendarController extends AbstractController
{
    const SIDEBAR_ITEM = "EWISHCALENDAR";

    /**
     * @Route("/index", name="ewish_index")
     * @Security("is_granted('ROLE_EWISH_SIMPLE_USER') or is_granted('ROLE_EWISH_ADMIN')")
     */
    public function index(Request $request): Response
    {
        $month = (int)$request->query->get('month');
        $year = (int)$request->query->get('year');

        //Shows the calander based on search dates otherwise 3 months more than current month 
        if ($month > 0 && $month <= 12 && $year > 0) {
            $month = $month;
            $year = $year;
        } else {
            $month = date("m") + 3;
            $year = date("Y");
            if ($month > 12) {
                $month =  $month - 12;
                $year++;
            }
        }

        $idUser =  $this->getUser()->getId();
        $entityManager = $this->getDoctrine()->getManager();
        $userGdoData = $entityManager->getRepository("App\Easyjet\EwishBundle\Entity\DoRequest")->findBy(array("idUser" => $idUser));

        $calendarObj = new Calendar($entityManager, '', $year, $month, 0, $idUser);

        foreach ($userGdoData as $gdoData) {
            switch ($gdoData->getEtat()) {
                case "0":
                    $color = "orange";
                    break;
                case "1":
                    $color = "red";
                    break;
                case "2":
                    $color = "green";
                    break;
            }
            $calendarObj->addColorToDay($gdoData->getDebut()->format('Y-m-d'), $color);
            $numberOfDays = TimeFormat::numberOfDaysBetweenTwoDates($gdoData->getDebut()->format('Y-m-d'), $gdoData->getFin()->format('Y-m-d'));
           
            if ($numberOfDays > 1) {
                list($year1, $month1, $day1) = explode("-", $gdoData->getDebut()->format('Y-m-d'));
                $day2 = date("Y-m-d", mktime(0, 0, 0, (int)$month1, (int)$day1 + 1, (int)$year1));
                $day3 = date("Y-m-d", mktime(0, 0, 0, (int)$month1, (int)$day1 + 2, (int)$year1));
                $day4 = date("Y-m-d", mktime(0, 0, 0, (int)$month1, (int)$day1 + 3, (int)$year1));

                $calendarObj->addColorToDay($day2, $color);
                if ($numberOfDays >= 3) {
                    $calendarObj->addColorToDay($day3, $color);
                }
                if ($numberOfDays >= 4) {
                    $calendarObj->addColorToDay($day4, $color);
                }
            }
        }

        $calendar = $calendarObj->attach();

        return $this->render('@EasyjetEwish/Calendar/index.html.twig', [
            'month' => $month,
            'year' => $year,
            'calendar' => $calendar,
            "selectedSidebar" => self::SIDEBAR_ITEM,
        ]);
    }
}
