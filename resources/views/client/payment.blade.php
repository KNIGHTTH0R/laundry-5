@extends('layouts.app')

@section('title')
All Orders
@endsection

@section('content')
<table class="table1"> 
    <tr>
        <td>Card Type</td>
        <td>
            <select name="card_type">
                <option value="visa">VISA</option>
                <option value="mastercard">MasterCard</option>
                <option value="unionpay">Unionpay</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Card Number</td>
        <td><input type="number" name="card_number"></td>
    </tr>
    <tr>
        <td>Expiration Date</td>
        <td><input type="month" name="expiration_date"></td>
    </tr>
    <tr>
        <td>CW</td>
        <td><input type="number" name="cw"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Pay Security"></td>
        <td></td>
    </tr>
    <tr>
        <td><button name="cancel">Cancel</button></td>
        <td></td>
    </tr>
</table>
<table>
    <tr>
        <td>
            <form action="{{ url('overview') }}" metho="POST">
                {!! csrf_field() !!}
                <input type="submit" value="Security Pay" class="btn btn-default">
            </form>
        </td>
        <td>
            <form action="{{ url('/') }}" method="GET">
                <input type="submit" value="Cancel" class="btn btn-default">
            </form>
        </td>
    </tr>
</table>
@endsection