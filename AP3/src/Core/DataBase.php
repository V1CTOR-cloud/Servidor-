<?php

namespace app\Core;

use PDO;
use PDOException;

class DataBase
{
    protected $conn;
    private $dbConfig;

    public function __construct()
    {
        $this->dbConfig = json_decode(file_get_contents(__DIR__ . "/../../Config/" . $_ENV['DBCONFIGFILE']), true);
        $this->connect();
    }
    private function connect()
    {
        $serverName = $this->dbConfig["server"];
        $userName = $this->dbConfig["user"];
        $password = $this->dbConfig["password"];
        $dbName = $this->dbConfig["dbname"];

        try {
            $this->conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
