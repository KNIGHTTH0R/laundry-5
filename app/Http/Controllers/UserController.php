<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller {

    public function index() {
        $users = DB::select('select * from users');

        return view('user', ['users' => $users]);
    }

    public function get() {
        return view('register');
    }

    public function post() {
        return view('register');
    }

}
