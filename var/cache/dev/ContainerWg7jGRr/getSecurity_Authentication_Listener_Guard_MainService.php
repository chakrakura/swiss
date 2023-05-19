<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Guard_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.listener.guard.main" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.listener.guard.main" service is deprecated, use the new authenticator system instead.');

        return $container->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($container->load('getSecurity_Authentication_GuardHandlerService'), ($container->privates['security.authentication.manager'] ?? $container->load('getSecurity_Authentication_ManagerService')), 'main', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Easyjet\\SwissinsideCoreBundle\\Security\\LdapFormAuthenticator'] ?? $container->load('getLdapFormAuthenticatorService'));
        }, 1), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true);
    }
}
