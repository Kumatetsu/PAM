<?php

namespace App\Core\Http;

class Request
{
    public function __construct()
    {
    }

    public function getQuery()
    {
        return $_GET;
    }
}
