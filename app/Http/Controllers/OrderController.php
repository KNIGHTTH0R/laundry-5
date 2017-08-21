<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller {

    public function get() {
        return view('orders');
    }

    public function post(Request $request) {
        // create a new order
        $order = new Order;
        $order->user_id = $request->user_id;
        $order->laundry = $request->laundry;
        $order->ironing = $request->ironing;
        $order->price = ($request->laundry + $request->ironing) * 5;
        $order->pickup = $request->pickup;
        $order->delivery = $request->delivery;
        $order->notes = $request->notes;

        if ($order->save()) {
            return view('orders');
        } else {
            return view('error');
        }
    }

}
