<?php

namespace App\Lib;

use mysqli;

class MySql
{
    private static ?MySql $instance = null;
    private mysqli|false $mySql_Write;
    private mysqli|false $mySql_Read;

    private function __clone() { }
    private function __construct() {
        $this->mySql_Write = mysqli_connect(
            $_ENV['DB_HOST'],
            $_ENV['DB_USERNAME'],
            $_ENV['DB_PASSWORD'],
            $_ENV['DB_DATABASE'],
            $_ENV['DB_PORT'],
        );
    }



    /**
     * Получаем единственный экземпляр класса в приложении
     * @return MySql
     */
    public static function getInstance(): MySql
    {
        if(is_null(self::$instance)) {
            self::$instance = new MySql();
        }
        return self::$instance;
    }

}