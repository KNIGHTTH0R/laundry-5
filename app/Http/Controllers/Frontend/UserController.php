<?php

namespace App\Http\Controllers\Frontend;

<<<<<<< HEAD:app/Http/Controllers/UserController.php
use App\User;
use Illuminate\Http\Request;
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
>>>>>>> 5244cd85ad09363e870e4f9038542a2e38d5b17f:app/Http/Controllers/Frontend/UserController.php

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
<<<<<<< HEAD:app/Http/Controllers/UserController.php
        return view('user/index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/create');
=======
        return view('frontend/users', ['users' => $users]);
    }

    public function registerForm(){
        return view('frontend/register');
>>>>>>> 5244cd85ad09363e870e4f9038542a2e38d5b17f:app/Http/Controllers/Frontend/UserController.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->addressline1 = $request->addressline1;
        $user->addressline2 = $request->addressline2;
        $user->suburb = $request->suburb;
        $user->state = $request->state;
        $user->postcode = $request->postcode;
        $user->country = $request->country;

<<<<<<< HEAD:app/Http/Controllers/UserController.php
        if ($user->save()) {
            return $this->index();
        } else {
            return view('error');
=======
        if($user->save()){
            return 'register working';
        }else{
            return view('errors/error');
>>>>>>> 5244cd85ad09363e870e4f9038542a2e38d5b17f:app/Http/Controllers/Frontend/UserController.php
        }
    }



}
