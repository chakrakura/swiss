<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkingSheetUsersTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\WorkingSheetBundle\Form\WorkingSheetUsersType' shared autowired service.
     *
     * @return \App\Easyjet\WorkingSheetBundle\Form\WorkingSheetUsersType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'WorkingSheetBundle'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'WorkingSheetUsersType.php';

        return $container->privates['App\\Easyjet\\WorkingSheetBundle\\Form\\WorkingSheetUsersType'] = new \App\Easyjet\WorkingSheetBundle\Form\WorkingSheetUsersType();
    }
}
