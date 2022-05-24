<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;

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

Route::get('/', function () {
    return redirect('about');
});
Route::view("about", '/about');
Route::view("hello", '/hello');

Route::get("user",[customcontroller::class,'show']);


