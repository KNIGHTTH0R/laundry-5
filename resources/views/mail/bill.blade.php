<!DOCTYPE html>
<html>
<head>
    <title>Sending Mail</title>
</head>
<body>
    <h1>Hello, {{ $order->user_id }}</h1>
    <h2>Your Online Laundry Booking Order Details</h2>>
    <ul>
        <li>Order Number: {{ $order->id }}</li>
        <li>Laundry: {{ $order->laundry }}kg</li>
        <li>Ironing: {{ $order->ironing }}</li>
        <li>Total Payment: ${{ $order->total }}</li>
        <li>Laundry Status: {{ $order->laundry_status }}</li>
        <li>Pickup Date: {{ $order->pickup }}</li>
        <li>Delivery Date: {{ $order->delivery }}</li>
        <li>Notes: {{ $order->notes }}</li>
        <li>Created Time: {{ $order->created_at}}</li>
    </ul>
</body>
</html>