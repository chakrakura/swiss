<?php

namespace App\Easyjet\SwissinsideCoreBundle\Legacy;

class DoctrineEnv {    

    /**
     *
     * @var Doctrine\ORM\EntityManager $doctrine
     */
    private $doctrine;
    /**
     *
     * @var IgestisConfig Singleton token 
     */
    private static $self;
    
    private function __construct($dbname, $user, $password, $host) {
        require_once __DIR__ . '/../../../../vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php';
        $lib =  __DIR__ . '/../../../../vendor/doctrine/common/lib/';
        \Doctrine\ORM\Tools\Setup::registerAutoloadDirectory($lib);

        
        
        // Configuration de doctrine
        $this->configDoctrine($dbname, $user, $password, $host);
        
    }

    
    private function configDoctrine($dbname, $user, $password, $host) {
        $config = \Doctrine\ORM\Tools\Setup::createConfiguration(false);
        $driver = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(new \Doctrine\Common\Annotations\AnnotationReader(), array(
            __DIR__ . '/../../../../src/Easyjet/SwissinsideCoreBundle',
            __DIR__ . '/../../../../src/Easyjet/UmanBundle'
        ));
        $config->setMetadataDriverImpl($driver);
        $config->setAutoGenerateProxyClasses(true);
        
        $connectionOptions = array(
            'dbname' => $dbname,
            'user' => $user,
            'password' => $password,
            'host' => $host,
            'driver' => 'pdo_mysql',
            'charset' => 'utf8',
            'driverOptions' => array(
                1002 => 'SET NAMES utf8'
            )
        );        
        $this->doctrine = \Doctrine\ORM\EntityManager::create($connectionOptions, $config); 
        
        //$this->doctrine->getConnection()->executeQuery("SET GLOBAL max_allowed_packet=10737418249999;");
    }
    
    /**
     * 
     * @return \Easyjet\SwissinsideCoreBundle\Legacy\DoctrineEnv
     * @throws \Exception
     */
    public static function getInstance() {
        if(self::$self == null) {
            throw new \Exception("You must use DoctrineEnv::init() before to get any instance");
        }
        return self::$self;
    }
    
    public static function init($dbname, $user, $password, $host) {
        self::$self = new self($dbname, $user, $password, $host);
    }


    /**
     * 
     * @return \Doctrine\ORM\EntityManager
     */
    public function getDoctrine() {
        return $this->doctrine;
    }

}