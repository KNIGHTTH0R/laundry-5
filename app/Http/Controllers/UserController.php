<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller {

    public function index() {
        // this method can connect to mysql database
        $users = DB::select('select * from users');

        // input the $users into user view
        return view('user', ['users' => $users]);
    }

    public function get() {
        return view('register');
    }

    public function post() {
        return view('register');
    }

}
