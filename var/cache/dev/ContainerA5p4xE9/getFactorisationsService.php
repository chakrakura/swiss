<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFactorisationsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\OtpBundle\Entity\Factorisations' shared autowired service.
     *
     * @return \App\Easyjet\OtpBundle\Entity\Factorisations
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'OtpBundle'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'Factorisations.php';

        return $container->privates['App\\Easyjet\\OtpBundle\\Entity\\Factorisations'] = new \App\Easyjet\OtpBundle\Entity\Factorisations();
    }
}
