<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    //
    public function index(){
        return view('customer/book');
    }

    public function store(Request $request){
        $order = new Order($request->all());
        $order->price = ($order->laundry + $order->ironing) * 5;

        if ($order->save()) {
            return redirect()->to('myOrders');
        } else {
            return redirect()->to('error');
        }
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
            return redirect()->to('myOrders');
        } else {
            return redirect()->to('error');
        }
    }

}
