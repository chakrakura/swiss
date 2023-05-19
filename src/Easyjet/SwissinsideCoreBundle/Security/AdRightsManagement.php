<?php

namespace App\Easyjet\SwissinsideCoreBundle\Security;

use Easyjet\SwissinsideCoreBundle\Classes\Roles;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * Description of ActiveDirectoryListener
 *
 * @author Gilles Hemmerlé <giloux@gmail.com>
 */

class AdRightsManagement
{
    private $ldapConnexion;
    private $em;
    private $ldapRoot;

    public function __construct($server, $login, $password, $ldapRoot, $em)
    {
        $this->ldapRoot = $ldapRoot;
        $this->ldapConnexion = @ldap_connect($server);

        $this->em = $em;
        ldap_set_option($this->ldapConnexion, LDAP_OPT_REFERRALS, 0);
        ldap_set_option($this->ldapConnexion, LDAP_OPT_PROTOCOL_VERSION, 3);

        if (!$this->ldapConnexion) {
            throw new AuthenticationException('Unable to contact the Active directory server. Please try later.');
        }

        $binding = @ldap_bind($this->ldapConnexion, $login, $password);
        if (!$binding) {
            throw new AuthenticationException('Unable to authenticate against the active directory server.');
        }
    }

    public function __destruct()
    {
        ldap_close($this->ldapConnexion);
    }

    private function ldapEscapeString($string)
    {
        //$string = addslashes($string);
        $string = str_replace("\\", '\\\\', $string);
        $string = str_replace("(", '\(', $string);
        $string = str_replace(")", '\)', $string);

        return $string;
    }

    public function getAdministratorForGroup($groupDn)
    {
        //echo '<br>(&(|(objectCategory=person)(objectCategory=group))(distinguishedName=' . ldap_escape($groupDn, null, LDAP_ESCAPE_FILTER) .'))';
        $group = ldap_search($this->ldapConnexion, $this->ldapRoot, '(distinguishedName=' . $this->ldapEscapeString($groupDn) . ')');
        $info = ldap_get_entries($this->ldapConnexion, $group);
        if (isset($info[0]['managedby'][0])) {
            return $this->getUsersListFromDn($info[0]['managedby'][0]);
        }
    }

    private function getUsersListFromDn($groupDn)
    {
        $groupDn = $this->ldapEscapeString($groupDn);
        $managers = array();
        $group = ldap_search($this->ldapConnexion, $this->ldapRoot, '(&(|(objectCategory=person)(objectCategory=group))(distinguishedName=' . $this->ldapEscapeString($groupDn) . '))');
        $info = ldap_get_entries($this->ldapConnexion, $group);
        for ($i = 0; $i < $info['count']; $i++) {
            if (in_array('group', $info[$i]['objectclass'])) {
                if (!empty($info[$i]['member']['count'])) {
                    for ($j = 0; $j < $info[$i]['member']['count']; $j++) {
                        $managers = array_merge($managers, $this->getUsersListFromDn($info[$i]['member'][$j]));
                    }
                }

            } else {
                $managers[$info[$i]['dn']] = $info[$i]['dn'];
            }
        }
        return $managers;
    }

    /**
     * Return the list of AD groups that the user is anager for ...
     * @param  arary  $userAdObject               AD object that represent user
     * @param  string $ldapManageableGroupsFilter Ad filter to search the group which can be managed by swissinside
     * @return array                              List of groups manageables by the user
     */
    public function getAdministrableGroupsForUser($userAdObject, $ldapManageableGroupsFilter)
    {
        $rightsGroups = Roles::getListOfAdGroups($this->em);
        $currentUserDn = $userAdObject['dn'];
        $manageableGroups = null;

        $group = ldap_search($this->ldapConnexion, $this->ldapRoot, $ldapManageableGroupsFilter, array("dn", "description"));
        $info = ldap_get_entries($this->ldapConnexion, $group);

        if (!empty($info['count'])) {
            for ($i = 0; $i < $info['count']; $i++) {
                $currentGroupDn = $info[$i]['dn'];
                $managersOfGroup = $this->getAdministratorForGroup($currentGroupDn);
                if (isset($managersOfGroup[$currentUserDn])) {
                    $manageableGroups[$currentGroupDn] = isset($rightsGroups[$currentGroupDn]) ? $rightsGroups[$currentGroupDn] : array(
                        'ldap_group_name' => $currentGroupDn,
                        'app_name' => '',
                        'type_user' => '',
                    );

                    $manageableGroups[$currentGroupDn]['group_description'] = isset($info[$i]['description'][0]) ? $info[$i]['description'][0] : '';

                    preg_match('/cn=(.*?),/i', $currentGroupDn, $matches);
                    $manageableGroups[$currentGroupDn]['group_name'] = str_replace('\\', '', isset($matches[1]) ? $matches[1] : $currentGroupDn);
                }

            }
        }

        //\Iabsis\DebugBundle\Utils\Dump::show($manageableGroups); exit;
        return $manageableGroups;

    }

    public function switchUserToGroup2($userDn, $group, $giveAccess)
    {
        $user = ldap_search($this->ldapConnexion, $this->ldapRoot, '(&(objectCategory=person)(distinguishedName=' . $this->ldapEscapeString($userDn) . '))', array('memberof'));
        $info = ldap_get_entries($this->ldapConnexion, $user);
        $groups = array();
        if ($info['count'] > 0) {
            if (!isset($info[0]['memberof'])) {
                $info[0]['memberof'] = array('count' => 0);
            }
            $alreadyInGroup = false;
            for ($i = 0; $i < $info['0']['memberof']['count']; $i++) {
                if ($info['0']['memberof'][$i] == $group) {
                    $alreadyInGroup = true;
                    if (!$giveAccess) {
                        continue;
                    }
                }
                $groups[] = $info['0']['memberof'][$i];
            }

            if (!$alreadyInGroup) {
                $groups[] = $group;
            }

            ldap_mod_replace($this->ldapConnexion, $userDn, array(
                'memberOf' => $groups,
            ));
        }
    }

    public function switchUserToGroup($userDn, $groupDn, $giveAccess)
    {
        $group = @ldap_search($this->ldapConnexion, $this->ldapRoot, '(&(objectCategory=group)(distinguishedName=' . $this->ldapEscapeString($groupDn) . '))', array('member'));
        $info = @ldap_get_entries($this->ldapConnexion, $group);
        $users = array();
        if ($info['count'] > 0) {
            if (!isset($info[0]['member'])) {
                $info[0]['member'] = array('coungetUserAutocompletet' => 0);
            }

            $alreadyInGroup = false;
            if (isset($info['0']['member']['count'])) {
                for ($i = 0; $i < $info['0']['member']['count']; $i++) {
                    if ($info['0']['member'][$i] == $userDn) {
                        $alreadyInGroup = true;
                        if (!$giveAccess) {
                            continue;
                        }
                    }
                    $users[] = $info['0']['member'][$i];
                }
            }

            if (!$alreadyInGroup && $giveAccess) {
                $users[] = $userDn;
            }

            @ldap_mod_replace($this->ldapConnexion, $groupDn, array(
                'member' => $users,
            ));

            $error = ldap_error($this->ldapConnexion);
            if (ldap_errno($this->ldapConnexion)) {
                throw new \Exception("LDAP error : " . $error);

            }
        }
    }

    public function isGranted($user, $group)
    {
        $user = ldap_search($this->ldapConnexion, $this->ldapRoot, '(&(objectCategory=person)(distinguishedName=' . $this->ldapEscapeString($user) . '))', array('memberof', 'employeeID', 'name', 'givenname', 'sn', 'sAMAccountName'));
        $info = ldap_get_entries($this->ldapConnexion, $user);

        if ($info['count'] > 0) {
            if (in_array($group, $info[0]['memberof'])) {
                return array(
                    'dn' => !empty($info[0]['dn']) ? $info[0]['dn'] : '',
                    'lastname' => !empty($info[0]['sn'][0]) ? $info[0]['sn'][0] : '',
                    'firstname' => !empty($info[0]['givenname'][0]) ? $info[0]['givenname'][0] : '',
                    'login' => !empty($info[0]['samaccountname'][0]) ? $info[0]['samaccountname'][0] : '',
                );
            }
        }
        return false;
    }

    public function findGroupUsers($groupName, $filter)
    {
        $return = array();

        $users = ldap_search($this->ldapConnexion, $this->ldapRoot, $filter, array('memberof', 'employeeID', 'name', 'givenname', 'sn', 'sAMAccountName'));
        $entry = ldap_first_entry($this->ldapConnexion, $users);
        do {
            $dn = ldap_get_dn($this->ldapConnexion, $entry);
            $attrs = ldap_get_attributes($this->ldapConnexion, $entry);
            $return[$dn] = array(
                'dn' => $dn,
                'group_member' => !empty($attrs['memberOf']) && in_array($groupName, $attrs['memberOf']),
                'firstname' => !empty($attrs['sn'][0]) ? $attrs['sn'][0] : '',
                'lastname' => !empty($attrs['givenName'][0]) ? $attrs['givenName'][0] : '',
                'login' => !empty($attrs['sAMAccountName'][0]) ? $attrs['sAMAccountName'][0] : '',
            );

        } while ($entry = ldap_next_entry($this->ldapConnexion, $entry));

        return $return;
    }

    public function getUserAutocomplete($group, $terms, $findExactTerm, $findContainTerm)
    {
        $members = array();

        $group = ldap_search($this->ldapConnexion, $this->ldapRoot, str_replace('%term', $terms, $findExactTerm), array("givenname", "sn", "sAMAccountName"));
        $entry = ldap_first_entry($this->ldapConnexion, $group);

        if ($entry) {
            do {
                if (count($members) >= 20) {
                    break;
                }

                $dn = ldap_get_dn($this->ldapConnexion, $entry);
                $attrs = ldap_get_attributes($this->ldapConnexion, $entry);

                $firstname = !empty($attrs['sn'][0]) ? $attrs['sn'][0] : '';
                $lastname = !empty($attrs['givenName'][0]) ? $attrs['givenName'][0] : '';
                $login = !empty($attrs['sAMAccountName'][0]) ? $attrs['sAMAccountName'][0] : '';

                $members[$dn] = array(
                    "value" => $dn,
                    "label" => $firstname . " " . $lastname . ' (' . $login . ')',
                );

            } while ($entry = ldap_next_entry($this->ldapConnexion, $entry));
        }

        $group = ldap_search($this->ldapConnexion, $this->ldapRoot, str_replace('%term', $terms, $findContainTerm), array("givenname", "sn", "sAMAccountName"));
        $entry = ldap_first_entry($this->ldapConnexion, $group);

        if ($entry) {
            do {
                if (count($members) >= 20) {
                    break;
                }

                $dn = ldap_get_dn($this->ldapConnexion, $entry);
                $attrs = ldap_get_attributes($this->ldapConnexion, $entry);

                $firstname = !empty($attrs['sn'][0]) ? $attrs['sn'][0] : '';
                $lastname = !empty($attrs['givenName'][0]) ? $attrs['givenName'][0] : '';
                $login = !empty($attrs['sAMAccountName'][0]) ? $attrs['sAMAccountName'][0] : '';

                $members[$dn] = array(
                    "value" => $dn,
                    "label" => $firstname . " " . $lastname . ' (' . $login . ')',
                );

            } while ($entry = ldap_next_entry($this->ldapConnexion, $entry));
        }

        return $members;

    }

    public function getGroupDirectMembers($groupDn)
    {
        $members = array();
        //die('(&(objectCategory=group)(distinguishedName=' . $this->ldapEscapeString($groupDn) . '))');
        $group = ldap_search($this->ldapConnexion, $this->ldapRoot, '(&(objectCategory=group)(distinguishedName=' . $this->ldapEscapeString($groupDn) . '))', array('member'));

        $info = ldap_get_entries($this->ldapConnexion, $group);
        if (isset($info[0]['member']['count'])) {
            for ($i = 0; $i < $info[0]['member']['count']; $i++) {
                $user = ldap_search($this->ldapConnexion, $this->ldapRoot, '(distinguishedName=' . $this->ldapEscapeString($info[0]['member'][$i]) . ')', array('memberof', 'employeeID', 'name', 'givenname', 'sn', 'sAMAccountName'));
                $userInfos = ldap_get_entries($this->ldapConnexion, $user);
                $dn = $userInfos[0]['dn'];
                $attrs = $userInfos[0];

                $members[] = array(
                    'dn' => $dn,
                    'lastname' => !empty($attrs['sn'][0]) ? $attrs['sn'][0] : '',
                    'firstname' => !empty($attrs['givenname'][0]) ? $attrs['givenname'][0] : '',
                    'login' => !empty($attrs['samaccountname'][0]) ? $attrs['samaccountname'][0] : '',
                );
            }
        }

        return $members;
    }
}
