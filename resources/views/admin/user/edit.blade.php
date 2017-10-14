@extends('layouts.app')

@section('title')
Edit User
@endsection

@section('content')
<a href="{{ url('admin/users/'.$user->id) }}" class="btn btn-default">Go Back</a>
<form action="{{ url('admin/users/'.$user->id) }}" method="POST">
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>User ID</td>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <td>Firstname</td>
            <td><input type="text" name="firstname" value="{{ $user->firstname }}" /></td>
        </tr>
        <tr>
            <td>Lastname</td>
            <td><input type="text" name="lastname" value="{{ $user->lastname }}" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>{{ $user->role }}</td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone" value="{{ $user->phone }}" /></td>
        </tr>
        <tr>
            <td>Address 1</td>
            <td><input type="text" name="addressline1" value="{{ $user->addressline1 }}" /></td>
        </tr>
        <tr>
            <td>Address 2</td>
            <td><input type="text" name="addressline2" value="{{ $user->addressline2 }}" /></td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td><input type="text" name="suburb" value="{{ $user->suburb }}" /></td>
        </tr>
        <tr>
            <td>Sate</td>
            <td><input type="text" name="state" value="{{ $user->state }}" /></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode" value="{{ $user->postcode }}" /></td>
        </tr>
    </table>
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection