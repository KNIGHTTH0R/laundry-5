@extends('layouts.app')

@section('title')
Overview
@endsection

@section('content')
<form action="{{ url('/')}}" method="get">
    <h3>Bill Review</h3>
    <table class="table1">
        <tr>
            <td>Customer ID</td>
            <td>{{ $order->user_id }}</td>
        </tr>
        <tr>
            <td>Customer Name</td>
            <td>{{ $bill->firstname }} {{ $bill->lastname }}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{ $bill->addressline1 }} {{ $bill->addressline2 }}, {{ $bill->suburb }}, {{ $bill->state }}, {{ $bill->postcode }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $bill->email }}</td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>{{ $bill->phone }}</td>
        </tr>
        <tr>
            <td>Card Type</td>
            <td>{{ $bill->card_type }}</td>
        </tr>
        <tr>
            <td>Card Number</td>
            <td>{{ $bill->card_number}}</td>
        </tr>
    </table>
    <h3>Order Details</h3>
    <table class="table1">
        <tr>
            <td>Order ID</td>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <td></td>
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
            <td>{{ $order->total }}</td>
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
            <td>Customer Comments</td>
            <td>{{ $order->nodes }}</td>
        </tr>
    </table>
    <input type="submit" value="Back Home">
</form>
@endsection 