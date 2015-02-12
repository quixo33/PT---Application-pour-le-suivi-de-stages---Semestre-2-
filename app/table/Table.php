<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 12/02/15
 * Time: 11:28
 */

namespace app\table;

use app\App;

class Table {

    public static function find($id){
        return static::query("
            SELECT *
            FROM " . static::$table . "
            WHERE id = ?
        ", [$id], true);
    }

    public static function query($statement, $attributes = null, $one = false){
        if($attributes){
            return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
        }else{
            return App::getDb()->query($statement, get_called_class(), $one);
        }
    }

    public static function all(){
        return App::getDb()->query("
            SELECT *
            FROM " . static::$table . "
        ", get_called_class());
    }

    /**
     * @param $key
     * @return mixed
     * methode magique qui sert quand on appelle un attibut qui éxiste pas dans la classe mais qui est dans la BDD.
     */
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}