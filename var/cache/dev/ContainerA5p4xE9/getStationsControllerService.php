<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStationsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Easyjet\UmanBundle\Controller\StationsController' shared autowired service.
     *
     * @return \App\Easyjet\UmanBundle\Controller\StationsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'UmanBundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'StationsController.php';

        $container->services['App\\Easyjet\\UmanBundle\\Controller\\StationsController'] = $instance = new \App\Easyjet\UmanBundle\Controller\StationsController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Easyjet\\UmanBundle\\Controller\\StationsController', $container));

        return $instance;
    }
}
