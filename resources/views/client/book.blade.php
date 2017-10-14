@extends('layouts.app')

@section('title')
Book an Order
@endsection

@section('content')
<form action="{{ url('user_orders') }}" method="POST">
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>User ID</td>
            <td>{{ Auth::user()->id }}</td>
        </tr>
        <tr>
            <td>Laundry (kg)</td>
            <td><input type="number" name="laundry" min="0" onchange="changeTotal(laundry, ironing)" /></td>
        </tr>
        <tr>
            <td>Ironing (kg)</td>
            <td><input type="number" name="ironing" min="0" onchange="changeTotal(laundry, ironing)" /></td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td id="total"></td>
        </tr>
        <tr>
            <td>Pickup Date</td>
            <td><input type="date" name="pickup" /></td>
        </tr>
        <tr>
            <td>Delivery Date</td>
            <td><input type="date" name="delivery" /></td>
        </tr>
        <tr>
            <td>Notes</td>
            <td><textarea name="notes"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="Submit" />
</form>
@endsection