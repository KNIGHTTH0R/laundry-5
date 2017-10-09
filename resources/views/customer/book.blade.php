@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create New Order
                </div>
                <div class="panel-body">
                    <form action="{{ url('myOrders') }}" method="POST">
                        {!! csrf_field() !!}
                        <table>
                            <tr>
                                <td>User ID</td>
                                <td><input type="number" name="user_id" /></td>
                            </tr>
                            <tr>
                                <td>Laundry (kg)</td>
                                <td><input type="number" name="laundry" /></td>
                            </tr>
                            <tr>
                                <td>Ironing (kg)</td>
                                <td><input type="number" name="ironing" /></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>(Laundry + Ironing) * 5$/kg // Use AJAX later</td>
                            </tr>
                            <tr>
                                <td>Pickup Date</td>
                                <td><input type="date" name="pickup" /></td>
                            </tr>
                            <tr>
                                <td>Delivery Date</td>
                                <td><input type="date" name="delivery" /></td>
                            </tr>
                            <tr>
                                <td>Notes</td>
                                <td><textarea name="notes"></textarea></td>
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