@extends('layouts.app')

@section('title') Home @endsection

@section('content')
<h2 style="text-align: center">New order</h2>
<form action="orders" method="post">
    {!! csrf_field() !!}
    <table>
        <tr>
            <td>User ID</td>
            <td><input type="number" name="user_id" /></td>
        </tr>
        <tr>
            <td>Laundry (kg)</td>
            <td><input type="number" name="laundry" /></td>
        </tr>
        <tr>
            <td>Ironing (kg)</td>
            <td><input type="number" name="ironing" /></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>(Laundry + Ironing) * 5$/kg</td>
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
        <tr>
            <td></td>
            <td><input type="submit" value="submit" /></td>
        </tr>
    </table>
</form>

@endsection