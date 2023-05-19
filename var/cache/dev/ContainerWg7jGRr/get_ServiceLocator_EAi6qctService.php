<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EAi6qctService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eAi6qct' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eAi6qct'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dataCheck' => ['privates', 'App\\Easyjet\\HrisBundle\\Entity\\HrisEjint096DataCheck', 'getHrisEjint096DataCheckService', true],
        ], [
            'dataCheck' => 'App\\Easyjet\\HrisBundle\\Entity\\HrisEjint096DataCheck',
        ]);
    }
}
