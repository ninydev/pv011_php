<?php
/**
 * Точка входа в приложение
 * Именно с него начниается управление вашим веб приложением
 */

// Подключить настроки проекта
require_once '../vendor/autoload.php';

// Анализируем запрос - Request (POST, GET, COOKIE, FILES ...)
$request = App\Http\Requests\Request::getInstance();

// Построение ответа (класс обертка куда я буду формировать ответ)
$response = new App\Http\Responses\JsonResponse();

// Вывод построенного ответа на отдачу клиенту
echo $response->render();



/**
 * Вывод технических данных
 */
echo "<footer><pre>";
// var_dump($_GET);
// var_dump($_POST);
echo "</pre></footer>";

