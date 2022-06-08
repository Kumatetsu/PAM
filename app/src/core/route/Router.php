<?php

namespace App\Core\Route;

use App\Core\Http\IResponse;
use App\Core\Http\JsonResponse;

class Router
{
    private const GET = 'GET';
    private const POST = 'POST';

    private $routes = [];

    public function get($path, $callback)
    {
        $this->routes[self::GET][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes[self::POST][$path] = $callback;
    }

    public function match($method, $url): IResponse
    {
        if (!isset($this->routes[$method][$url])) {
            return new JsonResponse(['error' => 'Not found'], 404);
        }

        /**
         * TODO: Actuellement je ne peux charger qu'une seule route si elle match parfaitement
         * Si je veux pouvoir faire en sorte que des routes soient chargées alors qu'elles ont des caractères dynamique
         * Je serai obligé de faire évoluer le code pour pouvoir vérifier si le path d'origine peut correspondre à la route
         * Ayant la valeur dynamique
         */


        return call_user_func($this->routes[$method][$url]);
    }
}
