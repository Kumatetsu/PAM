<?php

namespace App\Entity;

use App\Entity\Book;

class BookDictionnary
{
    private array $books = [];

    public static function fromDbResult(array $books)
    {
        $bookDictionnary = new BookDictionnary();
        foreach ($books as $book) {
            $bookDictionnary->add(
                new Book($book[0], $book[1], $book[2])
            );
        }

        return $bookDictionnary;
    }

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function toArray(): array
    {
        return array_map(function (Book $book) {
            return $book->toArray();
        }, $this->books);
    }
}
