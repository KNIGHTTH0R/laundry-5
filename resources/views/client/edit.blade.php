@extends('layouts.app')

@section('title')
Edit Order
@endsection

@section('content')
<form action="{{ url('user_orders/'.$order->id) }}" method="POST">
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>Order ID</td>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <td>User ID</td>
            <td>{{ $order->user_id }}</td>
        </tr>
        <tr>
            <td>Laundry (kg)</td>
            <td>
                <input type="number" name="laundry" min="0" id="laundry" value="{{ $order->laundry  }}" onchange="changeTotal()" />
                <span class="alert">{{ $errors->first('laundry') }}</span>
            </td>
        </tr>
        <tr>
            <td>Ironing (kg)</td>
            <td><input type="number" name="ironing" min="0" id="ironing" value="{{  $order->ironing }}" onchange="changeTotal()" />
                <span class="alert">{{ $errors->first('ironing') }}</span>
            </td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td id="total"></td>
        </tr>
        <tr>
            <td>Pickup Date</td>
            <td><input type="date" name="pickup" value="{{ $order->pickup }}" />
                @if ($errors->has('pickup'))
                <span class="alert">
                    <strong>{{ $errors->first('pickup') }}</strong>
                </span>
                @endif
            </td>
        </tr>
        <tr>
            <td>Delivery Date</td>
            <td><input type="date" name="delivery" value="{{ $order->delivery }}" />
                @if ($errors->has('delivery'))
                <span class="alert">
                    <strong>{{ $errors->first('delivery') }}</strong>
                </span>
                @endif
            </td>
        </tr>
        <tr>
            <td>Notes</td>
            <td><textarea name="notes">{{ $order->notes }}</textarea>
                @if ($errors->has('notes'))
                <span class="alert">
                    <strong>{{ $errors->first('notes') }}</strong>
                </span>
                @endif
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection