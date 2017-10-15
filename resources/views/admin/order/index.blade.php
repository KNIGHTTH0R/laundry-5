@extends('layouts.app')

@section('title')
All Orders
@endsection

@section('content')
<a href="{{ url('admin') }}" class="btn btn-default">Go to Console</a>
<span>Order ID</span>
<input type="text" name="order_id" id="order_id" />
<span>User ID</span>
<input type="text" name="user_id" id="user_id" />
<input type="button" value="search" class="btn btn-default" onclick="searchOrders()" />
<div id="search-results">
    <table class="table1 table2">
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Laundry Weight</th>
            <th>Ironing Weight</th>
            <th>Total Amount</th>
            <th>Laundry Status</th>
            <th>Payment Status</th>
            <th></th>
        </tr>
        <?php foreach ($orders as $order) { ?>
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->laundry }}kg</td>
                <td>{{ $order->ironing }}kg</td>
                <td>{{ $order->total }}$</td>
                <td>{{ $order->laundry_status }}</td>
                <td>{{ $order->payment_status }}</td>
                <td><a href="{{ url('admin/orders/'.$order->id) }}" class="btn btn-default">Details</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
<a href="{{ url('admin/orders/create') }}" class="btn btn-default">New Order</a>
@endsection