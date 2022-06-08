<?php

namespace App\Repository;

class BookRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = 'SELECT * FROM books';
        $result = $this->database->query($query);

        return $result->fetch_all();
    }
}
