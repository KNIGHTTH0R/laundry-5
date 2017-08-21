<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Register;

class IndexController extends Controller
{
    // display users 
    public function index(){
    	$users = DB::select('select * from users');

    	return view('User', ['users' => $users]);

    	// try to connect to database
    	// $pdo = DB::connection()->getPdo();
    	// dd($pdo);
    }

    public function get(){
    	return view('Register');
    }

    public function post(){
    	return view('Register');
    }
}
