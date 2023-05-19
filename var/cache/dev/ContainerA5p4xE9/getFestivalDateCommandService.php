<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFestivalDateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\EwishBundle\Command\FestivalDateCommand' shared autowired service.
     *
     * @return \App\Easyjet\EwishBundle\Command\FestivalDateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'EwishBundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'FestivalDateCommand.php';

        $container->privates['App\\Easyjet\\EwishBundle\\Command\\FestivalDateCommand'] = $instance = new \App\Easyjet\EwishBundle\Command\FestivalDateCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setName('app:update-ewish-festival-period-date');
        $instance->setDescription('Updates the EwishFestivalPeriodDate table with current year');

        return $instance;
    }
}