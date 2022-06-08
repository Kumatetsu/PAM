<?php

namespace App\Core;

class HttpRequest
{
    public function __construct()
    {
    }

    public function getQuery()
    {
        return $_GET;
    }
}
