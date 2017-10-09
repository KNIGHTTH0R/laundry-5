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
                    <form action="{{ url('admin/orders/'.$order->id.'/edit') }}" method="GET">
                        <table>
                            <tr>
                                <td>Order ID</td>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <td>User ID</td>
                                <td>{{ $order->user_id }}</td>
                            </tr>
                            <tr>
                                <td>Laundry (kg)</td>
                                <td>{{ $order->laundry }}</td>
                            </tr>
                            <tr>
                                <td>Ironing (kg)</td>
                                <td>{{ $order->ironing }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>{{ $order->price }}</td>
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
                                <td>Notes</td>
                                <td>{{ $order->notes }}</td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Edit" /></td>
                            </tr>
                        </table>
                    </form>
                    <form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {!! csrf_field() !!}
                        <input type="submit" value="delete" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection