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
                    <table border="1px">
                        <tr>
                            <th>Order ID</th>
                            <th>User ID</th>
                            <th>Laundry Weight</th>
                            <th>Ironing Weight</th>
                            <th>Total Amount</th>
                            <th>Dickup Date</th>
                            <th>Delivery Date</th>
                            <th>Laundry Status</th>
                            <th>Payment Status</th>
                            <th>Notes</th>
                        </tr>
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user_id }}</td>
                                <td>{{ $order->laundry }}kg</td>
                                <td>{{ $order->ironing }}kg</td>
                                <td>{{ $order->total }}$</td>
                                <td>{{ $order->pickup }}</td>
                                <td>{{ $order->delivery }}</td>
                                <td>{{ $order->laundry_status }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>{{ $order->notes }}</td>
                                <td><a href="{{ url('admin/orders/'.$order->id) }}"><input type="button" value="Edit"></a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection