@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Orders
                </div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th>Order ID</th>
                            <th>User ID</th>
                            <th>Laundry</th>
                            <th>Ironing</th>
                            <th>Price</th>
                            <th>Dickup</th>
                            <th>Delivery</th>
                            <th>Notes</th>
                        </tr>
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <td><?php echo $order->id; ?></td>
                                <td><?php echo $order->user_id; ?></td>
                                <td><?php echo $order->laundry; ?>kg</td>
                                <td><?php echo $order->ironing; ?>kg</td>
                                <td><?php echo $order->price; ?>$</td>
                                <td><?php echo $order->pickup; ?></td>
                                <td><?php echo $order->delivery; ?></td>
                                <td><?php echo $order->notes; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection