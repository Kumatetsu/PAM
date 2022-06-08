<?php
require 'vendor/autoload.php';

require 'app/src/config/Routes.php';

$response = $router->match($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
$response->send();
