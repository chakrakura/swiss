<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSfsuFileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\SfsuBundle\Entity\SfsuFile' shared autowired service.
     *
     * @return \App\Easyjet\SfsuBundle\Entity\SfsuFile
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'SfsuBundle'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'SfsuFile.php';

        return $container->privates['App\\Easyjet\\SfsuBundle\\Entity\\SfsuFile'] = new \App\Easyjet\SfsuBundle\Entity\SfsuFile();
    }
}
