<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HtController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\loginController;


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
Route::view("testreq",'testrequest');
Route::view("profile",'profile');
// Route::view("logsession",'loginwsession');


Route::get('/logsession', function () {
    if(session()->has('user')){
        return redirect('profile');
    }
   return view('loginwsession'); 
 });


Route::get('/logout', function () {
   if(session()->has('user')){
    session()->pull('user',null);
   }
  return redirect('logsession'); 
});
Route::post("lgws",[loginController::class,'loginwsession']);
Route::put("sbmt",[ApiController::class,'testRequest']);
Route::get("users",[UserController::class,'index']);
Route::get("employee",[EmployeeController::class,'getData']);
Route::get("hcont",[HtController::class,'index']);
Route::group(['middleware'=>['protectedpages']],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::view("login", 'login');
});


// Route::view("user", '/users');

// Route::get("user",[customcontroller::class,'show']);


