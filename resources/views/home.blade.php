<?php
	use App\User;

	$users = User::all();

	foreach($users as $user ){
		echo $user->firstname;
	}
?>