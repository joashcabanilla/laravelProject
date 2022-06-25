<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'home');
// Route::view('home','home');
// Route::view('add', 'addData');

Route::get("user",[userController::class,'loadUserData']);

//Route Model get user data

Route::get("home",[userController::class,'getUserData']);
Route::get("/",[userController::class,'getUserData']);
Route::get("users",[userController::class,'getUser']);