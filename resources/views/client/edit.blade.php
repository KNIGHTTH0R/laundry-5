@extends('layouts.app')

@section('title')
Edit Order
@endsection

@section('content')
<form action="{{ url('user_orders/'.$order->id) }}" method="POST">
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
            <td><input type="number" name="laundry" min="0" value="{{ $order->laundry }}" onchange="changeTotal(laundry, ironing)" /></td>
        </tr>
        <tr>
            <td>Ironing (kg)</td>
            <td><input type="number" name="ironing" min="0" value="{{ $order->ironing }}" onchange="changeTotal(laundry, ironing)" /></td>
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
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection