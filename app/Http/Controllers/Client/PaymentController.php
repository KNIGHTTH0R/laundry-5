<?php

namespace App\Http\Controllers\Client;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    public function pay()
    {
        return view('client/payment', ['user' => Auth::user()]);
    }

    public function overview(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'bail|required|alpha|max:255',
            'lastname' => 'bail|required|alpha|max:255',
            'email' => 'bail|required|email|max:255',
            'phone' => 'bail|required|integer|size:10',
            'addressline1' => 'bail|required|alpha_dash|max:255',
            'suburb' => 'bail|required|alpha|max:255',
            'state' => 'bail|required|alpha|max:255',
            'postcode' => 'bail|required|size:4|integer',
            'card_number' => 'bail|required|integer|size:16',
            'expiration_date' => 'bail|required|date_format:mm-yy|after_or_equal:tomorrow',
            'cw' => 'bail|required|integer|size:3',
        ]);

        return view('client/overview');
    }
}
