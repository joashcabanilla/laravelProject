<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;

class userController extends Controller
{
     function loadUserData(){
        return view('UserData');
    }

    function getUser(){
        return UserModel::all();
    }

    function getUserData(){
        $collection =  UserModel::all();
        return view('home',['collection'=>$collection]);
    } 
}
