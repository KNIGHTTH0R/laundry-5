<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller {

    /**
     * View all users
     * @return type
     */
    public function users() {
        $users = User::all();

        return view('users', ['users' => $users]);
    }
    
    /**
     * View register form
     * @return type
     */
    public function register() {
        return view('register');
    }

}
