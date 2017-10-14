<?php

namespace App\Http\Controllers\Client;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function pay($id)
    {
        return view('client/payment');
    }

    public function overview()
    {
        return view('client/overview', ['user' => User::find($id)]);
    }
}
