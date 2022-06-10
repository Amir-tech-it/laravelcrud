<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //

    function loginwsession(Request $req){
      $data = $req->input('user','pass');
      $req->session()->put('user',$data);
      return redirect('profile');
    }
}
