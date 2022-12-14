<?php

namespace App\Http\Responses\Interfaces;

interface IResponse
{
    /**
     * Получить построенный ответ
     * @return string
     */
    public function render(): string;

}