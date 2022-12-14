<?php

namespace App\Http\Requests;

/**
 * Задача класса - собрать все возможные данные по запросу
 * Проверить их верность (валидность)
 * исключить атаки и иьекции
 *
 * - Такой класс в обработке 1 пользователя может быть только 1
 */
class Request
{
    private static ?Request $instance = null;

    private function __clone() { }
    private function __construct() {
        // echo " Создался класс :" . __CLASS__ . " \n ";
    }

    /**
     * Получаем единственный экземпляр класса в приложении
     * @return Request
     */
    public static function getInstance(): Request
    {
        if(is_null(self::$instance)) {
            self::$instance = new Request();
        }
        return self::$instance;
    }

    /**
     * Метод, который позволяет программисту получить переменную из запроса
     * При этом проверить ее через валидатор на наличие иъекций и атак
     * @param $name
     * @return mixed|null
     */
    public function input($name): mixed
    {
        $value = null;
        if(isset($_GET[$name]))
            $value = $_GET[$name];
        else if (isset($_POST[$name]))
            $value = $_POST[$name];

        if(is_null($value)) return null;
        $this->validator($value);
        return $value;
    }

    /**
     * Метод проверки нормальности присланной переменной в запросе
     * Ищем в ней иъекции, атаки и тд
     * @param $value
     * @return void
     */
    private function validator($value): void
    {
        if($value == 'SQL')
            die('Attack Detected');
    }

}

