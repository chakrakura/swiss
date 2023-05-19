<?php

function isYourselfDisabled()
{
    return  $_SESSION['TRANSITION_STATUS'] == "current" || $_SESSION['TRANSITION_STATUS'] == "after";
}

#####################################################################

function gestion_menu($xajax=false, &$script=null)
{
    $conn = connect();
    $version="";
    $return = "
		<div id=\"sidebar\">
		<ul>\n" ;
    // Calculating the number of yourself requests
    $non_validated_request = "";
    $sql = "SELECT COUNT(*) AS nombre FROM yourself_request WHERE state=0";
    $result = $conn->query($sql);
    
    $data = $result->fetch_assoc();
    if ($data['nombre']) {
        $non_validated_request = "<span class=\"nb_tasks badge badge-info\">" . $data['nombre'] . "</span>";
    }

    if (!empty($_SESSION['SESS_AD_RIGHTS_ACTIVATED'])) { 
        $can_edit_rights = false;
        if (isset($_SESSION['SESS_AD_RIGHTS_ACCESS']) && $_SESSION['SESS_AD_RIGHTS_ACCESS']) {
            $can_edit_rights = true;
        }
        
        if (is_IT() || $can_edit_rights || is_admin()) {
            $return .= "
            <li class=\"submenu\"><a href=\"#\"><i class=\"icon-signal\"></i> <span>IT Data</span><i class=\"arrow icon-chevron-right\"></i></a>
            <ul>";
        }

        if (is_admin() || is_IT() || $can_edit_rights) { 
            $return .= "<li id=\"menu_it_employees\" class=\"separation_menu\"><a href=\"/uman/employee-users/all\">Employees</a></li>
                        <li id=\"menu_it_3rd_parties\"><a href=\"/uman/third-party-users/all\">Third party</a></li>";
            if (is_IT() || is_admin()) {
                $return .= "<li id=\"menu_it_external_users\" class=\"separation_menu\"><a href=\"/uman/external-users/all\">External users</a></li>";
            }

            $return .= "</ul></li>" ;
        }
    } else {
        if (is_IT() || is_admin() || $can_edit_rights) {
            $return .= "
                <li class=\"submenu\"><a href=\"#\"><i class=\"icon-signal\"></i> <span>IT Data</span><i class=\"arrow icon-chevron-right\"></i></a>
                <ul>";
            if ($can_edit_rights) {
                $return .= "
                    <li id=\"menu_it_employees\"><a href=\"/uman/employee-users/all\">Employees</a></li>
                    <li id=\"menu_it_3rd_parties\"><a href=\"/uman/third-party-users/all\">Third party</a></li>";
            }

            $return .= "<li id=\"menu_it_tasks_status\"><a href=\"/uman/it-tasks/status\">IT tasks status</a></li>";

            if (is_IT() || is_admin()) {
                $return .= "<li id=\"menu_it_external_users\" class=\"separation_menu\"><a href=\"/uman/external-users/all\">External users</a></li>";
            }

            $return .= "
                </ul></li>" ;
        }
    }

    // Third party reserved for admins and IT
    if ($_SESSION['sess_droits'] == 2 || $_SESSION['sess_droits'] == 3) {
        $return .= "
			<li class=\"submenu\"><a href=\"#\"><i class=\"icon-cogs\"></i> <span>Administration</span><i class=\"arrow icon-chevron-right\"></i></a>
			<ul>";

        if ($_SESSION['sess_droits'] == 3) {
            $return .= "<!--li id=\"menu_administration_live_updates\"><a href=\"/uman/index.php?Page=live_updates\">Live updates</a></li-->";
        }

        if (is_admin()) {
            $return .= "<li id=\"menu_administration_rostering\"><a href=\"/uman/admin/rostering/all\">Rostering team</a></li>";
        }

        $return .= "<li id=\"menu_administration_applications\"   class=\"separation_menu\"><a href=\"/uman/admin/applications/all\">Applications</a></li>
                                <li id=\"menu_administration_stations\"><a href=\"/uman/admin/stations/all\">Stations</a></li>";
        
        $return .= "</ul></li>";
    }
    
    $sql = "SELECT * FROM users WHERE id_user='" . get_user_id() . "'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    
    $disabledYourself = isYourselfDisabled();

    // Part Yourself for all users
    if (($user['leave_date'] == "0000-00-00" || $user['leave_date'] > date("Y-m-d")) && !$user['manuel'] && !$disabledYourself) {
        $return .= "
			<li class=\"submenu\"><a href=\"#\"><i class=\"icon-beaker\"></i> <span>Yourself</span> <i class=\"arrow icon-chevron-right\"></i></a>
			<ul>
				<li id=\"menu_yourself_history\"><a href=\"/uman/index.php?Page=yourself\">View my history</a></li>
				<li class=\"separation_menu\" id=\"menu_yourself_last_name\"><a href=\"/uman/index.php?Page=yourself&action=name\">Last Name</a></li>

				<li id=\"menu_yourself_tel\"><a href=\"/uman/index.php?Page=yourself&action=tel\">Telephone numbers</a></li>
				<li id=\"menu_yourself_address\"><a href=\"/uman/yourself/address\">Address</a></li>
				<li id=\"menu_yourself_next_of_kin\"><a href=\"/uman/index.php?Page=yourself&action=next_of_kin\">Next of Kin</a></li>
				<li id=\"menu_yourself_nationality\"><a href=\"/uman/index.php?Page=yourself&action=nationality\">Nationality</a></li>
				<li id=\"menu_yourself_civil_status\"><a href=\"/uman/index.php?Page=yourself&action=marital_status\">Civil status</a></li>
				<li id=\"menu_yourself_family_allowance\"><a href=\"/uman/index.php?Page=yourself&action=alloc\">Family allowance</a></li>
				<li id=\"menu_yourself_children\"><a href=\"/uman/index.php?Page=yourself&action=add_children\">Children</a></li>
				<li id=\"menu_yourself_work_permit\"><a href=\"/uman/index.php?Page=yourself&action=permitt\">Work permit</a></li>
				<li id=\"menu_yourself_spouse_permit\"><a href=\"/uman/index.php?Page=yourself&action=permitt_mary\">Spouse permit</a></li>
				<li id=\"menu_yourself_avs_number\"><a href=\"/uman/index.php?Page=yourself&action=avs\">AVS number</a></li>
				<li id=\"menu_yourself_bank_account\"><a href=\"/uman/index.php?Page=yourself&action=bank\">Bank account</a></li>
				<li id=\"menu_yourself_staff_travel\"><a href=\"/uman/index.php?Page=yourself&action=staff_travel\">Staff travel</a></li>
				<li id=\"menu_yourself_passport\"><a href=\"/uman/index.php?Page=yourself&action=passport\">Passport</a></li>
                <li id=\"menu_yourself_tax_at_source\"><a href=\"/uman/index.php?Page=yourself&action=taxes_at_source\">Tax at source</a></li>
                <li id=\"menu_yourself_sickness\" class=\"separation_menu\"><a href=\"/uman/index.php?Page=yourself&action=sickness\">Sickness / accident</a></li>
			</ul></li>";
    }

    $return .= "
	</ul>
  </div>";


    if (!empty($_SESSION['sess_liste_user_debut']) && !empty($_SESSION['sess_liste_user_fin'])) {
        $js_tmp = "<script language=\"javascript\">liste_users(\"" . $_SESSION['sess_liste_user_debut'] . "\", \"" . $_SESSION['sess_liste_user_fin'] . "\");</script>";
        if ($xajax) {
            $script .= $js_tmp;
        } else {
            $return .= $js_tmp;
        }
    }

    // Restoring the appearance of the menu...
    if (!empty($_SESSION['sess_menu_state'])) {
        $tmp = explode(";", $_SESSION['sess_menu_state']);
        if (!$xajax) {
            $return .= "<script language=\"javascript\">";
        }

        foreach ($tmp as $value) {
            $buffer = explode("/", $value);

            if (!isset($buffer[0]) || !isset($buffer[1])) {
                continue;
            }
            if ($buffer[0]) {
                $js_tmp = "document.getElementById('" . $buffer[0] . "').style.display = '" . $buffer[1] . "';";
                if ($xajax) {
                    $script .= $js_tmp;
                } else {
                    $return .= $js_tmp;
                }
            }
            if ($buffer[1] == "block") {
                $js_tmp = "if(document.getElementById('" . $buffer[0] . "_button')) document.getElementById('" . $buffer[0] . "_button').style.background='url(\"images/moins.gif\") no-repeat left';";
                if ($xajax) {
                    $script .= $js_tmp;
                } else {
                    $return .= $js_tmp;
                }
            }
        }
        if (!$xajax) {
            $return .= "</script>";
        }
    }



    return $return ;
}