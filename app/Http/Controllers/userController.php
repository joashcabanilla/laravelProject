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

    function getUserData($action){
        $collection =  UserInfo::all();
        return view('layouts.app',['collection'=>$collection,'action'=>$action]);
    } 

    function editUserData($id){
        $collection = UserInfo::find($id);
        return view('layouts.edit',['collection'=>$collection,'id'=>$id]);
    } 
}
