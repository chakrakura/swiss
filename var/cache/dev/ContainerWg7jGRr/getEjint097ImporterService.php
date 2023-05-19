<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEjint097ImporterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'ejint097_importer' shared service.
     *
     * @return \App\Easyjet\HrisBundle\Services\Ejint097ImporterService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Easyjet'.\DIRECTORY_SEPARATOR.'HrisBundle'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'Ejint097ImporterService.php';

        return $container->services['ejint097_importer'] = new \App\Easyjet\HrisBundle\Services\Ejint097ImporterService(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), '/root/grosstonet_file_folder', '/data02/hris/ejint097/archives', '/data02/hris/tmp');
    }
}