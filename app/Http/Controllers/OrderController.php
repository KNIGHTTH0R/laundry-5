<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller {

    /**
     * View all orders
     * @return type
     */
    public function orders() {
        return view('orders');
    }

    /**
     * Create a new order
     * @param Request $request
     * @return type
     */
    public function createOrder(Request $request) {
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
