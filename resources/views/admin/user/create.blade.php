@extends('layouts.app')

@section('title')
New User
@endsection

@section('content')
<a href="{{ url('admin/users') }}" class="btn btn-default">Go Back</a>
<form action="{{ url('admin/users') }}" method="POST">
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>First name</td>
            <td><input type="text" name="firstname" /></td>
        </tr>
        <tr>
            <td>Last name</td>
            <td><input type="text" name="lastname" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" /></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" /></td>
        </tr>
        <tr>
            <td>Addressline 1</td>
            <td><input type="text" name="addressline1" /></td>
        </tr>
        <tr>
            <td>Addressline 2</td>
            <td><input type="text" name="addressline2" /></td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td><input type="text" name="suburb" /></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" /></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode" /></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit" class="btn btn-default" />
</form>
@endsection