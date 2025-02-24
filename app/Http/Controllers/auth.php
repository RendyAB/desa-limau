<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auth extends Controller
{
    //

    function formLogin(){
        $title='Login';
        return view('auth.login',compact('title'));
    }
}
