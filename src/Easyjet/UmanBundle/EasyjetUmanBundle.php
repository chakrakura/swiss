<?php

namespace App\Easyjet\UmanBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EasyjetUmanBundle extends Bundle
{
    /**
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface 
     */
    private static $containerInstance = null; 

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) 
    { 
        parent::setContainer($container); 
        self::$containerInstance = $container; 
    } 

    /**
     * 
     * @return \Symfony\Component\DependencyInjection\ContainerInterface 
     */
    public static function getContainer() 
    { 
        return self::$containerInstance; 
    } 
}
