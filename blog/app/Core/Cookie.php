<?php

namespace Core;


final class Cookie
{
    public static function set($name, $value = "", $expire = 0, $secure = false, $httponly = null){
        setcookie(md5($name), $value, $expire ,'/','', $secure, $httponly);
    }

    public static function get($key){
        return $_COOKIE[md5($key)] ?? null;
    }
}