<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
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
        $this->validate($request, [
            'user_id' => 'required|string',
            'laundry' => 'required|numeric|min:0|max:100',
            'ironing' => 'required|numeric|min:0|max:100',
            'pickup' => 'required|date|after:tomorrow',
            'delivery' => 'required|date|after:pickup',
            'notes' => 'nullable|string|max:255',
            'laundry_status' => 'required|string',
            'payment_status' => 'required|string'
        ]);

        $order = new Order($request->all());
        $order->total = ($order->laundry + $order->ironing) * 5;
        $order->save();

        return redirect('admin/orders');
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
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'laundry' => 'required|numeric|min:0|max:100',
            'ironing' => 'required|numeric|min:0|max:100',
            'pickup' => 'required|date|after:tomorrow',
            'delivery' => 'required|date|after:pickup',
            'notes' => 'nullable|string|max:255',
            'laundry_status' => 'required|string',
            'payment_status' => 'required|string'
        ]);

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

    /**
     * Return table of search results.
     * 
     * @param type $request
     */
    public function search(Request $request)
    {
        $orders = collect();

        if (!isset($request->order_id) && !isset($request->user_id)) {
            $orders = Order::OrderBy('id', 'desc')->get();
        } else if (isset($request->order_id)) {
            $order = Order::find($request->order_id);
            if (!empty($order)) {
                $orders->push($order);
            }
        } else {
            $orders = Order::where('user_id', '=', $request->user_id)->OrderBy('id', 'desc')->get();
        }

        return view('admin/order/searchResults', ['orders' => $orders]);
    }

}
