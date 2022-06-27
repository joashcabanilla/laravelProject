<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class userController extends Controller
{
    function loadIndex(){
        $collection =  UserInfo::all();
        return view('layouts.index',['collection'=>$collection]);
    }

    function getUserData($action="/"){
        $collection =  UserInfo::all();
        return view('layouts.app',['collection'=>$collection,'action'=>$action]);
    } 

    function userAddData(Request  $req){
        $userModel = new UserInfo();
        $userModel->firstname = $req->input('firstname');
        $userModel->middlename = $req->input('middlename');
        $userModel->lastname = $req->input('lastname');
        $userModel->birthdate = $req->input('birthdate');
        $userModel->age = $req->input('age');
        $userModel->birthplace = $req->input('birthplace');
        $userModel->phone_number = $req->input('phone_number');
        $userModel->address = $req->input('address');
        $userModel->email = $req->input('email');
        $userModel->username = $req->input('username');
        $userModel->password = $req->input('password');
        $userModel->save();
        return redirect('/');
    }
}
