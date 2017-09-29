<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    * Display the resetPassword page 
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        return view('resetPassword');
    }
}
