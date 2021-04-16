<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public static function getUsers(){
        return User::all();
    }

    public static function searchUser($userName){
        return User::query()->where("name", $userName)->get();
    }
}
