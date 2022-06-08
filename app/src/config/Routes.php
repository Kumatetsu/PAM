<?php

use App\Core\Http\JsonResponse;
use App\Core\Route\Router;
use App\Entity\BookDictionnary;
use App\Repository\BookRepository;

$router = new Router();

/**
 * TODO: je ne me suis pas vraiment focus sur l'idée de faire des controllers
 * Mon idée était de poser les briques pour une route et en suite de faire évoluer tout ça.
 */
$router->get('/books', function () {
    $bookRepository = new BookRepository();
    $books = $bookRepository->getAll();

    $booksDictionnary = BookDictionnary::fromDbResult($books);

    return new JsonResponse($booksDictionnary->toArray());
});

$router->get('/books/{id}', function ($id) {
    return new JsonResponse(['message' => 'find book with id']);
});
