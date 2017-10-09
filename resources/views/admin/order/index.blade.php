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
                    <table class="table1">
                        <tr class="tr1">
                            <th class="td1">Order ID</th>
                            <th class="td1">User ID</th>
                            <th class="td1">Laundry</th>
                            <th class="td1">Ironing</th>
                            <th class="td1">Price</th>
                            <th class="td1">Dickup</th>
                            <th class="td1">Delivery</th>
                            <th class="td1">Notes</th>
                        </tr>
                        <?php foreach ($orders as $order) { ?>
                            <tr class="tr1">
                                <td class="td1">{{ $order->id }}</td>
                                <td class="td1">{{ $order->user_id }}</td>
                                <td class="td1">{{ $order->laundry }}kg</td>
                                <td class="td1">{{ $order->ironing }}kg</td>
                                <td class="td1">{{ $order->price }}$</td>
                                <td class="td1">{{ $order->pickup }}</td>
                                <td class="td1">{{ $order->delivery }}</td>
                                <td class="td1">{{ $order->notes }}</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection