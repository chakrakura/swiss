<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOfficeWishesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Easyjet\EleaveBundle\Controller\OfficeWishesController' shared autowired service.
     *
     * @return \App\Easyjet\EleaveBundle\Controller\OfficeWishesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'EleaveBundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'OfficeWishesController.php';

        $container->services['App\\Easyjet\\EleaveBundle\\Controller\\OfficeWishesController'] = $instance = new \App\Easyjet\EleaveBundle\Controller\OfficeWishesController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Easyjet\\EleaveBundle\\Controller\\OfficeWishesController', $container));

        return $instance;
    }
}
