<?php

namespace App\Repository;

use App\Config\Config;
use App\Core\Db\Mariadb;

abstract class Repository
{
    protected $database;

    public function __construct()
    {
        $dbAdapter = Mariadb::getInstance(Config::DB_HOST, Config::DB_USER, Config::DB_PASS, Config::DB_NAME);
        $this->database = $dbAdapter->getConnection();
    }
}
