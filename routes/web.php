<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;


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
Route::view("about", '/about');
Route::view("hello", '/hello')->middleware('protectedpage'); //view page
Route::view("noaccess", '/noaccess');

// Route::get("users",[UsersController::class,'viewload']);   array data on userspage
Route::post("users",[UsersController::class,'getdata']);  //form submit data route
Route::view("login", 'login');
Route::get("users",[UserController::class,'index']);
Route::group(['middleware'=>['protectedpages']],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::view("login", 'login');
});


// Route::view("user", '/users');

// Route::get("user",[customcontroller::class,'show']);


