<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    //
    public function index()
    {
        return view('customer/book');
    }

    public function store(Request $request)
    {
        $order = new Order($request->all());
        $order->price = ($order->laundry + $order->ironing) * 5;

        if ($order->save()) {
            return redirect()->to('orders');
        } else {
            return redirect()->to('error');
        }
    }

    /**
     * Display all orders of the user
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::id();
        $orders = DB::select('select * from orders where user_id = ?', [$user_id]);

        return view('customer/orders', ['orders' => $orders]);
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
        $order = Order::find($id);
        $order->fill($request->all());

        if ($order->update()) {
            return redirect()->to('orders');
        } else {
            return redirect()->to('error');
        }
    }

}
