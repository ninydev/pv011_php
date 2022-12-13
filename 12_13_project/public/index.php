<?php
/**
 * Точка входа в приложение
 * Именно с него начниается управление вашим веб приложением
 */

// Подключить настроки проекта
require_once '../vendor/autoload.php';

?>

<h1> Hello World</h1>

<pre>
<?php

$myLibClass = new App\Lib\MyLibClass();

$myHttpController = new App\Controllers\Http\PostController();
$myApiController = new App\Controllers\Api\PostController();

?>

</pre>
