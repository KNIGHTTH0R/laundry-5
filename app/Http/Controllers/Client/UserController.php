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
        return view('client/user/show', ['user' => Auth::user()]);
    }

    /**
     * Show the form to edit user profile
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('client/user/edit', ['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'nullable|numeric|digits:10',
            'addressline1' => 'nullable|string|max:255',
            'addressline2' => 'nullable|string|max:255',
            'suburb' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'postcode' => 'nullable|numeric|digits:4',
        ]);

        DB::transaction(function() use ($request) {
            Auth::user()->fill($request->all())->update();
        });
        
        return redirect('profile');
    }

}
