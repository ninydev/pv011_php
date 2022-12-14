<?php

namespace App\Http\Responses;

class HtmlResponse extends AbstractResponse
{

    public function render(): string
    {
        return "<h1> Hello World </h1>";
    }
}