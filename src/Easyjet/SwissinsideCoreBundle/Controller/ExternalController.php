<?php

namespace App\Easyjet\SwissinsideCoreBundle\Controller;

use App\Easyjet\SwissinsideCoreBundle\Classes\LocalIps;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ExternalController extends AbstractController
{
    /**
     * @Route("/external/inside", name="inside")
     */
    public function insideAction()
    {
        if ($_SERVER['SERVER_NAME'] == "swissinside") {
            header("location:http://inside/");exit;
        }
        return array();
    }

    /**
     * @Route("/external/crew-portal", name="crew_portal")
     */
    public function crewPortalAction()
    {
        header("location:https://connected.s4a.aero");exit;
    }

    public function wikiAction($slug = null)
    {
        return array(
            'wikiUrl' => 'http://swissinside' . $_SERVER['REQUEST_URI'],
        );
    }

}
