<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFixRequestAssignationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\OtpBundle\Services\FixRequestAssignation' shared autowired service.
     *
     * @return \App\Easyjet\OtpBundle\Services\FixRequestAssignation
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'OtpBundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'FixRequestAssignation.php';

        return $container->privates['App\\Easyjet\\OtpBundle\\Services\\FixRequestAssignation'] = new \App\Easyjet\OtpBundle\Services\FixRequestAssignation(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}