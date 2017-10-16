@extends('layouts.app')

@section('title')
All Orders
@endsection

@section('content')
<form action="{{ url('overview/'.$order->id) }}" method="POST">
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname" class="input-field" value="{{ $errors->has('firstname')||old('firstname')?old('firstname'):$user->firstname }}">
                <span class="alert">{{ $errors->first('firstname') }}</span>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname" class="input-field" value="{{ $errors->has('lastname')||old('lastname')?old('lastname'):$user->lastname }}">
                <span class="alert">{{ $errors->first('lastname') }}</span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="number" name="phone" class="input-field" value="{{ $errors->has('phone')||old('phone')?old('phone'):$user->phone }}">
                <span class="alert">{{ $errors->first('phone') }}</span>
            </td>
        </tr>
        <tr>
            <td>AddressLine One</td>
            <td><input type="text" name="addressline1" class="input-field" value="{{ $errors->has('addressline1')||old('addressline1')?old('addressline1'):$user->addressline1 }}">
                <span class="alert">{{ $errors->first('addressline1') }}</span>
            </td>
        </tr>
        <tr>
            <td>AddressLine Two</td>
            <td>
                <input type="text" name="addressline2" class="input-field" value="{{ $errors->has('addressline2')||old('addressline2')?old('addressline2'):$user->addressline2 }}">
                <span class="alert">{{ $errors->first('addressline2') }}</span>
            </td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td><input type="text" name="suburb" class="input-field" value="{{ $errors->has('suburb')||old('suburb')?old('suburb'):$user->suburb }}">
                <span class="alert">{{ $errors->first('suburb') }}</span>
            </td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" class="input-field" value="{{ $errors->has('state')||old('state')?old('state'):$user->state }}">
                <span class="alert">{{ $errors->first('state') }}</span>
            </td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="number" name="postcode" class="input-field" value="{{ $errors->has('postcode')||old('postcode')?old('postcode'):$user->postcode }}">
                <span class="alert">{{ $errors->first('postcode') }}</span>
            </td>
        </tr>
        <tr>
            <td>Order ID</td>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td> ${{ $order->total }}</td>
        </tr>
        <tr>
            <td>Card Type</td>
            <td>
                <select name="card_type" class="input-field">
                    <option value="">---</option>
                    <option value="visa">VISA</option>
                    <option value="mastercard">MasterCard</option>
                    <option value="unionpay">Unionpay</option>
                </select>
                <span class="alert">{{ $errors->first('card_type') }}</span>
            </td>
        </tr>
        <tr>
            <td>Card Number</td>
            <td><input type="number" name="card_number" class="input-field" value="{{ old('card_number') }}">
                <span class="alert">{{ $errors->first('card_number') }}</span>
            </td>
        </tr>
        <tr>
            <td>Expiration Date</td>
            <td><input type="month" name="expiration_date" class="input-field" value="{{ old('expiration_date') }}">
                <span class="alert">{{ $errors->first('expiration_date') }}</span>
            </td>
        </tr>
        <tr>
            <td>CW</td>
            <td><input type="number" name="cw" class="input-field" value="{{ old('cw') }}">
                <span class="alert">{{ $errors->first('cw') }}</span>
            </td>
        </tr>
    </table>
    <input type="submit" value="Security Pay" class="btn btn-default">
</form>

<form action="{{ url('/') }}" method="GET">
    <input type="submit" value="Cancel" class="btn btn-default">
</form>
@endsection