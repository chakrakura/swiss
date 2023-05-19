<?php

namespace App\Easyjet\EwishBundle\Classes;

use App\Easyjet\SwissinsideCoreBundle\Classes\TimeFormat;

// The script will automatically adjust the calendar display according to the requested period
class Calendar
{

	private $entityManager;
	public $year = 0;
	public $month = 0;
	public $days = 0;
	public $day = 0;
	public $idUser = 0;
	public $title = "";
	public $classDaysNormal = "cases_normal";
	public $classDaysHolidays = "cases_fonce";
	public $classToday = "case_audaydhui";
	public $protoTypeLink = "";
	public $startLinks = '';
	public $switzerlandDays = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
	public $dayColor;

	public function __construct($entityManager, $title = "", $year = 0, $month = 0, $day = 0, $idUser = 0)
	{
		$this->entityManager = $entityManager;
		$this->idUser =  $idUser;
		$this->year = (int)$year;
		$this->month = (int)$month;
		$this->day = $day;
		$this->title = $title;
		$this->dayColor = NULL;

		if (!$this->year) $this->year = date('Y');
		if (!$this->month) $this->month = date('m');
		if (strlen($this->month) == 1) $this->month = "0" . $this->month;
	}

	/*
	This function add the colors to day
    */
	public function addColorToDay($day, $color)
	{
		$this->dayColor[$day] = $color;
	}

	public function attach()
	{
		if ($this->day == 0) {
			if (!$this->title) {
				$this->title = date("M", mktime(0, 0, 0, $this->month, 1, $this->year)) . " " . $this->year;
			}
			return $this->posterByMonth();
		}
	}

	public function posterByMonth()
	{

		$this->navigation();

		$table = "<div class='widget-box'><div class='widget-title'><span class='icon'><i class='icon-table'></i></span><h5>Period</h5></div><div class='widget-content nopadding'>" . $this->title . "";
		$table .= "</div></div>";
		$table .= "<div class='widget-box'>";
		$table .= "<div class='widget-title'><span class='icon'><i class='icon-table'></i></span><h5>Your calendar</h5></div>";
		$table .= "<div class='widget-content nopadding'>";
		$table .= "\n<table class='table table-bordered table-striped table-hover' cellspacing=1 width=100%>\n";
		$table .= "\t<tr>\n";

		// Creation of the line of days of the week

		for ($i = 0; $i < count($this->switzerlandDays); $i++) {
			$table .= "\t\t<th>" . $this->switzerlandDays[$i] . "</th>\n";
		}

		// We are looking for the day that corresponds to the first day of the month
		$dayName = date("D", mktime(0, 0, 0, $this->month, 1, $this->year));
		$iProgress = 0;

		for ($i = 0; $i < count($this->switzerlandDays); $i++) {
			if ($this->switzerlandDays[$i] == $dayName) {
				$iProgress = $i;
				break;
			}
		}
		$table .= "\t<tr>\n";

		// We create the empty squares at the beginning of the calendar (if there are any)
		for ($i = 1; $i <= $iProgress; $i++) {
			if ($i <= 5) {
				$class = "class=" . $this->classDaysNormal;
			} else {
				$class = "class=" . $this->classDaysHolidays;
			}
			$table .= "\t\t<td $class>&nbsp;</td>\n";
		}
		$tmp = TimeFormat::daysInMonth($this->month, $this->year);
		$iProgress10 = 0;
		// We create the other boxes (where there are days)
		for ($i = 1; $i <= $tmp; $i++) {
			$iProgress++;

			if (strlen($day = $i) == 1) {
				$day = "0$i";
			}

			$userCalendarData =	$this->entityManager->getRepository("App\Easyjet\EwishBundle\Entity\Calendrier")->getUserCalendarData($this->year . "-" . $this->month . "-" . $day, $this->idUser);
			$text = "";

			foreach ($userCalendarData as $calendarData) {
				$text .= "<div class=\"resultats\" title=\"" . htmlentities(stripslashes($calendarData->getTitre()), ENT_COMPAT, "UTF-8") . "\">- " . htmlentities(TimeFormat::cutSentence(stripslashes($calendarData->getTitre()), 10), ENT_COMPAT, "UTF-8") . "</div>\n";
			}

			// Link management
			if ($this->protoTypeLink) {
				$link = "<a href=" . str_replace("%p%", "'" . $this->year . "-" . $this->month . "-" . $day . "'", $this->protoTypeLink) . ">$day</a>";
			} else {
				$link = "$day";
			}

			// Continuation of the loop
			if ($iProgress <= 5) {
				$class = "class=" . $this->classDaysNormal;
			} else {
				$class = "class=" . $this->classDaysHolidays;
			}

			if (date("Y/m/d") == $this->year . "/" . $this->month . "/" . $day) {
				$class = "class=" . $this->classToday;
			}
			if ($iProgress10) {
				$table .= "\t<tr>\n";
			}

			$color = "";

			if (isset($this->dayColor[$this->year . "-" . $this->month . "-" . $day]) && $color = $this->dayColor[$this->year . "-" . $this->month . "-" . $day]) {
				$color = "style=\"width: 50px;background-color:" . $color . "\"";
			}

			$table .= "\t\t<td $class $color style=\"height:60px; width: 50px;\">$link<br/>\n$text";

			$table .= $this->caseContent($day, $this->month, $this->year);
			$table .= "</td>\n";
			if ($iProgress >= 7) {
				$iProgress = 0;
				$table .= "</tr>\n";
			}
		}
		// We create the last empty spaces of the calendar
		if ($iProgress != 0) {
			for ($i = $iProgress; $i < 7; $i++) {
				if ($i < 5) {
					$class = "class=" . $this->classDaysNormal;
				} else {
					$class = "class=" . $this->classDaysHolidays;
				}
				$table .= "<td $class>&nbsp;</td>";
			}
		}
		// We close the last date line

		$table .= "</tr>";

		// We close the complete table

		$table .= "\t</tr>\n";
		$table .= "</table>\n";
		$table .= "</div></div>";

		return $table;
	}

	/*
	   This function adds the Add a GDO day request option based on conditions.
    */

	public function caseContent($day, $month, $year)
	{

		if (!$this->startLinks) {

			$numberOfMonths = 3;
			$month2 = date("m") + $numberOfMonths;

			$year2 = date("Y");

			if ($month2 > 12) {
				$month2 =  $month2 - 12;
				$year2++;
			}
			if (strlen($month2) == 1) $month2 = "0" . $month2;
			$date = $year2 . "-" . $month2 . "-01";
			$this->startLinks = $date;
			$this->endLinks = date("Y-m-t", mktime(0, 0, 0, (int)date("m") + 8, (int)date("d"), (int)date("Y")));
		}

		$string = "";
		$currentMonth = date("m");
		$currentMonth = 9; // For the testing put the static month. Need to change at the time of production

		$festivalPeriodDate = $this->entityManager->getRepository("App\Easyjet\EwishBundle\Entity\FestivalPeriodDate")->find(1);
		$currentYear = $festivalPeriodDate->getCurrentYear();
		$nextYear = $festivalPeriodDate->getNextYear();
		/*
		 checking the month range between April and Sep and checks the year 
		 and checks the month is DEC and checks the date range between 21 to 31.
		 Or checks the month range between April and Sep and checks the year to next Year
		 and checks the month is Jan and checks the date range between 01 to 04.
		*/
		if (($currentMonth >= 4 && $currentMonth <= 9 && $year == $currentYear && $month == 12  && in_array($day, range(21, 31))) ||  ((($currentMonth >= 4 && $currentMonth <= 9) || $currentMonth == 1) && $year == $nextYear && in_array($day, range(1, 4)) &&   $month == 1)) {
			$string = "<br/><a href='/EWISH/gdo/add?date=$day/$month/$year'>Add a GDO day request</a><br/>";
		}

		return $string;
	}


	/*
	 This function add Add a GDO day request option based on conditions.
    */
	public function navigation()
	{
		$string = "<table width=\"100%\"><tr>";
		$string .= "<td class=\"menu_tableau\" width=\"150\"><a class=\"btn btn-default\" href=\"javascript:year(-1)\">&lt;&lt;</a>&nbsp;&nbsp;&nbsp;<a class=\"btn btn-default\" href=\"javascript:month(-1)\">&lt;</a></td>";
		$string .= "<td align=\"center\" class=\"menu_tableau\">" . $this->title . "</td>";
		$string .= "<td class=\"menu_tableau\" width=\"150\"><a class=\"btn btn-default\" href=\"javascript:month(1)\">&gt;</a>&nbsp;&nbsp;&nbsp;<a class=\"btn btn-default\" href=\"javascript:year(1)\">&gt;&gt;</a></td>";
		$string .= "</tr></table>";
		$this->title = $string;
	}
}
