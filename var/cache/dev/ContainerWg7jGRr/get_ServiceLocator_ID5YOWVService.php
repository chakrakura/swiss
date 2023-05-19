<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ID5YOWVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iD5YOWV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iD5YOWV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'email' => ['privates', 'App\\Easyjet\\EwishBundle\\Entity\\EmailNotifications', 'getEmailNotificationsService', true],
        ], [
            'email' => 'App\\Easyjet\\EwishBundle\\Entity\\EmailNotifications',
        ]);
    }
}
