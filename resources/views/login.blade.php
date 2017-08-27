@extends('layouts.app')

@section('title') Login @endsection

@section('content')
<h2 style="text-align: center">Login</h2>
<form method='post' action='login'> 
	{!! csrf_field() !!}
	<table>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="Login"></td>
		</tr>
	</table>
</form>
@endsection