<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDisruptionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\OtpBundle\Entity\Disruptions' shared autowired service.
     *
     * @return \App\Easyjet\OtpBundle\Entity\Disruptions
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'OtpBundle'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'Disruptions.php';

        return $container->privates['App\\Easyjet\\OtpBundle\\Entity\\Disruptions'] = new \App\Easyjet\OtpBundle\Entity\Disruptions();
    }
}
