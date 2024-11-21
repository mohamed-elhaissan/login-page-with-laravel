<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAuthController extends Controller
{
    //redirect the user to the login page if he enter the url('/login')
    function login()
    {
        return view('login');
    }
    function LoginAuthCheck(){
        
    }
}
