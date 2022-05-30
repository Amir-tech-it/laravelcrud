<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{


function getdata(Request $req){
     $req->validate([
        'email'=> 'required || max:10',
        'pass'=> 'required || min:5' 
    ]);

    return $req->input();
}



    // function viewload(){
    //     // return view('users',['users'=>['anil','sam','peter']]);
    //     $data=['ali','sohail','asad'];
    //     return view('users',['users'=>$data]);
    // }
}
