<?php

namespace App\Http\Responses;

use App\Http\Responses\Interfaces\IResponse;

abstract class AbstractResponse implements IResponse
{

    /**
     * Данные, которые я собираюсь вывести пользователю
     * @var array
     */
    public array $data = [];

    private function __construct() {}

    private static ?IResponse $instance = null;

    /**
     * @param ResponseTypesEnum|null $type
     * @return IResponse
     */
    public static function getInstance(?ResponseTypesEnum $type = null): IResponse
    {
        if(!is_null(self::$instance)) {
            return self::$instance;
        }



        switch ($type) {
            case ResponseTypesEnum::HTML:
            case null:
                self::$instance = new HtmlResponse();
                break;
            case ResponseTypesEnum::JSON:
                self::$instance = new JsonResponse();
                break;
        }
        return self::$instance;
    }
}