<?php

namespace ContainerWg7jGRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFdtrMonthlyReportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport' shared autowired service.
     *
     * @return \App\Easyjet\FdtrBundle\Entity\FdtrMonthlyReport
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot autowire service "App\\Easyjet\\FdtrBundle\\Entity\\FdtrMonthlyReport": argument "$month" of method "__construct()" references class "DateTIme" but no such service exists.');
    }
}
