<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * display my profile and user details
     * @param int id 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('client/profile', ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::transaction(function() use ($request) {
            Auth::user()->fill($request->all())->update();
        });
    }

}
