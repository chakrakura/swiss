<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHrisMailerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hris_mailer' shared service.
     *
     * @return \App\Easyjet\HrisBundle\Services\HrisMailerService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'HrisBundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'HrisMailerService.php';

        return $container->services['hris_mailer'] = new \App\Easyjet\HrisBundle\Services\HrisMailerService(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));
    }
}
