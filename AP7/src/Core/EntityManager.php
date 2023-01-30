<?php

namespace app\Core;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager as Em;
use Doctrine\ORM\ORMSetup;

class EntityManager{
    private $em;
    private $dbConfig;
    function __construct()
    {
        $paths = [__DIR__ . "/../Entity"];
        $idDevMode = false;
        $this->dbConfig = json_decode(file_get_contents(__DIR__."/../../config/" . $_ENV["DBCONFIGFILE"]), true);
        $dbParams = [
            'driver' => 'pdo_mysql',
            'user' => $this->dbConfig["user"],
            'password' => $this->dbConfig["password"],
            'dbname' => $this->dbConfig["dbname"],
            'host' => $this->dbConfig["server"]
        ];
       
        $config = ORMSetup::createAnnotationMetadataConfiguration($paths, $idDevMode);
        $connection = DriverManager::getConnection($dbParams, $config);
        $this->em = new Em($connection, $config);
    }
    public function getEm(){
        return $this->em;
    }   
}