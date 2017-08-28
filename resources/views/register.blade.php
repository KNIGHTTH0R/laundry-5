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
                    <td>First name</td><td><input type="text" name="firstname"></td>
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
                    <td>Remember token</td><td><input type="text" name="remember_token"></td>
                </tr>
                <tr>
                    <td>Phone</td><td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Addressline 1</td><td><input type="text" name="addressline1"></td>
                </tr>
                <tr>
                    <td>Addressline 2</td><td><input type="text" name="addressline2"></td>
                </tr>
                <tr>
                    <td>Suburb</td><td><input type="type" name="suburb"></td>
                </tr>
                <tr>
                    <td>State</td><td><input type="text" name="state"></td>
                </tr>
                <tr>
                    <td>Postcode</td><td><input type="text" name="postcode"></td>
                </tr>
                <tr>
                    <td>Country</td><td><input type="text" name="country"></td>
                </tr>
                <tr>
                    <td>Create date</td><td><input type="text" name="created_at"></td>
                </tr>
                <tr>
                    <td>Update date</td><td><input type="text" name="updated_at"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>