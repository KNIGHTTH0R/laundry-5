@extends('layouts.app')

@section('title')
Overview
@endsection

@section('content')
<form action="{{ url('/')}}" method="get">
    <table>
        <tr>
            <td>Customer Name</td>
            <td><input type="text" name="lastname" value=""></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="addressline1" value=""></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="number" name="phone" value=""></td>
        </tr>
        <tr>
            <td>Card Number</td>
            <td><input type="number" name="card_number"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Go Back"></td>
            <td></td>
        </tr>
    </table>
</form>
@endsection 