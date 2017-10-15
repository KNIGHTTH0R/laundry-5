<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validate;

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
        $this->validate($request,[
            'firstname' => 'required|alpha|max:255',
            'lastname' => 'required|alpha|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required|size:10|integer',
            'addressline1' => 'required|alpha_dash|max:255',
            'suburb' => 'required|alpha|max:255',
            'state' => 'required|alpha|max:255',
            'postcode' => 'required|size:4|integer',
        ]);   

        if($validate0->fails())
        {
            return redirect('')->withErrors($validate)->withInput();
        }
        DB::transaction(function() use ($request) {
            Auth::user()->fill($request->all())->update();
        });
    }

}
