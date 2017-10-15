<table class="table1 table2">
    <tr>
        <th>Order ID</th>
        <th>User ID</th>
        <th>Laundry Weight</th>
        <th>Ironing Weight</th>
        <th>Total Amount</th>
        <th>Laundry Status</th>
        <th>Payment Status</th>
        <th></th>
    </tr>
    <?php foreach ($orders as $order) { ?>
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user_id }}</td>
            <td>{{ $order->laundry }}kg</td>
            <td>{{ $order->ironing }}kg</td>
            <td>{{ $order->total }}$</td>
            <td>{{ $order->laundry_status }}</td>
            <td>{{ $order->payment_status }}</td>
            <td><a href="{{ url('admin/orders/'.$order->id) }}" class="btn btn-default">Details</a></td>
        </tr>
    <?php } ?>
</table>