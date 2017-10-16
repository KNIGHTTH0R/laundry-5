<?php

namespace App\Http\Controllers\Client;

use App\User;
use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $this->validate($request, [
            'firstname' => 'required|alpha|max:255',
            'lastname' => 'required|alpha|max:255',
            'phone' => 'required|numeric|digits:10',
            'addressline1' => 'required|string|max:255',
            'addressline2' => 'nullable|string|max:255',
            'suburb' => 'required|alpha_num|max:255',
            'state' => 'required|alpha_num|max:255',
            'postcode' => 'required|numeric|digits:4',
            'card_type' => 'required|alpha',
            'card_number' => 'required|numeric|digits:16',
            'expiration_date' => 'required|after_or_equal:today',
            'cw' => 'required|numeric|digits_between:3,3',
        ]);

        DB::transaction(function() use ($request, $id) {
            Auth::user()->fill($request->all())->update();
            $order = Order::find($id);
            $order->payment_status = "paid";
            $order->update();
        });

        return view('client/overview', ['bill' => $request], ['order' => Order::find($id)]);
    }

}
