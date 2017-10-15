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
            <td>First name<span style="color: red">*</span></td>
            <td><input type="text" name="firstname" value="{{ old('firstname') }}" /></td>
        </tr>
        <tr>
            <td>Last name<span style="color: red">*</span></td>
            <td><input type="text" name="lastname" value="{{ old('lastname') }}" /></td>
        </tr>
        <tr>
            <td>Email<span style="color: red">*</span></td>
            <td><input type="text" name="email" value="{{ old('email') }}" /></td>
        </tr>
        <tr>
            <td>Password<span style="color: red">*</span></td>
            <td><input type="text" name="password" value="{{ old('password') }}" /></td>
        </tr>
        <tr>
            <td>Role<span style="color: red">*</span></td>
            <td>
                <input type="radio" name="role" value="customer" checked />customer
                <input type="radio" name="role" value="staff" />staff
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="{{ old('phone') }}" /></td>
        </tr>
        <tr>
            <td>Addressline 1</td>
            <td><input type="text" name="addressline1" value="{{ old('addressline1') }}" /></td>
        </tr>
        <tr>
            <td>Addressline 2</td>
            <td><input type="text" name="addressline2" value="{{ old('addressline2') }}" /></td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td><input type="text" name="suburb" value="{{ old('suburb') }}" /></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" value="{{ old('state') }}" /></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode" value="{{ old('postcode') }}" /></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit" class="btn btn-default" />
</form>
@endsection