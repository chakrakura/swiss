<?php

namespace App\Easyjet\SfsuBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

class EasyjetSfsuExtension extends Extension  
{

    public function prepend(ContainerBuilder $containerBuilder) 
   {
    

    // get the configuration of AcmeHelloExtension (it's a list of configuration)
    $configs = $containerBuilder->getExtensionConfig($this->getAlias());

    
}
 
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Config')
        );
        $loader->load('services.yaml');

      
       
    }
}
