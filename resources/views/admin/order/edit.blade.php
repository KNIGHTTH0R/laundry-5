@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Order
                </div>
                <div class="panel-body">
                    <form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
                        <table>
                            <tr>
                                <td>Order ID</td>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <td>User ID</td>
                                <td><input type="number" name="user_id" value="{{ $order->user_id }}" /></td>
                            </tr>
                            <tr>
                                <td>Laundry (kg)</td>
                                <td><input type="number" name="laundry" value="{{ $order->laundry }}" /></td>
                            </tr>
                            <tr>
                                <td>Ironing (kg)</td>
                                <td><input type="number" name="ironing" value="{{ $order->ironing }}" /></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>Calculate using AJAX later</td>
                            </tr>
                            <tr>
                                <td>Pickup Date</td>
                                <td><input type="date" name="pickup" value="{{ $order->pickup }}" /></td>
                            </tr>
                            <tr>
                                <td>Delivery Date</td>
                                <td><input type="date" name="delivery" value="{{ $order->delivery }}" /></td>
                            </tr>
                            <tr>
                                <td>Notes</td>
                                <td><textarea name="notes">{{ $order->notes }}</textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Submit" /></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection