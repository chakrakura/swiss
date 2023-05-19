<?php

namespace App\Easyjet\WorkingSheetBundle\TwigFilters;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class MinutesToTime extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('minutesToTime', array($this, 'minutesToTime')),
        );
    }

    public function minutesToTime($time, $format = '%02d:%02d')
    {
        
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }
    
    public function getName() {
        return "MinutesToTime";
    }
}