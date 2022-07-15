<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HtController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\UploadFile;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;




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
Route::view("localizaed",'localization');
Route::view("uploadfile",'upload');
Route::post("fileupload",[UploadFile::class,'upload']);
Route::view("flashform",'storeuser');
Route::post("storeflash",[FlashController::class,'user']);
Route::post("lgws",[loginController::class,'loginwsession']);
Route::put("sbmt",[ApiController::class,'testRequest']);
Route::get("users",[UserController::class,'index']);
Route::get("employee",[EmployeeController::class,'getData']);
Route::get("hcont",[HtController::class,'index']);
Route::group(['middleware'=>['protectedpages']],function(){
    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::view("login", 'login');
    Route::get('/localizaed/{lang}', function ($lang) {
        App::setlocale($lang);
        return view('localization');
    });
});




// Route::view("user", '/users');

// Route::get("user",[customcontroller::class,'show']);


// wscubetech
// Route::get('/{name?}', function ($name = null) {
//     $demo = "<h2>this is demo </h2>";
//     $data = compact('name','demo');
//     return view('wshome')->with($data);
// });


Route::get('/', function () {
    return view('home');
});


Route::get('about123', function () {
    return view('layout.about123');
});

Route::get("/register",[RegistrationController::class,'index']);
Route::post("/register",[RegistrationController::class,'register']);

// resource controller route

Route::resource('crud',CrudController::class);

Route::get('customer', function(){
  $customers = Customer::all();
  echo "<pre>";
  print_r($customers->toArray());
});


Route::get('/customerfrm',[CustomerController::class,'index'])->name('registerform');
Route::get('customer/view',[CustomerController::class,'view']);
Route::get('customer/delete/{id}',[CustomerController::class,'delete'])->name('deletecustomer');
Route::get('customer/edit/{id}',[CustomerController::class,'edit'])->name('customeredit');
Route::post('customer/update/{id}',[CustomerController::class,'update'])->name('customerupdate');
Route::post("/customerfr",[CustomerController::class,'register']);