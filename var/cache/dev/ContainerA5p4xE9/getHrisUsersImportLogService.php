<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHrisUsersImportLogService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\HrisBundle\Entity\HrisUsersImportLog' shared autowired service.
     *
     * @return \App\Easyjet\HrisBundle\Entity\HrisUsersImportLog
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'HrisBundle'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'HrisUsersImportLog.php';

        return $container->privates['App\\Easyjet\\HrisBundle\\Entity\\HrisUsersImportLog'] = new \App\Easyjet\HrisBundle\Entity\HrisUsersImportLog();
    }
}
