<?php

namespace Models;


use Core\_Abstracts\Model;
use Core\Password;

class Users extends Model
{
    protected static $table = 'users';

    public static function make(string $username, string $password): bool{
        $where = ['username' => $username];
        if (self::has($where))
            throw new \Exception('Username already exist');

        self::insert([
            'username' => $username,
            'password_hash' => Password::hash($password)
        ]);
        return self::has($where);
    }
}