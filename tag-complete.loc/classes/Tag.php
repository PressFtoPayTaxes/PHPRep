<?php

/**
 * Class Tag
 * @method static Tag a(array $attributes = [])
 * @method static Tag html(array $attributes = [])
 * @method static Tag head(array $attributes = [])
 * @method static Tag body(array $attributes = [])
 * @method static Tag link(array $attributes = [])
 * @method static Tag meta(array $attributes = [])
 * @method static Tag div(array $attributes = [])
 * @method static Tag form(array $attributes = [])
 * @method static Tag table(array $attributes = [])
 * @method static Tag input(array $attributes = [])
 * @method static Tag button(array $attributes = [])
 * @method static Tag ul(array $attributes = [])
 * @method static Tag li(array $attributes = [])
 * @method static Tag tr(array $attributes = [])
 * @method static Tag td(array $attributes = [])
 * @method static Tag title(array $attributes = [])
 */
class Tag extends BaseTag
{
    public static function make($name, $attributes = []){
        return new Tag($name, $attributes);
    }

    public static function __callStatic($name, $arguments){
        array_unshift($arguments, $name);
        return call_user_func_array([self::class, "make"], $arguments);
    }

}