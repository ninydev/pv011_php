<?php

namespace App\Http\Responses;

class JsonResponse extends AbstractResponse
{

    public function render(): string
    {
        return json_encode( ["data" => "Hello World"]);
    }
}