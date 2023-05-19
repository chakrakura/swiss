<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ThhdDxsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.thhdDxs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.thhdDxs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'disruption' => ['privates', 'App\\Easyjet\\OtpBundle\\Entity\\OtpDisruption', 'getOtpDisruptionService', true],
        ], [
            'disruption' => 'App\\Easyjet\\OtpBundle\\Entity\\OtpDisruption',
        ]);
    }
}
