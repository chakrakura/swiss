<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHrisEjint096PayElementService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\HrisBundle\Entity\HrisEjint096PayElement' shared autowired service.
     *
     * @return \App\Easyjet\HrisBundle\Entity\HrisEjint096PayElement
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'HrisBundle'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'HrisEjint096PayElement.php';

        return $container->privates['App\\Easyjet\\HrisBundle\\Entity\\HrisEjint096PayElement'] = new \App\Easyjet\HrisBundle\Entity\HrisEjint096PayElement();
    }
}
