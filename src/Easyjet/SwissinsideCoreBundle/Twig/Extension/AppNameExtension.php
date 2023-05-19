<?php

namespace Easyjet\SwissinsideCoreBundle\Twig\Extension;

class AppNameExtension extends \Twig_Extension
{    
    /**
     * 
     * 
     */
    public function __construct()
    {        
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'appName' => new \Twig_Function_Method($this, 'appName')
        );
    }
    
    public function appName($application=null) {
        
        if($application===null) {
            $application = self::detectApplication();
        }        
     
        return $application;        
    }

    public static function detectApplication() {
        if(empty($_SERVER['SCRIPT_URL'])) return "swissinside";
        $path = explode("/", strtolower($_SERVER['SCRIPT_URL']));
        $application = ($path[1] == "app_dev.php") ? $path[2] : $path[1];
        if(!in_array($application, array("uman", "eleave", "ewish", "eftr", "enews", "epayslip", "sfsu", "hris", "support-form", "qms"))) $application = "swissinside";
        
        return $application;
    }
    
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'appName';
    }
}