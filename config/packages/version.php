<?php
if(!defined("SWISSINSIDE_VERSION")) {
    //define("SWISSINSIDE_VERSION", str_replace(" ", "_", exec("rpm -q swissinside")));
	define("SWISSINSIDE_VERSION", "v3.0.8-17");
    $container->setParameter('swissinsde_version', SWISSINSIDE_VERSION);
    
    $supportFormInstalled = is_dir(__DIR__ . "/../../src/Easyjet/SupportFormBundle");
    //define("SUPPORT_FORM_INSTALLED", $supportFormInstalled);
	define("SUPPORT_FORM_INSTALLED", "1.0");
    $container->setParameter('support_form_installed', SUPPORT_FORM_INSTALLED);
}