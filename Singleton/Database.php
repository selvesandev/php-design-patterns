<?php

class Database
{
    public static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        //Lazy initialization
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}

$db = Database::getInstance();
$obj = Database::getInstance();
var_dump($db);//object(Database)#1 (0) { }
var_dump($obj);//object(Database)#1 (0) { }

