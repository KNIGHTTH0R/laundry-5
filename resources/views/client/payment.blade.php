@extends('layouts.app')

@section('title')
All Orders
@endsection

@section('content')
<table class="table1">
    <tr>
        <td>First Name</td>
        <td><input type="text" name="firstname" value="{{ old('$user->firstname') }}" required autofocus>
        @if ($errors->has('firstname'))
            <span class="help-block">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lastname" value="{{ old('$user->lastname') }}" required autofocus>
        @if ($errors->has('lastname'))
            <span class="help-block">
                <strong>{{ $errors->first('lastname') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="{{ old('$user->email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>AddressLine One</td>
        <td><input type="text" name="addressline1" value="{{ old('$user->addresline1') }}" required autofocus>
        @if ($errors->has('addressline1'))
            <span class="help-block">
                <strong>{{ $errors->first('addressline1') }}</strong>
            </span>
        @endif
    </td>
    </tr>
    <tr>
        <td>AddressLine Two</td>
        <td><input type="text" name="addressline2" value="{{ old('$user->addressline2') }}" required autofocus>
        @if ($errors->has('addressline2'))
            <span class="help-block">
                <strong>{{ $errors->first('addressline2') }}</strong>
            </span>
        @endif
    </td>
    </tr>
    <tr>
        <td>Suburb</td>
        <td><input type="text" name="suburb" value="{{ old('$user->suburb') }}" required autofocus>
        @if ($errors->has('suburb'))
            <span class="help-block">
                <strong>{{ $errors->first('suburb') }}</strong>
            </span>
        @endif
    </td>
    </tr>
    <tr>
        <td>State</td>
        <td><input type="text" name="state" value="{{ old('$user->state') }}" required autofocus>
        @if ($errors->has('state'))
            <span class="help-block">
                <strong>{{ $errors->first('state') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Postcode</td>
        <td><input type="number" name="postcode" value="{{ old('$user->postcode') }}" required autofocus>
        @if ($errors->has('postcode'))
            <span class="help-block">
                <strong>{{ $errors->first('postcode') }}</strong>
            </span>
        @endif
        </td>
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
        <td><input type="number" name="card_number" value="{{ old('card_number') }}" required autofocus>
        @if ($errors->has('card_number'))
            <span class="help-block">
                <strong>{{ $errors->first('card_number') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>Expiration Date</td>
        <td><input type="month" name="expiration_date" value="{{ old('expiration_date') }}" required autofocus>
        @if ($errors->has('expiration_date'))
            <span class="help-block">
                <strong>{{ $errors->first('expiration_date') }}</strong>
            </span>
        @endif
        </td>
    </tr>
    <tr>
        <td>CW</td>
        <td><input type="number" name="cw" value="{{ old('cw') }}" required autofocus>
        @if ($errors->has('cw'))
            <span class="help-block">
                <strong>{{ $errors->first('cw') }}</strong>
            </span>
        @endif
    </td>
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