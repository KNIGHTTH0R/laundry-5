<!DOCTYPE html>
<html>
<head>
    <title>Payment Detail</title>
</head>
<body>
<form action="{{ url('overview') }}" method="GET">
    {!! csrf_field() !!}
    <table>
        <tr>
            <td>Card Type</td>
            <td><input type="text" name="card_type"></td>
        </tr>
        <tr>
            <td>Card Number</td>
            <td><input type="number" name="card_number"></td>
        </tr>
        <tr>
            <td>Expiration Date</td>
            <td><input type="date" name="expiration_date"></td>
        </tr>
        <tr>
            <td>CW</td>
            <td><input type="number" name="cw"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Pay Security"></td>
            <td></td>
        </tr>
        <tr>
            <td><button name="cancel">Cancel</button></td>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>