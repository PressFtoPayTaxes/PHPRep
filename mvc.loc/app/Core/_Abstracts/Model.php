<?php

namespace Core\_Abstracts;
use Core\Db;

/**
 * Class Model
 * @package Core\_Abstracts
 *
 * @method static select($join, $columns = null, $where = null)
 * @method static insert($datas)
 * @method static update($data, $where = null)
 * @method static delete($where)
 */

abstract class Model
{
    protected static $table;

    public static function table(){
        return static::$table;
    }

    public static function __callStatic($name, $arguments){
        array_unshift($arguments, static::$table);
        return call_user_func_array([Db::inst(), $name], $arguments);
    }


}