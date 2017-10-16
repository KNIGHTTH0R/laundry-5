<?php

namespace App\Http\Controllers\Client;

use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display all unpaid orders of current user
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $orders = DB::select("select * from orders where user_id = ? and payment_status='unpaid'", [$user_id]);
        
        return view('client/orders', ['orders' => $orders]);
    }

    /**
     * Display all paid orders of current user
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $user_id = Auth::id();
        $orders = DB::select("select * from orders where user_id = ? and payment_status = 'paid'", [$user_id]);

        return view('client/history', ['orders' => $orders]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client/book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
        [
            'laundry' => 'bail|required|numeric|min:0|max:100',
            'ironing' => 'bail|required|numeric|min:0|max:100',
            'pickup' => 'bail|required|date|after:tomorrow',
            'delivery' => 'bail|required|date|after:pickup',
            'notes' => 'bail|required|alpha_dash',
        ]);

        $order = new Order($request->all());

        $order->user_id = Auth::id();

        $order->laundry_status = "initial";

        $order->payment_status = "unpaid";

        $order->total = ($order->laundry + $order->ironing) * 5;

        if ($order->save()) {
            return redirect()->to('user_orders');
        } else {
            return redirect()->to('error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('client/book', ['order' => Order::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('client/edit', ['order' => Order::find($id)]);
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
        $this->validate($request, 
        [
            'laundry' => 'bail|required|numeric|min:0|max:100',
            'ironing' => 'bail|required|numeric|min:0|max:100',
            'pickup' => 'bail|required|date|after:tomorrow',
            'delivery' => 'bail|required|date|after:pickup',
            'notes' => 'bail|required|alpha_dash',
        ]);

        $order = Order::find($id);
        $order->fill($request->all());

        if ($order->update()) {
            return redirect()->to('user_orders');
        } else {
            return redirect()->to('error');
        }
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
            Order::find($id)->delete();
        });
        return redirect('user_orders');
    } 
}
