<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/order/index', ['orders' => Order::orderBy('id', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/order/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order($request->all());
        $order->total = ($order->laundry + $order->ironing) * 5;

        if ($order->save()) {
            return redirect('admin/orders');
        } else {
            return redirect('error');
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
        return view('admin/order/show', ['order' => Order::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/order/edit', ['order' => Order::find($id)]);
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
        DB::transaction(function() use ($request, $id) {
            $order = Order::find($id);
            $order->fill($request->all());
            $order->total = ($order->laundry + $order->ironing) * 5;
            $order->update();
        });

        return redirect('admin/orders/' . $id);
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
        return redirect('admin/orders');
    }

}
