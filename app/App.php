<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 12/02/15
 * Time: 11:19
 */

namespace app;


class App {

    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $database;
    private static $title = 'Site PT2';

    public static function getDb(){
        if(self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }

    public static function notFound(){
        header("HTTP/1.0 404 Not Found");
        header('Location:index.php?p=404');
    }

    public static function getTitle(){
        return self::$title;
    }

    public static function setTitle($title){
        self::$title = $title;
    }

    public static function getHome(){
        return 'index.php?p=home';
    }

}