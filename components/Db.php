<?php

class Db
{
    public static function getConnection()
    {
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $host = "phpmyadmin.app";
        $db_name = "training.info";
        $user = "homestead";
        $password = "secret";
        $dsn = "mysql:host=$host;dbname=$db_name;";
        $db = new PDO($dsn, $user, $password,$opt);
        $db->exec("set names utf8");
        return $db;
    }
}
