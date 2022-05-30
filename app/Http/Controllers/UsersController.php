<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function viewload(){
        // return view('users',['users'=>['anil','sam','peter']]);
        $data=['ali','sohail','asad'];
        return view('users',['users'=>$data]);
    }
}
