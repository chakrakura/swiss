<?php

include "etc/auth/mysql.php";
include "etc/auth/mssql.php";
include "etc/auth/oracle.php";
// Le nom d'utilisateur et le password pour se connecter a PHPMyAdmin ...
$_HOST = DB_HOST ;
$_LOGIN = DB_USER ;
$_PASSWORD = DB_PASS ;
$_DB = DB_NAME ;

# MsSQL Database name
define('MSSQL_DB', "PSELive");

# Taleo folder
define("TALEO_FOLRDER", "/data01/uman/taleo/tmp");

$_BASE = "uman" ;
$_BASE_UMANAGER = "uman" ;
$_BASE_NEWS = "enews" ;
$_TABLE_HISTORIQUE = "historique" ;

// Emplacements divers
$chemin = "/uman" ; // /nom_du_dossier_de_l_appli
$chemin_images = $chemin . "/images" ;	
$chemin_serveur = "/usr/share/swissinside/web";

$racine = "$chemin_serveur/$chemin";

$dossier_upload = "/data01/uman/";
$dossier_tmp = "/tmp" ;

define("LOCAL_IP", "172.26.168.116");

define('MAIL_HR', "swisshr@easyjet.com");
define('MAIL_CREW_MANAGER', "#BaseCabinCrewManagersEZS@easyJet.com");
define("MAIL_ESP", "easyjetITServicedesk@easyjet.com");

define("MAIL_NEW_CC_LEAVER", "#UmanNewCabinCrewLeaver@easyJet.com");
define("MAIL_NEW_PILOT_LEAVER", "#UmanNewPilotLeaver@easyJet.com");
define("ACCM_SWISS", "accmswiss@easyjet.com");
define("UMAN_FLIGT_OPS", "#uman_flightops@easyjet.com");

define('FPDF_FONTPATH','/usr/share/swissinside/web/uman/pdf/font/') ;
define('PDF_LICENSE_KEY', 'L700102-010500-731889-ZNFDH2-V99C22');

define('SQL_CONVERT_UTF', false);

define('WIKIDB',"wikidb");


define("SUPPORT_EMAIL", "its-geneva@easyjet.com");

// Nombre d'heures pour un contrat en 100%
define("APOINTED_HOURS", 42);

// Staff travel : Nombre maximum de requêtes par an :
define("STRAV_MAX_CHANGES", 20);

// Gestion des suppressions définitives d'utilisateurs
define("SICKNESS_DOCUMENTS_FOLDER", "/data01/uman/sickness");
define("MYSQL_LOG_FILES", "/data01/uman/backup");
define("MAIL_IT", "its-geneva@easyjet.com");
define("MAIL_IT_MANAGER", "vincent.libsig@easyjet.com");


// Gestion des rapports de bug
define("BUG_REPORT_VALIDATION_SCRIPT", "http://iabsis.com/igestis/modules/bug_report/updatedb.php");


// Email pour les leavers
define("NOTIFY_ALL_FOR_LEAVERS", "swissrh@easyjet.com,its-geneva@easyjet.com,gvacrewroom@easyjet.com,bslcrewroom2@easyjet.com,swisstrainer@easyjet.com,sebastien.benoit@easyjet.com");

// Clé de décryptage de l'api prosinistre
define("PROSINISTRE_DECRYPT_KEY", "asdfghjklopiuztr");

define("SWISSINSIDE_HTTP_HOST", "swissinside.easyjet.com");

define("NEW_PILOT_MAILING", "newEZSpilot@easyjet.com");

define("AVAILIBILITY_FILES_FOLDER", "/data01/eleave/availibility_files");