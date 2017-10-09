<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
</head>
<body>
    <h1>My Profile</h1>
<form action="{{ url('customer/'.$user->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstname" value="{{ $user-> firstname }}"></td>
        </tr>        
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastname" value="{{ $user-> lastname }}"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="{{ $user-> email}}"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="{{ $user-> phone}}"></td>
        </tr>
        <tr>
            <td>Address One</td>
            <td><input type="text" name="addressline1" value="{{ $user-> addressline1}}"></td>
        </tr>
        <tr>
            <td>Address Two</td>
            <td><input type="text" name="addressline2" value="{{ $user-> addressline2}}"></td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td><input type="text" name="suburb" value="{{ $user-> suburb }}"></td>
        </tr>
        <tr>
            <td>State</td>
           <td><input type="text" name="state" value="{{ $user-> state }}"></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode" value="{{ $user-> postcode}}"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value='Save Edited'></td>
        </tr>
    </table>
</form>
</body>
</html>