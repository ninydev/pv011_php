<?php
/**
 * Точка входа в приложение
 * Именно с него начниается управление вашим веб приложением
 */

// Подключить настроки проекта
require_once '../vendor/autoload.php';

// Подключить необходимые классы
use App\Http\Requests\Request;
use App\Http\Responses\AbstractResponse;
use App\Http\Responses\ResponseTypesEnum;


// Анализируем запрос - Request (POST, GET, COOKIE, FILES ...)
$request = Request::getInstance();

// Построение ответа (класс обертка куда я буду формировать ответ)
$response = AbstractResponse::getInstance(ResponseTypesEnum::JSON);

// Вывод построенного ответа на отдачу клиенту
echo $response->render();



/**
 * Вывод технических данных
 */
echo "<footer><pre>";
// var_dump($_GET);
// var_dump($_POST);
echo "</pre></footer>";

