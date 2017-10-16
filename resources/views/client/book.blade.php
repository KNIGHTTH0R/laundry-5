@extends('layouts.app')

@section('title')
Book an Order
@endsection

@section('content')
<a href="{{ url('/') }}" class="btn btn-default">Go Homepage</a>
<form action="{{ url('user_orders') }}" method="POST">
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>User ID</td>
            <td>{{ Auth::user()->id }}</td>
        </tr>
        <tr>
            <td>Laundry (kg)</td>
            <td>
                <input type="number" name="laundry" min="0" id="laundry" value="{{ old('laundry') }}" onchange="changeTotal()" />
                <span class="alert">{{ $errors->first('laundry') }}</span>
            </td>
        </tr>
        <tr>
            <td>Ironing (kg)</td>
            <td><input type="number" name="ironing" min="0" id="ironing" value="{{ old('ironing') }}" onchange="changeTotal()" />
                <span class="alert">{{ $errors->first('ironing') }}</span>
            </td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td id="total"></td>
        </tr>
        <tr>
            <td>Pickup Date</td>
            <td>
                <input type="date" name="pickup" value="{{ old('pickup') }}" />
                <span class="alert">{{ $errors->first('pickup') }}</span>
            </td>
        </tr>
        <tr>
            <td>Delivery Date</td>
            <td>
                <input type="date" name="delivery" value="{{ old('delivery') }}" />
                <span class="alert">{{ $errors->first('delivery') }}</span>
            </td>
        </tr>
        <tr>
            <td>Notes</td>
            <td>
                <textarea name="notes">{{ old('notes') }}</textarea>
                <span class="alert">{{ $errors->first('notes') }}</span>
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection