<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/user/index', ['users' => User::OrderBy('id', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
        ]);

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        
        return redirect()->to('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin/user/show', ['user' => User::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/user/edit', ['user' => User::find($id)]);
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
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
        ]);

        DB::transaction(function() use ($request, $id) {
            $user = User::find($id);
            $user->fill($request->all());
            $user->update();
        });

        return redirect()->to('admin/users/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::transaction(function() use ($id) {
            User::find($id)->delete();
        });
        
        return redirect()->to('admin/users');
    }

    /**
     * Return table of search results.
     * 
     * @param type $request
     */
    public function search(Request $request)
    {
        $users = collect();
        
        if (!isset($request->user_id) && !isset($request->email)) {
            $users = User::OrderBy('id', 'desc')->get();
        } else if (isset($request->user_id)) {
            $user = User::find($request->user_id);
            if (!empty($user)) {
                $users->push($user);
            }
        } else {
            $users = User::where('email', 'like', '%' . $request->email . '%')->OrderBy('id', 'desc')->get();
        }
        
        return view('admin/user/searchResults', ['users' => $users]);
    }

}
