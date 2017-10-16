<?php

namespace App\Http\Controllers\Client;

use App\User;
use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class PaymentController extends Controller
{
    //
    public function pay($id)
    {
        return view('client/payment', ['user' => Auth::user()], ['order' => Order::find($id)]);
    }

    public function overview(Request $request, $id)
    {
        $this->validate($request,[
            'firstname' => 'bail|required|alpha|max:255',
            'lastname' => 'bail|required|alpha|max:255',
            'email' => 'bail|required|email|max:255',
            'phone' => 'bail|required|integer|digits_between:10,10',
            'addressline1' => 'bail|required|string|max:255',
            'suburb' => 'bail|required|alpha_num|max:255',
            'state' => 'bail|required|alpha_num|max:255',
            'postcode' => 'bail|required|integer|digits_between:4,4',
            'card_number' => 'bail|required|integer|digits_between:16,16',
            'expiration_date' => 'bail|required|after_or_equal:tomorrow',
            'cw' => 'bail|required|integer|digits_between:3,3',
        ]);

        return view('client/overview', ['bill' => $request], ['order' => Order::find($id)] );
    }
}
