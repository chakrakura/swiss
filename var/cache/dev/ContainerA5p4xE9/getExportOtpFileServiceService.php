<?php

namespace ContainerA5p4xE9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExportOtpFileServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\OtpBundle\Services\ExportOtpFileService' shared autowired service.
     *
     * @return \App\Easyjet\OtpBundle\Services\ExportOtpFileService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'OtpBundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'ExportOtpFileService.php';

        return $container->privates['App\\Easyjet\\OtpBundle\\Services\\ExportOtpFileService'] = new \App\Easyjet\OtpBundle\Services\ExportOtpFileService(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}
