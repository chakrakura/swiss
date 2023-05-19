<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    App\Easyjet\SwissinsideCoreBundle\EasyjetSwissinsideCoreBundle::class => ['all' => true],
    Symfony\WebpackEncoreBundle\WebpackEncoreBundle::class => ['all' => true],
	App\Easyjet\WorkingSheetBundle\EasyjetWorkingSheetBundle::class => ['all' => true],
    App\Easyjet\UmanBundle\EasyjetUmanBundle::class => ['all' => true],
    App\Easyjet\EpayslipBundle\EasyjetEpayslipBundle::class => ['all' => true],
    App\Easyjet\EwishBundle\EasyjetEwishBundle::class => ['all' => true],
    App\Easyjet\HrisBundle\EasyjetHrisBundle::class => ['all' => true],
    App\Easyjet\EleaveBundle\EasyjetEleaveBundle::class => ['all' => true],
    App\Easyjet\OtpBundle\EasyjetOtpBundle::class => ['all' => true],
    App\Easyjet\FdtrBundle\EasyjetFdtrBundle::class => ['all' => true],
    App\Easyjet\SfsuBundle\EasyjetSfsuBundle::class => ['all' => true],
    
];
