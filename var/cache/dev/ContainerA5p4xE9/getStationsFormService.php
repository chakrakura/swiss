<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStationsFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\UmanBundle\Form\StationsForm' shared autowired service.
     *
     * @return \App\Easyjet\UmanBundle\Form\StationsForm
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'UmanBundle'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'StationsForm.php';

        return $container->privates['App\\Easyjet\\UmanBundle\\Form\\StationsForm'] = new \App\Easyjet\UmanBundle\Form\StationsForm();
    }
}
