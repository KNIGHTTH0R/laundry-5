@extends('layouts.app')

@section('title')
New Order
@endsection

@section('content')
<a href="{{ url('admin/orders') }}" class="btn btn-default">Go Back</a>
<form action="{{ url('admin/orders') }}" method="POST">
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>User ID</td>
            <td><input type="number" name="user_id" class="input-field" /></td>
        </tr>
        <tr>
            <td>Laundry (kg)</td>
            <td><input type="number" name="laundry" class="input-field" min="0" onchange="changeTotal(laundry, ironing)" /></td>
        </tr>
        <tr>
            <td>Ironing (kg)</td>
            <td><input type="number" name="ironing" class="input-field" min="0" onchange="changeTotal(laundry, ironing)" /></td>
        </tr>

        <tr>
            <td>Total Amount</td>
            <td id="total"></td>
        </tr>
        <tr>
            <td>Pickup Date</td>
            <td><input type="date" name="pickup" class="input-field" /></td>
        </tr>
        <tr>
            <td>Delivery Date</td>
            <td><input type="date" name="delivery" class="input-field" /></td>
        </tr>
        <tr>
            <td>Notes</td>
            <td><textarea name="notes"></textarea></td>
        </tr>
        <tr>
            <td>Laundry Status</td>
            <td class="input-radio">
                <input type="radio" name="laundry_status" value="initial" checked="true" />initial
                <input type="radio" name="laundry_status" value="picked" />picked
                <input type="radio" name="laundry_status" value="pending" />pending
                <input type="radio" name="laundry_status" value="delivering" />delivering
                <input type="radio" name="laundry_status" value="completed" />completed
            </td>
        </tr>
        <tr>
            <td>Payment Status</td>
            <td>
                <input type="radio" name="payment_status" value="unpaid" checked="true" />unpaid
                <input type="radio" name="payment_status" value="paid" />paid
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection