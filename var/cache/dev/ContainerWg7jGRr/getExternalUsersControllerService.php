<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExternalUsersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Easyjet\UmanBundle\Controller\ExternalUsersController' shared autowired service.
     *
     * @return \App\Easyjet\UmanBundle\Controller\ExternalUsersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'UmanBundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ExternalUsersController.php';

        $container->services['App\\Easyjet\\UmanBundle\\Controller\\ExternalUsersController'] = $instance = new \App\Easyjet\UmanBundle\Controller\ExternalUsersController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Easyjet\\UmanBundle\\Controller\\ExternalUsersController', $container));

        return $instance;
    }
}
