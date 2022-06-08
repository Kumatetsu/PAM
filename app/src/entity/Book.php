<?php

namespace App\Entity;

class Book
{
    public function __construct(
        private int $id,
        private string $name,
        private int $authorId,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->authorId = $authorId;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'authorId' => $this->authorId,
        ];
    }
}
