<?php

namespace App\Easyjet\SwissinsideCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\RequestStack;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function indexAction()
    {
        return $this->forward('App\Easyjet\SwissinsideCoreBundle\Controller\DefaultController::dashboardAction');
    }

    /**
     * @Route("/get-uman-status", name="check_uman_status")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function umanStatusAction()
    {
//        global $_HOST;
//        global $_LOGIN;
//        global $_PASSWORD;
//        require_once __DIR__.'/../../../../web/uman/includes/auth.inc.php';
//
//        require_once __DIR__.'/../../../../web/uman/includes/fonctions.php';
//        require_once __DIR__.'/../../../../web/uman/includes/fonctions_spec.php';
//
//        $status = 'normal';
//
//        if ($dates = isAppReadOnly()) {
//            $status = 'readonly';
//        }
//
//        if ($_SESSION['TRANSITION_STATUS'] == 'after') {
//            $status = 'readonly-extended';
//        }
//
        $response = new \Symfony\Component\HttpFoundation\Response(
            json_encode(array('status' => 'readonly'))
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/dashboard", name="dashboard")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function dashboardAction()
    {
        global $_HOST;
        global $_LOGIN;
        global $_PASSWORD;
        global $_BASE;
        
        $myself = $this->getDoctrine()->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->find($this->getUser()->getId());
        
        //$this->container->get('request')->getSession()->set('user_switch_allowed', $_SESSION['user_switch_allowed']);

        $supportConfirmation = $this->getDoctrine()->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\DashboardSupportForm')->findOneBy(array('user' => $myself));

        $simpleUserEmployee = ($myself->isThirdParty() == 0 && $myself->getAccesOk() == 1);

        $news = null;
        // Get the news only if the module is installed
        if (class_exists('Easyjet\EleaveBundle\EasyjetEleaveBundle')) {
            $news = $this->getDoctrine()->getRepository('EasyjetEnewsBundle:News', 'enews')->getLastNews();
        }

        return $this->render('@EasyjetSwissinsideCore/Default/dashboard.html.twig', [
            'myself' => $myself,
            'supportConfirmation' => $supportConfirmation,
            'nextOfKin' => null,
            'myselfNationality' => null,
            'permitAlmostExpired' => null,
            'passportAlmostExpired' => null,
            'lastEftr' => null,
            'eftrAccess' => null,
            'EftrNew' => null,
            'lastPayslip' => null,
            'payslipNew' => null,
            'news' => $news,
            'lastView' => null,
            'lastConfirmation' => null,
            'confirmationExpired' => null,
            'transitionStatus' => null,
            'simpleUser' => $simpleUserEmployee
        ]);

    }

    /**
     * @Route("/dashboard/confirm-personal-data", name="dashboard_confirm_personnal_data")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function confirmPersonnalData()
    {
        $myself = $this->getDoctrine()->getRepository('EasyjetSwissinsideCoreBundle:User')->find($this->getUser()->getId());
        $lastConfirmation = $this->getDoctrine()->getRepository('EasyjetSwissinsideCoreBundle:DashboardYourselfDataConfirmed')->getForUser($myself);
        if (!$lastConfirmation) {
            $lastConfirmation = new \Easyjet\SwissinsideCoreBundle\Entity\DashboardYourselfDataConfirmed();
            $lastConfirmation->setUser($myself);
        }

        $lastConfirmation->setDate(new \DateTime());

        $this->getDoctrine()->getManager()->persist($lastConfirmation);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirect($this->generateUrl('dashboard'));
    }

    /**
     * @Route("/dashboard/confirm-support-message", name="dashboard_confirm_support_message")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function confirmSupportMessageData()
    {
        $myself = $this->getDoctrine()->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->find($this->getUser()->getId());
        $confirmation = $this->getDoctrine()->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\DashboardSupportForm')->getForUser($myself);

        try {
            $this->getDoctrine()->getManager()->persist($confirmation);
            $this->getDoctrine()->getManager()->flush();
            $jsonArray = array('success' => 1);
        } catch (\Exception $ex) {
            $jsonArray = array('success' => 0, 'message' => $ex->getMessage());
        }

        $response = new \Symfony\Component\HttpFoundation\Response(
            json_encode($jsonArray)
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/switch_user/users_list", name="get_all_users_list")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function getUsersList(RequestStack $requestStack)
    {
        $session = $requestStack->getSession();
        if (empty($session->get('user_switch_allowed'))) {
            $return = array();
        } else {
            $usersList = $this->getDoctrine()->getRepository('App\Easyjet\SwissinsideCoreBundle\Entity\User')->findActiveUsers();
            $return = array();
            foreach ($usersList as $currentUser) {
                $return[] = array(
                    'username' => $currentUser->getLogUser(),
                    'firstname' => $currentUser->getFirstname(),
                    'lastname' => $currentUser->getLastname(),
                );
            }
        }

        $response = new Response(
            json_encode($return)
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
