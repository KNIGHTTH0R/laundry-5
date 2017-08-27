<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function registerForm(){
        return view('register');
    }

    /**
     * Create a new user
     * @param Request $request
     * @return type
     */
    public function register(Request $request) {
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->remember_token = $request->remember_token;
        $user->phone= $request->phone;
        $user->addressline1 = $request->addressline1;
        $user->addressline2 = $request->addressline2;
        $user->suburb = $request->suburb;
        $user->state = $request->state;
        $user->postcode = $request->postcode;
        $user->country = $request->country;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;

        if($user->save()){
            return 'register working';
        }else{
            return view('error');
        }
    }

}
