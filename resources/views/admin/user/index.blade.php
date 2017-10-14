@extends('layouts.app')

@section('title')
User
@endsection

@section('content')
<a href="{{ url('admin') }}" class="btn btn-default">Go to Console</a>
<table class="table1 table2">
    <tr>
        <th>User ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Role</th>
        <th></th>
    </tr>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }} </td>
            <td><a href="{{ url('admin/users/'.$user->id) }}" class="btn btn-default">Details</a></td>
        </tr>
    <?php } ?>
</table>
<a href="{{ url('admin/users/create') }}" class="btn btn-default">New User</a>
@endsection