@extends('layouts.app')

@section('title')
Edit User
@endsection

@section('content')
<a href="{{ url('profile') }}" class="btn btn-default">Go Back</a>
<form action="{{ url('profile/update') }}" method="POST">
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>User ID</td>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <td>Firstname<span style="color: red">*</span></td>
            <td>
                <input type="text" name="firstname" class="input-field" value="{{ $user->firstname }}" />
                <span class="alert">{{ $errors->first('firstname') }}</span>
            </td>
        </tr>
        <tr>
            <td>Lastname<span style="color: red">*</span></td>
            <td>
                <input type="text" name="lastname" class="input-field" value="{{ $user->lastname }}" />
                <span class="alert">{{ $errors->first('lastname') }}</span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
        </tr            >
        <tr>
            <td>Role</td>
            <td>{{ $user->role }}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>
                <input type="number" name="phone" class="input-field" value="{{ $user->phone }}" />
                <span class="alert">{{ $errors->first('phone') }}</span>
            </td>
        </tr>
        <tr>
            <td>Addressline 1</td>
            <td>
                <input type="text" name="addressline1" class="input-field" value="{{ $user->addressline1 }}" />
                <span class="alert">{{ $errors->first('addressline1') }}</span>
            </td>
        </tr>
        <tr>
            <td>Addressline 2</td>
            <td>
                <input type="text" name="addressline2" class="input-field" value="{{ $user->addressline2 }}" />
                <span class="alert">{{ $errors->first('addressline2') }}</span>
            </td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td>
                <input type="text" name="suburb" class="input-field" value="{{ $user->suburb }}" />
                <span class="alert">{{ $errors->first('suburb') }}</span>
            </td>
        </tr>
        <tr>
            <td>State</td>
            <td>
                <input type="text" name="state" class="input-field" value="{{ $user->state }}" />
                <span class="alert">{{ $errors->first('state') }}</span>
            </td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td>
                <input type="number" name="postcode" class="input-field" value="{{ $user->postcode }}" />
                <span class="alert">{{ $errors->first('postcode') }}</span>
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection