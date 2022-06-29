<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class crudController extends Controller
{
    function userAddData(Request  $req){
        $req->validate([
            'email' => 'email:rfc,dns'
        ]);
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

    function userUpdateData(Request $req, $id){
        $req->validate([
            'email' => 'email:rfc,dns'
        ]);
        $userModel = UserInfo::find($id);
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
        $userModel->update();
        return redirect('/');
    }

    function deleteUserData($id){
        $userModel = UserInfo::find($id);
        $userModel->delete();
        return redirect('/');
    }
}
