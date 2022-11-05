<?php

namespace App\Core;

class BaseModel
{
    public static $table;
    public function save(){

    }
    public static function findById($id){
        $connection = DB::getConnection();
        $tableName = static::getTabelName();
        $sql = "select * from $tableName where id = $id";
        $stmt = $connection->query($sql);
        return $stmt->fetchObject(static::class);

    }

    public static function getTabelName(){
        if (static::$table !== null){
            return static::$table;
        }
        $className = static::class;
        $className = explode('\\', $className);
        $className = array_pop($className);
        $className .= 's';

        return strtolower($className);
    }
}