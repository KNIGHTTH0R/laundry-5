@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Orders
                </div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>User ID</th>
                            <th>Laundry</th>
                            <th>Ironing</th>
                            <th>Price</th>
                            <th>Dickup</th>
                            <th>Delivery</th>
                            <th>Notes</th>
                        </tr>
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user_id }}</td>
                                <td>{{ $order->laundry }}kg</td>
                                <td>{{ $order->ironing }}kg</td>
                                <td>{{ $order->price }}$</td>
                                <td>{{ $order->pickup }}</td>
                                <td>{{ $order->delivery }}</td>
                                <td>{{ $order->notes }}</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection