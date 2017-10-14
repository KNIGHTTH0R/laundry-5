@extends('layouts.app')

@section('title')
User Details
@endsection

@section('content')
<a href="{{ url('admin/users') }}" class="btn btn-default">Go Back</a>
<table class="table1">
    <tr>
        <td>User ID</td>
        <td>{{ $user->id }}</td>
    </tr>
    <tr>
        <td>First name</td>
        <td>{{ $user->firstname }}</td>
    </tr>
    <tr>
        <td>Last name</td>
        <td>{{ $user->lastname }}</td>
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
        <td>Phone</td>
        <td>{{ $user->phone }}</td>
    </tr>
    <tr>
        <td>Addressline 1</td>
        <td>{{ $user->addressline1 }}</td>
    </tr>
    <tr>
        <td>Addressline 2</td>
        <td>{{ $user->addressline2 }}</td>
    </tr>
    <tr>
        <td>Suburb</td>
        <td>{{ $user->suburb }}</td>
    </tr>
    <tr>
        <td>State</td>
        <td>{{ $user->state }}</td>
    </tr>
    <tr>
        <td>Postcode</td>
        <td>{{ $user->postcode }}</td>
    </tr>
</table>
<table>
    <tr>
        <td>
            <form action="{{ url('admin/users/'.$user->id.'/edit') }}" method="GET">
                <input type="submit" name="submit" value="Edit" class="btn btn-default" />
            </form>
        </td>
        <td>
            <form action="{{ url('admin/users/'.$user->id) }}" method="POST">
                {{ method_field('DELETE') }}
                {!! csrf_field() !!}
                <input type="submit" value="Delete" class="btn btn-default" />
            </form>
        </td>
    </tr>
</table>
@endsection