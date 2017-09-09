<?php

namespace App\Http\Controllers\Frontend;

<<<<<<< HEAD:app/Http/Controllers/OrderController.php
use App\Order;
use Illuminate\Http\Request;
=======
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
>>>>>>> 5244cd85ad09363e870e4f9038542a2e38d5b17f:app/Http/Controllers/Frontend/OrderController.php

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order/index', ['orders' => Order::orderBy('id', 'desc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD:app/Http/Controllers/OrderController.php
    public function create()
    {
        return view('order/create');
=======
    public function orders() {
        return view('frontend/orders');
>>>>>>> 5244cd85ad09363e870e4f9038542a2e38d5b17f:app/Http/Controllers/Frontend/OrderController.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->user_id = $request->user_id;
        $order->laundry = $request->laundry;
        $order->ironing = $request->ironing;
        $order->price = ($request->laundry + $request->ironing) * 5;
        $order->pickup = $request->pickup;
        $order->delivery = $request->delivery;
        $order->notes = $request->notes;

        if ($order->save()) {
<<<<<<< HEAD:app/Http/Controllers/OrderController.php
            return view('order/index');
=======
            return view('frontend/orders');
>>>>>>> 5244cd85ad09363e870e4f9038542a2e38d5b17f:app/Http/Controllers/Frontend/OrderController.php
        } else {
            return view('error');
        }
    }
}
