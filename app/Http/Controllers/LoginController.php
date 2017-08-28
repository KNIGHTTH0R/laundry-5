<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // Login function which link the login view
    public function login(){
    	return view('login');
    }

    public function verify(Request $request){

    	// get user input username & password
    	$username_input = $request->username;
    	$password_input = $request->password;

    	// get password from database which username = email
    	// this method return a string 
    	$password_db = DB::table('users')->where('email',$username_input)->value('password');

    	// compare two passwords 
    	if($password_input == $password_db){
    		return "login success.";
    	}else{
    		return "login false";
    	}
    }
}
