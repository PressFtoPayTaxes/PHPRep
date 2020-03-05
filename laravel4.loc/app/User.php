<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App
 *
 * @property $username
 * @property $password
 * @property $superadmin
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'password', 'superadmin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function username(){
        return "username";
    }

}
