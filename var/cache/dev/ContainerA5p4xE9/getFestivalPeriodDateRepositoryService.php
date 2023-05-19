<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFestivalPeriodDateRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\EwishBundle\Repository\FestivalPeriodDateRepository' shared autowired service.
     *
     * @return \App\Easyjet\EwishBundle\Repository\FestivalPeriodDateRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'collections'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Collections'.\DIRECTORY_SEPARATOR.'Selectable.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'EwishBundle'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'FestivalPeriodDateRepository.php';

        return $container->privates['App\\Easyjet\\EwishBundle\\Repository\\FestivalPeriodDateRepository'] = new \App\Easyjet\EwishBundle\Repository\FestivalPeriodDateRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
