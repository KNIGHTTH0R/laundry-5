<!DOCTYPE html>
<html>
<head>
	<title>User Register</title>
</head>
<body>
<table>
<?php
	foreach ($users as $user) {
?>
<tr>
		<td>
			<div>
				Firstname: <?php echo $user->firstname; ?><br>
				Lastname: <?php echo $user->lastname; ?><br>
				Email: <?php echo $user->email; ?><br>
				-----------------------------------------
			</div>
		</td>
</tr>

<?php } ?>
	
</table>
</body>
</html>