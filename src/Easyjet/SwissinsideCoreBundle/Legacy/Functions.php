<?php
namespace App\Easyjet\SwissinsideCoreBundle\Legacy;

/**
 * This class will contains functions usefull to work with old swissinside application
 *
 * @author Gilles Hemmerlé <giloux@gmail.com>
 */
class Functions {
    public static function generalMenu($currentAppliInitials) {
        $id_user = get_user_id_umanager() ;
        global $_BASE_UMANAGER;
        Connect($_BASE_UMANAGER) ;
        $boutons = "" ;
        
        $sql = "SELECT * FROM users WHERE id_user='" . $id_user . "'";
        $req = mysql_query($sql) or die(mysql_error() . $sql);
        $user = mysql_fetch_array($req);
        if($user['external'] == 1) {
            $boutons .= '<li class="active"><a href="/dashboard"><i class="icon-home"></i>Home</a></li>';
            $boutons .= '<li id="logout-button"><a href="/logout"><i class="icon-off"></i>Logout</a></li>';
            return $boutons;
        }

        
        $i = 0;
        $nom = '';

        $sql = "SELECT * FROM applications ORDER BY id" ;
        $req = mysql_query($sql) or die(mysql_error()) ;
        while ($appli = mysql_fetch_array($req))
        {
            $sql = "SELECT COUNT(*) AS nombre, types_users.valeur FROM types_users, assoc_droits_users, applications
                    WHERE
                        assoc_droits_users.id_type_user=types_users.id AND
                        assoc_droits_users.id_user='" . $id_user . "' AND
                        types_users.id_appli='" . $appli['id'] . "' AND
                        types_users.id_appli=applications.id
                    GROUP BY assoc_droits_users.id_user" ;
            $request = mysql_query($sql) or die(mysql_error() . $sql) ;
            $data = mysql_fetch_array($request) ;
            if($data['nombre'] > 0)
            {
                if ($appli['initiaux'] == "UM") {
                    if ($_SESSION['TRANSITION_STATUS'] == "current" || $_SESSION['TRANSITION_STATUS'] == "after" && $appli['valeur'] == 1) {
                        $appli['nom'] = "Home";
                    }
                }
                $boutons .= "<li " . ($currentAppliInitials == $appli['initiaux'] ? 'class="active"' : '') . "><a href=\"" . $appli['lien_principal'] . "\"><i class=\"" . $appli['icon'] . "\"></i>" . $appli['nom'] . "</a></li>";
            }
        }
        @mysql_close() ;

        $boutons .= '<li id="logout-button"><a href="/logout"><i class="icon-off"></i>Logout</a></li>';

        return $boutons;
    }
    
    /**
     * Convertit une chaine de type YYYY-mm-dd en dd/mm/yyyy
     * @param string $date
     * @return string dd/mm/yyyy
     */
    public static function convert_date_en_to_fr ( $date ) {
        // Cette fonction convertir une date qui est au format anglais au format franais ...
        
        $date = str_replace ( '-' , '/' , $date ) ;
        if(!preg_match("/[0-9]{4}\/[0-9]{2}\/[0-9]{2}/", $date)) return  "00/00/0000";
        $tb = explode ( "/" , $date ) ;
        
        $date = $tb[2] . "/" . $tb[1] . "/" . $tb[0] ;
        if($date == "//") return "00/00/0000";
        return $date;
    } 

    /**
     * Convertit une chaine de type dd/mm/yyyy en YYYY-mm-dd
     * @param string $date
     * @return string yyyy-mm-dd
     */
    public static function convert_date_fr_to_en ( $date ) {
        // Cette fonction convertir une date qui est au format franais au format anglais ...
        $date = str_replace ( '-' , '/' , $date ) ;
        $tb = explode ( "/" , $date ) ;
        return $tb[2] . "-" . $tb[1] . "-" . $tb[0] ;
    } 
    
    /**
     * Launche an historized mysql query
     * @param string $sql
     * @return Ressource mysql_query ressource
     */
    public static function _mysql_query($sql)
    {
        
        if(isset($_SESSION)) $sess_login = $_SESSION['sess_login'];
        else $sess_login = "CRONTAB";

        $sql2 = "INSERT INTO mysql_history (EMP_NO, DATE, REQUEST)
                VALUES (
                    '" . $sess_login . "',
                    '" . date("Y-m-d H:i:s") . "',
                    '" . mysql_real_escape_string($sql) . "')";
        @mysql_query($sql2);	

        $req = mysql_query($sql) or die(mysql_error() . $sql);

        return $req;
    }
    
    public static function _mysql_fetch_array($req)
    {
        return mysql_fetch_array($req);	
    }
    
    public static function handleFatalErrors() {
        if(php_sapi_name() != "cli") {
            register_shutdown_function(function() {
                $last_error = error_get_last();
                if($last_error['type'] === E_ERROR || $last_error['type'] === E_USER_ERROR) {
                   $message = "This error has been thrown on swissinside :";
                   ob_start();
                   var_dump($last_error);
                   $message .= "\n" .  ob_get_clean();
                   mail("ezs-it-notifications@easyjet.com", "Error on swissinside", $message);
                   die(file_get_contents(__DIR__ . "/../../../../web/error500.html"));
                }
             });
        }        
    }

}

