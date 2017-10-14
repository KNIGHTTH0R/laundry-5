<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * display myfrofile and user detiails
     * @param int id 
     * @return \Illuminate\Http\Response
     */ 

    public function show(){
        $id = Auth::id();

        $user = User::find($id);

        return view('customer/profile', ['user' => $user]);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());

        if ($user->update()) {
            return redirect()->to('myprofile');
        } else {
            return redirect()->to('error');
        }
    }
}
