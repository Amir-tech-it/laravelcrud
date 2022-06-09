<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HtController extends Controller
{
    //
    function index(){

        $data = Http::get("https://reqres.in/api/users?page=1");
        return view('httreq',['collection'=>$data['data']]);

        // echo "Api call will be here";
    }
}
