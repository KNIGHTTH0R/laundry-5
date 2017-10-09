@extends('layouts.app')

@section('title')
Order Details
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show Order Details
                </div>
                <div class="panel-body">

                    <table border="1px">
                        <tr>
                            <td>Order ID</td>
                            <td>{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <td>User ID</td>
                            <td>{{ $order->user_id }}</td>
                        </tr>
                        <tr>
                            <td>Laundry Weight</td>
                            <td>{{ $order->laundry }}kg</td>
                        </tr>
                        <tr>
                            <td>Ironing Weight</td>
                            <td>{{ $order->ironing }}kg</td>
                        </tr>
                        <tr>
                            <td>Total Amount</td>
                            <td>{{ $order->total }}$</td>
                        </tr>
                        <tr>
                            <td>Pickup Date</td>
                            <td>{{ $order->pickup }}</td>
                        </tr>
                        <tr>
                            <td>Delivery Date</td>
                            <td>{{ $order->delivery }}</td>
                        </tr>
                        <tr>
                            <td>Laundry Status</td>
                            <td>{{ $order->laundry_status }}</td>
                        </tr>
                        <tr>
                            <td>Payment Status</td>
                            <td>{{ $order->payment_status }}</td>
                        </tr>
                        <tr>
                            <td>Notes</td>
                            <td>{{ $order->notes }}</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <form action="{{ url('admin/orders/'.$order->id.'/edit') }}" method="GET">
                                    <input type="submit" value="Edit" />
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {!! csrf_field() !!}
                                    <input type="submit" value="delete" />
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection