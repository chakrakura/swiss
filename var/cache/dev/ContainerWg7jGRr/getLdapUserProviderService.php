<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLdapUserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\SwissinsideCoreBundle\Security\LdapUserProvider' shared autowired service.
     *
     * @return \App\Easyjet\SwissinsideCoreBundle\Security\LdapUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'User'.\DIRECTORY_SEPARATOR.'UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'SwissinsideCoreBundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'LdapUserProvider.php';

        return $container->privates['App\\Easyjet\\SwissinsideCoreBundle\\Security\\LdapUserProvider'] = new \App\Easyjet\SwissinsideCoreBundle\Security\LdapUserProvider(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}