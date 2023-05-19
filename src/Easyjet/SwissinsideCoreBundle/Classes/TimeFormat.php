<?php

namespace App\Easyjet\SwissinsideCoreBundle\Classes;

/**
 * Formatting Times
 */
class TimeFormat
{
    /**
     * This function convert Minutes to Hours format
     */
    public static function intToHHmm($nbOfMinutes)
    {
        $hours = (int)($nbOfMinutes / 60);
        $minutes = (int)($nbOfMinutes % 60);

        return str_pad($hours, 2, "0", STR_PAD_LEFT) . ":"  . str_pad($minutes, 2, "0", STR_PAD_LEFT);
    }

    /**
     * This function gets the number of days in a month
     */
    public static function daysInMonth($month, $year)
    {
        $numberDays = array('31', '28', '31', '30', '31', '30', '31', '31', '30', '31', '30', '31');
        if ($year % 4 == 0) {
            $numberDays[1] = '29';
        }
        return $numberDays[$month - 1];
    }

    /**
     * This function converts a date that is in English format to French format
     */
    public static function convertDateIntoFrance($date)
    {
        preg_match("/([0-9]{2,4})[^0-9]{1}([0-9]{1,2})[^0-9]{1}([0-9]{1,2})/", $date, $result);
        if (!$result) return "00/00/0000";
        else {
            return $result[3] . "/" . $result[2] . "/" . $result[1];
        }
    }

    /**
     * This function converts a date that is in  French to English format
     */
    public static function convertDateFranceToEnglish($date)
    {
        $date = str_replace('-', '/', $date);
        $tb = explode("/", $date);
        return $tb[2] . "-" . $tb[1] . "-" . $tb[0];
    }

    /**
     * This function gets the total number of days in a year
     */
    public static function nbDaysYear($year)
    {
        $numberOfDays = 0;
        for ($i = 1; $i <= 12; $i++) {
            $numberOfDays += self::daysInMonth($i, $year);
        }
        return $numberOfDays;
    }

    /**
     * This function returns true if the list of past dates corresponds to the 4 days of end-of-year holidays
     */
    public static function inEndOfYear($wishList)
    {
        $holidayPeriod = array("12-24", "12-25", "12-31", "01-01");
        foreach ($wishList as $wish) {
            if (in_array(substr($wish, 5), $holidayPeriod)) {
                return true;
            }
        }
        return false;
    }


    /**
     * This function returns the number of days between 2 dates in YYYY-MM-DD format
     */
    public static function numberOfDaysBetweenTwoDates($date1, $date2)
    {

        if ($date1 < $date2) {
            $firstDay = $date1;
            $lastDay = $date2;
        } else {
            $firstDay = $date2;
            $lastDay = $date1;
        }

        list($firstYear, $firstMonth, $firstDay) = explode("-", $firstDay);
        list($lastYear, $lastMonth, $lastDay) = explode("-", $lastDay);

        // Calculation of the number of days since the beginning of the year of the first date
        $nbDays1 = $nbDays2 = 0;
        for ($i = 1; $i < $firstMonth; $i++) $nbDays1 += self::daysInMonth($i, $firstYear);
        $nbDays1 += $firstDay;

        // Calculation of the number of days since the beginning of the second date

        for ($i = $firstYear; $i < $lastYear; $i++) $nbDays2 += self::nbDaysYear($i);
        for ($i = 1; $i < $lastMonth; $i++) $nbDays2 += self::daysInMonth($i, $lastYear);
        $nbDays2 += $lastDay;

        return ($nbDays2 - $nbDays1 + 1);
    }

    /*
	* This Function for splitting a string and displaying "..." at the end of the returned text
    *   in order to be able to display a "resum" of the text in a table...
    */
    public static function cutSentence($text, $nbCharacters = 0)
    {

        if (strlen($text) > $nbCharacters && (0 != $nbCharacters)) {
            $tmpTb = explode(' ', $text);
            $tmpO = '';
            while (list(, $v) = each($tmpTb)) {
                if (strlen($tmpO) >= $nbCharacters) break;
                $tmpO .= $v . ' ';
            }
            $tmpO = substr($tmpO, 0, strlen($tmpO) - 1);
            if (count($tmpTb) > 1) {
                $tmpO .= '...';
            }
        } else {
            $tmpO = $text;
        }

        return $tmpO;
    }

    public static function date($date)
    {
        if ($date) {
            $result = self::convertDateFranceToEnglish($date);
        } else {
            $result = "0000-00-00";
        }
        return $result;
    }

    public static function minutesInterval(\DateTime $from, \DateTime $to) {
        $since_start = $from->diff($to);
        $minutes = $since_start->days * 24 * 60;
        $minutes += $since_start->h * 60;
        $minutes += $since_start->i;
        return $minutes;
    }
    
}
