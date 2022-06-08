<?php

namespace App\Core\Http;

class JsonResponse implements IResponse
{
    public function __construct(private array $data, private int $statusCode = 200)
    {
        $this->data = $data;
        $this->statusCode = $statusCode;
    }

    public function send()
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($this->data);
    }
}
