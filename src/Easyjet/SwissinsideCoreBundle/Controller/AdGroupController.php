<?php

namespace App\Easyjet\SwissinsideCoreBundle\Controller;

use App\Easyjet\SwissinsideCoreBundle\Classes\Roles;
use App\Iabsis\ActiveDirectoryAuthenticationBundle\Security\AdRightsManagement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdGroupController extends AbstractController
{
    /**
     * @Route("/ad-groups", name="ad_groups")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function indexAction()
    {
        return array(
            "loading" => $this->container->get('request')->getSession()->get('AD_MANAGEABLE_GROUPS') === null,
            "groups" => $this->container->get('request')->getSession()->get('AD_MANAGEABLE_GROUPS')
        );
    }

    /**
     * @Route("/ad-groups/list", name="ad_groups_list")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function listAction() {


        try {
            $result = array();

            $groups = $this->container->get('request')->getSession()->get('AD_MANAGEABLE_GROUPS');
            if ($groups === null) {
                $adRightsManagement = new AdRightsManagement(
                    $this->container->getParameter('ldap_server'), 
                    preg_replace("/%u/", $this->container->getParameter('ldap_ad_user'), $this->container->getParameter('ldap_bind')), 
                    $this->container->getParameter('ldap_ad_password'), 
                    $this->container->getParameter('ldap_root'), 
                    $this->getDoctrine()->getManager()
                );

                $groups = $adRightsManagement->getAdministrableGroupsForUser(
                    $this->container->get('request')->getSession()->get('CURRENT_USER_AD_RDN'), 
                    $this->container->getParameter('ldap_manageable_groups')
                );

                $this->container->get('request')->getSession()->set('AD_MANAGEABLE_GROUPS', $groups);
                $_SESSION['AD_MANAGEABLE_GROUPS'] = $groups;
            }
            $result['success'] = true;

        } catch(\Exception $e) {
            $result['error'] = "An error occurred during group retrieving";
        }
        

        $response = new Response();
        $response->setContent(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/ad-groups/edit", name="ad_right_edit")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function editAction()
    {

        //unset($_SESSION['ad_authentication']);
        $adRightsManagement = $this->createLdapConnection();
        $role = Roles::findInSessionByDn($_GET['adGroup']);

        if (!$role) {
            $this->get('session')->getFlashBag()->add(
                'error',
                'Your are not allowed to manage this right!'
            );
            return $this->redirect($this->generateUrl('ad_groups'));
        }

        return array(
            'role' => $role,
            'locked' => empty($_SESSION['ad_authentication']['login']),
        );
    }

    /**
     * @Route("/ad-groups/update_rights", name="ad_update_right")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function updateRightAction()
    {
        $return = array();

        try {
            $adRightsManagement = $this->createLdapConnection();
            $isGroupAdmin = false;
            $user = $this->get('request')->get('user');
            $group = $this->get('request')->get('group');
            $accessGranted = $this->get('request')->get('accessGranted');
            $administrableGroup = !empty($_SESSION['AD_MANAGEABLE_GROUPS'][$group]);

            if (!$administrableGroup) {
                throw new \Exception("You are not allowed to manage this right!");
            }

            // Update user right
            $updatedUser = $adRightsManagement->switchUserToGroup($user, $group, $accessGranted);
            $return = array(
                'user' => $user,
                'group' => $group,
                'accessGranted' => $adRightsManagement->isGranted($user, $group) != false,
                'adUser' => $adRightsManagement->isGranted($user, $group),
            );

        } catch (\Exception $e) {
            $return['error'] = $e->getMessage();
        }

        $response = new Response();
        $response->setContent(json_encode($return));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/ad-groups/ad-get-users", name="ad_get_users")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function getAdUsersAction()
    {
        $return = array();

        try {
            $adRightsManagement = $this->createLdapConnection();
            $isGroupAdmin = false;
            $term = $this->get('request')->get('term');
            $group = $this->get('request')->get('group');
            $administrableGroup = !empty($_SESSION['AD_MANAGEABLE_GROUPS'][$group]);

            if (!$administrableGroup) {
                throw new \Exception("You are not allowed to manage this right!");
            }

            // Update user right
            $return = $adRightsManagement->getUserAutocomplete(
                $group,
                $term,
                $this->container->getParameter('ldap_find_user_exact_term'),
                $this->container->getParameter('ldap_find_user_contain_term')
            );

        } catch (\Exception $e) {
            $return['error'] = $e->getMessage();
        }

        $response = new Response();
        $response->setContent(json_encode($return));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/ad-groups/unlock", name="ad_rights_unlock")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function adUnlockAction()
    {

        $adGroup = null;
        try {
            $_SESSION['ad_authentication'] = null;
            $_SESSION['ad_authentication'] = array(
                'login' => $_POST['login'],
                'password' => $_POST['password'],
            );

            $adGroup = $_GET['adGroup'];

            $adRightsManagement = $this->createLdapConnection();
        } catch (\Exception $e) {
            unset($_SESSION['ad_authentication']);
            $this->get('session')->getFlashBag()->add(
                'error',
                'Authentication failed, AD has not been unlocked'
            );

            if (!$adGroup) {
                return $this->redirect($this->generateUrl('ad_groups'));
            }
        }

        return $this->redirect($this->generateUrl('ad_right_edit') . '?adGroup=' . urlencode($adGroup));

    }

    /**
     * @Route("/ad-groups/group-members", name="ad_group_members")
     * @IsGranted("ROLE_SWISSINSIDE_USER")
     */
    public function geAdGroupUsersList()
    {
        $adRightsManagement = $this->createLdapConnection();
        $adGroup = $_GET['adGroup'];
        $return = array();
        $role = Roles::findInSessionByDn($_GET['adGroup']);

        try {
            if (!$role) {
                throw new \Exception("You have not access to this AD group");
            }

            $return['members'] = $adRightsManagement->getGroupDirectMembers($role['ldap_group_name']);
        } catch (\Exception $e) {
            $return['error'] = $e->getMessage();
        }

        $response = new Response();
        $response->setContent(json_encode($return));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

    private function createLdapConnection()
    {
        if (!empty($_SESSION['ad_authentication']['login'])) {
            $ldapUser = str_replace(
                '%u',
                $_SESSION['ad_authentication']['login'],
                $this->container->getParameter('ldap_bind')
            );

            return new adRightsManagement(
                $this->container->getParameter('ldap_server'),
                $ldapUser,
                $_SESSION['ad_authentication']['password'],
                $this->container->getParameter('ldap_root'),
                $this->getDoctrine()
            );
        } else {
            $ldapUser = str_replace(
                '%u',
                $this->container->getParameter('ldap_ad_user'),
                $this->container->getParameter('ldap_bind')
            );

            return new adRightsManagement(
                $this->container->getParameter('ldap_server'),
                $ldapUser,
                $this->container->getParameter('ldap_ad_password'),
                $this->container->getParameter('ldap_root'),
                $this->getDoctrine()
            );
        }

    }

}
