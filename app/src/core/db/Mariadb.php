<?php

namespace App\Core\Db;

use Exception;
use mysqli;

class Mariadb
{
    private static $instance;
    private mysqli $connection;

    private function __construct(
        private string $host,
        private string $user,
        private string $password,
        private string $dbname
    ) {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if ($this->connection->connect_error) {
            throw new Exception("Connection failed: " . $this->connection->connect_error);
        }
    }

    public static function getInstance(
        string $host,
        string $user,
        string $password,
        string $dbname
    ) {
        if (is_null(self::$instance)) {
            self::$instance = new Mariadb($host, $user, $password, $dbname);
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
