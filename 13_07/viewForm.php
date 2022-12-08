<?php

// require "template/header.php";
require_once __DIR__ . "/lib/forms.php";

for($i = 0; $i < 5; $i++) {
    // #pragma once - c++
    include "template/article.php";
}

/**
 * Model
 */
$user = [
    'email' => 'gueet@super.com',
    'name' => 'Vasya Pupkin'
];

/**
 * VM - Наполнение данными
 */
if(isset($_GET['email']))
    $user['email'] = $_GET['email'];
if(isset($_GET['name'])) {
    if (strlen($_GET['name']) < 3) {
        echo " Имя не может быть короче 2 символов";
    } else {
        $user['name'] = htmlentities($_GET['name']);
    }
}

//if(!function_exists('echoForm'))
//include_once __DIR__ . "/lib/forms.php";
//require_once __DIR__ . "/lib/forms.php";
echoForm($user);

/**
 * Подключение сторонних файлов
 */
// if(!function_exists('echoForm'))
//include_once __DIR__ . "/lib/forms.php";
//require_once __DIR__ . "/lib/forms.php";

echoForm($user);
?>

<?php

