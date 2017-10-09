@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Order
                </div>
                <div class="panel-body">
                    <form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
                        <table class="table1">
                            <tr class="tr1">
                                <td class="td1">Order ID</td>
                                <td class="td1">{{ $order->id }}</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">User ID</td>
                                <td class="td1"><input type="number" name="user_id" value="{{ $order->user_id }}" class="textbox1"/></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Laundry (kg)</td>
                                <td class="td1"><input type="number" name="laundry" value="{{ $order->laundry }}" class="textbox1" /></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Ironing (kg)</td>
                                <td class="td1"><input type="number" name="ironing" value="{{ $order->ironing }}" class="textbox1"/></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Price</td>
                                <td class="td1">Calculate using AJAX later</td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Pickup Date</td>
                                <td class="td1"><input type="date" name="pickup" value="{{ $order->pickup }}" class="textbox1"/></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Delivery Date</td>
                                <td class="td1"><input type="date" name="delivery" value="{{ $order->delivery }}" class="textbox1"/></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Notes</td>
                                <td class="td1"><textarea name="notes" class="textbox1">{{ $order->notes }}</textarea></td>
                            </tr>
                            <tr class="tr1">
                                <td></td>
                                <td class="td1"><input type="submit" value="Submit" /></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection