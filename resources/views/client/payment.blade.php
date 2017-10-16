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
        <td><input type="text" name="firstname" value="{{ old('firstname') }}" placeholder="{{ $user->firstname }}"  required autofocus>
        @if ($errors->has('firstname'))
            <span class="help-block">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="{{ $user->lastname }}" required autofocus>
        @if ($errors->has('lastname'))
            <span class="help-block">
                <strong>{{ $errors->first('lastname') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="{{ old('email') }}" placeholder="{{ $user->email }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input type="phone" name="phone" value="{{ old('phone') }}" placeholder="{{ $user->phone }}" required autofocus>
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>AddressLine One</td>
        <td><input type="text" name="addressline1" value="{{ old('addressline1') }}" placeholder="{{ $user->addresline1 }}" required autofocus>
        @if ($errors->has('addressline1'))
            <span class="help-block">
                <strong>{{ $errors->first('addressline1') }}</strong>
            </span>
        @endif
    </td>
    </tr>
    <tr>
        <td>AddressLine Two</td>
        <td><input type="text" name="addressline2" value="{{ old('addressline2') }}" placeholder="{{ $user->addressline2 }}" autofocus>
    </td>
    </tr>
    <tr>
        <td>Suburb</td>
        <td><input type="text" name="suburb" value="{{ old('suburb') }}" placeholder="{{ $user->suburb }}" required autofocus>
        @if ($errors->has('suburb'))
            <span class="help-block">
                <strong>{{ $errors->first('suburb') }}</strong>
            </span>
        @endif
    </td>
    </tr>
    <tr>
        <td>State</td>
        <td><input type="text" name="state" value="{{ old('state') }}" placeholder="{{ $user->state }}" required autofocus>
        @if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Postcode</td>
        <td><input type="number" name="postcode" value="{{ old('postcode') }}" placeholder="{{ $user->postcode }}" required autofocus>
        @if ($errors->has('postcode'))
            <span class="help-block">
                <strong>{{ $errors->first('postcode') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Order ID</td>
        <td>{{ $order->id }}</td>
    </tr>
    <tr>
        <td>Price</td>
        <td> ${{ $order->total }}</td>
    </tr>
    <tr>
        <td>Card Type</td>
        <td>
            <select name="card_type" required autofocus>
                <option value="visa">VISA</option>
                <option value="mastercard">MasterCard</option>
                <option value="unionpay">Unionpay</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Card Number</td>
        <td><input type="number" name="card_number" value="{{ old('card_number') }}" placeholder="0000 0000 0000 0000" required autofocus>
        @if ($errors->has('card_number'))
            <span class="help-block">
                <strong>{{ $errors->first('card_number') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Expiration Date</td>
        <td><input type="month" name="expiration_date" value="{{ old('expiration_date') }}" placeholder="01 2018" required autofocus>
        @if ($errors->has('expiration_date'))
            <span class="help-block">
                <strong>{{ $errors->first('expiration_date') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>CW</td>
        <td><input type="number" name="cw" value="{{ old('cw') }}" placeholder="123" required autofocus>
        @if ($errors->has('cw'))
            <span class="help-block">
                <strong>{{ $errors->first('cw') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>
            <input type="submit" value="Security Pay" class="btn btn-default">
        </td>
    </tr>
</table>
</form>

<form action="{{ url('/') }}" method="GET">
    <input type="submit" value="Cancel" class="btn btn-default">
</form>
@endsection