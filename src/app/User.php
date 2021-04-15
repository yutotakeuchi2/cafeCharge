<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public static function getUsers(){
        return User::all();
    }
}
