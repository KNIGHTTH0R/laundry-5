<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>

<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "admin";
	$dbname = "Laundry";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die ("fail");
	}

	if(isset($_REQUEST)){
		// $firstname = $_REQUEST['firstname'];
		// $lastname = $_REQUEST['lastname'];
		// $email = $_REQUEST['email'];

		// $sql = "insert into user (firstname, lastname, email) values (".$firstname.", ".$lastname.",".$email.")";
		$sql = "INSERT INTO users (firstname, lastname, email, password, phone, addressline1, addressline2, suburb, state, postcode, country) VALUES ('Jhon', 'Doe', 'john@exmaple.com', 'amdin', '1231903', '311', '210', 'mascot', 'nsw', '2020', 'au')";
		if(mysqli_query($conn, $sql)){
			echo "Insert success";
		}else{
			echo "Insert fail";
		}

		mysqli_close($conn);

	}else{
		echo "The form is empty!";
	}
?>
</head>
<body>
<h1>Register</h1>
<form action="register" method="post">
{!! csrf_field() !!}
<table>
<tr>First name<td></td><input type="text" name="firstname"><td></td></tr>
<tr><td>Last name</td><td><input type="text" name="lastname"></td></tr>
<tr><td>Email</td><td><input type="text" name="email"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td>Company Name</td><td><input type="text" name="companyname"></td></tr>
<tr><td>Street Number</td><td><input type="text" name="streetnumber"></td></tr>
<tr><td>Street Name</td><td><input type="text" name="streetname"></td></tr>
<tr><td>Suburb</td><td><input type="text" name="suburb"></td></tr>
<tr><td>Post code</td><td><input type="type" name="postcode"></td></tr>
<tr><td>Phone Number</td><td><input type="text" name="phone"></td></tr>
<tr><td><input type="submit" name="submit" value="Tijiao"></td></tr>
</table>
</form>
</body>
</html>