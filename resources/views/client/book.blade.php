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
            <td><input type="number" name="laundry" min="0" onchange="changeTotal(laundry, ironing)" />
            @if ($errors->has('laundry'))
            <span class="help-block">
                <strong>{{ $errors->first('laundry') }}</strong>
            </span>
            @endif
            </td>
        </tr>
        <tr>
            <td>Ironing (kg)</td>
            <td><input type="number" name="ironing" min="0" onchange="changeTotal(laundry, ironing)" />
            @if ($errors->has('ironing'))
            <span class="help-block">
                <strong>{{ $errors->first('ironing') }}</strong>
            </span>
            @endif
            </td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td id="total"></td>
        </tr>
        <tr>
            <td>Pickup Date</td>
            <td><input type="date" name="pickup" />
            @if ($errors->has('pickup'))
            <span class="help-block">
                <strong>{{ $errors->first('pickup') }}</strong>
            </span>
            @endif
            </td>
        </tr>
        <tr>
            <td>Delivery Date</td>
            <td><input type="date" name="delivery" />
            @if ($errors->has('delivery'))
            <span class="help-block">
                <strong>{{ $errors->first('delivery') }}</strong>
            </span>
            @endif
        </td>
        </tr>
        <tr>
            <td>Notes</td>
            <td><textarea name="notes"></textarea>
            @if ($errors->has('notes'))
            <span class="help-block">
                <strong>{{ $errors->first('notes') }}</strong>
            </span>
            @endif
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" />
</form>
@endsection