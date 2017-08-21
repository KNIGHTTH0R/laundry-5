<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
    </head>
    <body>
        <h1>Register</h1>
        <form action="register" method="post">
            {!! csrf_field() !!}
            <table>
                <tr>
                    <td>First name<td></td><input type="text" name="firstname"></td>
                </tr>
                <tr>
                    <td>Last name</td><td><input type="text" name="lastname"></td>
                </tr>
                <tr>
                    <td>Email</td><td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Company Name</td><td><input type="text" name="companyname"></td>
                </tr>
                <tr>
                    <td>Street Number</td><td><input type="text" name="streetnumber"></td>
                </tr>
                <tr>
                    <td>Street Name</td><td><input type="text" name="streetname"></td>
                </tr>
                <tr>
                    <td>Suburb</td><td><input type="text" name="suburb"></td>
                </tr>
                <tr>
                    <td>Post code</td><td><input type="type" name="postcode"></td>
                </tr>
                <tr>
                    <td>Phone Number</td><td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>