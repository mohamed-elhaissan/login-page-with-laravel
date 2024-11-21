<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LoginAuthController extends Controller
{
    //redirect the user to the login page if he enter the url('/login')
    function login()
    {
        return view('login');
    }
    function register()
    {
        return view('register');
    }
    function LoginAuthCheck() {}
    function registerAuthCheck(Request $request)
    {
        // check all the input
        $request->validate([
            "userFullName" => 'required',
            "userEmail" => 'required|email',
            "userPassword" => 'required'
        ]);

        $userTable = new User();
        $userTable->name = $request->userFullName;
        $userTable->email = $request->userEmail;
        $userTable->password= hash::make($request->userPassword);
        try {
            if($userTable->save()){
                return view('login')->with('isDone','User Created Successfully');
            }
        }catch (QueryException $error){
            if($error->getCode() == 23000){
                return view('register')->with('emailerror','Pleae try Another Email');
            }
            return view('register')->with('err','Pleae try again Later');
            
        };
    }
}