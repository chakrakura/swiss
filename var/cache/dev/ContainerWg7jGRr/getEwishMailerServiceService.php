<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEwishMailerServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\EwishBundle\Services\EwishMailerService' shared autowired service.
     *
     * @return \App\Easyjet\EwishBundle\Services\EwishMailerService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'EwishBundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'EwishMailerService.php';

        return $container->privates['App\\Easyjet\\EwishBundle\\Services\\EwishMailerService'] = new \App\Easyjet\EwishBundle\Services\EwishMailerService(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')));
    }
}
