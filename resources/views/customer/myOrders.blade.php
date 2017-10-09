<!DOCTYPE html>
<html>
<head>
    <title>My orders</title>
</head>
<body>
<h1>My Orders</h1>
<form action="{{ url('customer/'.$user->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
    <table>
        <tr>
            <td>Order Id</td>
            <td><input type="number" name="id" value="{{$order->id}}"></td>
        </tr>
        <tr>
            <td>Laundry</td>
            <td><input type="text" name="laundry" value="{{$order->laundry}}"></td>
        </tr>
        <tr>
            <td>Ironing</td>
            <td><input type="text" name="ironing" value="{{$order->ironing}}"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>Show price later</td>
        </tr>
        <tr>
            <td>Pick Up</td>
            <td><input type="date" name="pickup" value="{{$order->pickup}}"></td>
        </tr>
        <tr>
            <td>Delivery</td>
            <td><input type="date" name="delivery" value="{{$order->delivery}}"></td>
        </tr>
        <tr>
            <td>Notes</td>
            <td><input type="text" name="notes" value="{{$order->notes}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Save Edited"></td>
        </tr>
    </table>
</form>
</body>
</html>