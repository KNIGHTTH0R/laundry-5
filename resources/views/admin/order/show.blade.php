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
                        <table class="table1">
                            <tr class="tr1">
                                <td class="td1">Order ID</td>
                                <td class="td1">{{ $order->id }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">User ID</td>
                                <td class="td1">{{ $order->user_id }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Laundry (kg)</td>
                                <td class="td1">{{ $order->laundry }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Ironing (kg)</td>
                                <td class="td1">{{ $order->ironing }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Price</td>
                                <td class="td1">{{ $order->price }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Pickup Date</td>
                                <td class="td1">{{ $order->pickup }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Delivery Date</td>
                                <td class="td1">{{ $order->delivery }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Notes</td>
                                <td class="td1">{{ $order->notes }}</td>
                            </tr>
                        </table>

                        <input type="submit" value="Edit" />

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