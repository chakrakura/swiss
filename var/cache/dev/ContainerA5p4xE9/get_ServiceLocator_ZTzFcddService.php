<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZTzFcddService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZTzFcdd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZTzFcdd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', 'App\\Easyjet\\UmanBundle\\Entity\\Users', 'getUsersService', true],
        ], [
            'user' => 'App\\Easyjet\\UmanBundle\\Entity\\Users',
        ]);
    }
}
