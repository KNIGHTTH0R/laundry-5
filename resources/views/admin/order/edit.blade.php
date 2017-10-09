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
                            <tr>
                                <td>Order ID</td>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <td>User ID</td>
                                <td><input type="number" name="user_id" value="{{ $order->user_id }}" /></td>
                            </tr>
                            <tr>
                                <td>Laundry (kg)</td>
                                <td><input type="number" name="laundry" value="{{ $order->laundry }}" onchange="changeTotal(laundry, ironing)" /></td>
                            </tr>
                            <tr>
                                <td>Ironing (kg)</td>
                                <td><input type="number" name="ironing" value="{{ $order->ironing }}" onchange="changeTotal(laundry, ironing)" /></td>
                            </tr>
                            <tr>
                                <td>Total Amount</td>
                                <td id="total">{{ ($order->laundry + $order->ironing)*5 }}$</td>
                            </tr>
                            <tr>
                                <td>Pickup Date</td>
                                <td><input type="date" name="pickup" value="{{ $order->pickup }}" /></td>
                            </tr>
                            <tr>
                                <td>Delivery Date</td>
                                <td><input type="date" name="delivery" value="{{ $order->delivery }}" /></td>
                            </tr>
                            <tr>
                                <td>Notes</td>
                                <td><textarea name="notes">{{ $order->notes }}</textarea></td>
                            </tr>
                        </table>
                        <input type="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection