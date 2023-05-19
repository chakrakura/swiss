<?php

function connect(){
    global $_HOST;
    global $_LOGIN;
    global $_PASSWORD;
    global $_DB;

    // Create connection
    $conn = new mysqli($_HOST, $_LOGIN, $_PASSWORD, $_DB);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function is_admin($login="") { // Returns true if the user is a duty, returns false otherwise
    
    $conn = connect();
    $recept_log = false;
    if($login) $recept_log = true;

    global $_UMAN_V2_ADMIN;
    if ($_UMAN_V2_ADMIN) return $_UMAN_V2_ADMIN;
    if($login) $sql = "SELECT acces_ok FROM users WHERE log_user='" . $login . "'" ;
    else $sql = "SELECT acces_ok FROM users WHERE log_user='" . $_SESSION['sess_login'] . "' AND pwd_user='" . $_SESSION['sess_password'] . "'" ;
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    if($user['acces_ok'] == "2") {
        if(!$recept_log) $_UMAN_V2_ADMIN = true; else return true;
    }
    else {
        if(!$recept_log) $_UMAN_V2_ADMIN = false; else return false;
    }

    return $_UMAN_V2_ADMIN;
}

function get_user_id($login="") { // Returns the login id passed as a parameter
    $conn = connect();
    if(!$login) $login = $_SESSION['sess_login'] ;
    if(!$login) return 0;
    $sql = "SELECT id_user FROM users WHERE log_user='" . $login . "'" ;
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    return $user['id_user'] ;
}

function is_IT($login="") { // Returns true if the user is a duty, returns false otherwise
    $conn = connect();

    $recept_log = false;
    if($login) $recept_log = true;

    global $_UMAN_V2_IT;
    if ($_UMAN_V2_IT && !$recept_log) return $_UMAN_V2_IT;
    if($login) $sql = "SELECT acces_ok FROM users WHERE log_user='" . $login . "'" ;
    else $sql = "SELECT acces_ok FROM users WHERE log_user='" . $_SESSION['sess_login'] . "' AND pwd_user='" . $_SESSION['sess_password'] . "'" ;
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    if($user['acces_ok'] == "3") {
        if(!$recept_log) $_UMAN_V2_IT = true; else return true;
    }
    else {
        if(!$recept_log) $_UMAN_V2_IT = false; else return false;
    }

    return $_UMAN_V2_IT;
}

function is_rostering() {

    $conn = connect();
    
    if(defined("IS_ROSTERING_USER")) return IS_ROSTERING_USER;
    
    $sql = "SELECT * FROM rostering_team WHERE id_user='" . get_user_id() . "'";
    $result = $conn->query($sql);
    if($result->num_rows) {
        define('IS_ROSTERING_USER', true);
    }
    else {
        define('IS_ROSTERING_USER', false);
    }
    
    return IS_ROSTERING_USER;
}