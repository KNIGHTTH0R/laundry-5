<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function pay($id)
    {
        return view('customer/payment');
    }

    public function overview(){
        return view('customer/overview');
    }
}
