<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHrisUsersImporterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hris_users_importer' shared service.
     *
     * @return \App\Easyjet\HrisBundle\Services\UsersImporterService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'HrisBundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'UsersImporterService.php';

        return $container->services['hris_users_importer'] = new \App\Easyjet\HrisBundle\Services\UsersImporterService();
    }
}
