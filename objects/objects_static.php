<?php
//НАЧАЛО РАБОТЫ СО СТАТИЧЕСКИМИ МЕТОДАМИ


class StaticExample
{
    static public $number = 0;
    static function sayHello()
    {
        $output = self::$number++;
        echo "Hello from static action";
    }

    static function getData()
    {

    }
}


$pdo = Db::getConnection();

$transport = Transport::getInstance(1,$pdo);