<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LboT1gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LboT1g_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LboT1g_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'factorisation' => ['privates', 'App\\Easyjet\\OtpBundle\\Entity\\Factorisations', 'getFactorisationsService', true],
        ], [
            'factorisation' => 'App\\Easyjet\\OtpBundle\\Entity\\Factorisations',
        ]);
    }
}