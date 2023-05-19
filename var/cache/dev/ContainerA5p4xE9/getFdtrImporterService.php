<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFdtrImporterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fdtr_importer' shared autowired service.
     *
     * @return \App\Easyjet\FdtrBundle\Services\FdtrImporterService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'FdtrBundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'FdtrImporterService.php';

        return $container->services['fdtr_importer'] = new \App\Easyjet\FdtrBundle\Services\FdtrImporterService(($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}