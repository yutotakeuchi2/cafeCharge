<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::getUsers();
        return view("user/index", compact("users"));
    }

    public function searchUser(Request $request){
        if($request->search_name == ""){
            $errorMessage = "存在しません";
            return view("user/search", compact("errorMessage"));
        }
        $userName = $request->input("search_name");
        $foundUsers = User::searchByUsers($userName);
        return view("user/search", compact("foundUsers"));
    }
}
