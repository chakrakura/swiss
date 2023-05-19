<?php

namespace Easyjet\SwissinsideCoreBundle\Twig\Extension;

use Easyjet\SwissinsideCoreBundle\Twig\Extension\AppNameExtension;


class AppVersionExtension extends \Twig_Extension
{    
    private static $appVersionCache = array();
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
            'appVersion' => new \Twig_Function_Method($this, 'appVersion')
        );
    }
    
    public function appVersion($application=null) {
        if($application===null) {
            $application = AppNameExtension::detectApplication();
        }
        
        return $this->getAppVersion($application);
        
    }
    

    protected function getAppVersion($application) {
        if(empty(self::$appVersionCache[$application])) {
            $version = str_replace(" ", "_", exec("rpm -q $application"));
            $version = str_replace($application."-", "", $version);
            $version = str_replace(".noarch", "", $version);
            
            self::$appVersionCache[$application] =  $version;
        }
        return self::$appVersionCache[$application];
    }
    
    
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'appVersion';
    }
}