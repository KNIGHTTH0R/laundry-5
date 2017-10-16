@extends('layouts.app')

@section('title')
Edit Order
@endsection

@section('content')
<a href="{{ url('admin/orders/'.$order->id) }}" class="btn btn-default">Go Back</a>
<form action="{{ url('admin/orders/'.$order->id) }}" method="POST">
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>Order ID</td>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <td>User ID<span style="color: red">*</span></td>
            <td><input type="number" name="user_id" class="input-field" value="{{ $order->user_id }}" /></td>
        </tr>
        <tr>
            <td>Laundry (kg)<span style="color: red">*</span></td>
            <td><input type="number" name="laundry" id="laundry" class="input-field" min="0" value="{{ $order->laundry }}" onchange="changeTotal()" /></td>
        </tr>
        <tr>
            <td>Ironing (kg)<span style="color: red">*</span></td>
            <td><input type="number" name="ironing" id="ironing" class="input-field" min="0" value="{{ $order->ironing }}" onchange="changeTotal()" /></td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td id="total">{{ ($order->laundry + $order->ironing)*5 }}$</td>
        </tr>
        <tr>
            <td>Pickup Date<span style="color: red">*</span></td>
            <td><input type="date" name="pickup" class="input-field" value="{{ $order->pickup }}" /></td>
        </tr>
        <tr>
            <td>Delivery Date<span style="color: red">*</span></td>
            <td><input type="date" name="delivery" class="input-field" value="{{ $order->delivery }}" /></td>
        </tr>
        <tr>
            <td>Notes</td>
            <td><textarea name="notes">{{ $order->notes }}</textarea></td>
        </tr>
        <tr>
            <td>Laundry Status<span style="color: red">*</span></td>
            <td>
                <input type="radio" name="laundry_status" value="initial" <?php echo $order->laundry_status == 'initial' ? 'checked' : ''; ?> />initial
                <input type="radio" name="laundry_status" value="picked" <?php echo $order->laundry_status == 'picked' ? 'checked' : ''; ?> />picked
                <input type="radio" name="laundry_status" value="pending" <?php echo $order->laundry_status == 'pending' ? 'checked' : ''; ?> />pending
                <input type="radio" name="laundry_status" value="delivering" <?php echo $order->laundry_status == 'delivering' ? 'checked' : ''; ?> />delivering
                <input type="radio" name="laundry_status" value="completed" <?php echo $order->laundry_status == 'completed' ? 'checked' : ''; ?> />completed
            </td>
        </tr>
        <tr>
            <td>Payment Status<span style="color: red">*</span></td>
            <td>
                <input type="radio" name="payment_status" value="unpaid" <?php echo $order->payment_status == 'unpaid' ? 'checked' : ''; ?>  />unpaid
                <input type="radio" name="payment_status" value="paid" <?php echo $order->payment_status == 'paid' ? 'checked' : ''; ?> />paid
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection