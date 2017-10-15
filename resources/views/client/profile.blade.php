@extends('layouts.app')

@section('title')
My Profile
@endsection

@section('content')
<table class="table1">
    <tr>
        <td>First Name</td>
        <td><input type="text" name="firstname" id="firstname" value="{{ $user-> firstname }}" />

        {{ $errors->has('user_id')?'user is error':'' }}

        @if ($errors->has('firstname'))
        <span class="help-block">
            <strong>{{ $errors->first('firstname') }}</strong>
        </span>
        @endif
        </td>
    </tr>        
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lastname" id="lastname" value="{{ $user-> lastname }}" /></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" id="phone" value="{{ $user-> phone}}" /></td>
    </tr>
    <tr>
        <td>Address 1</td>
        <td><input type="text" name="addressline1" id="addressline1" value="{{ $user-> addressline1}}" /></td>
    </tr>
    <tr>
        <td>Address2</td>
        <td><input type="text" name="addressline2" id="addressline2" value="{{ $user-> addressline2}}" /></td>
    </tr>
    <tr>
        <td>Suburb</td>
        <td><input type="text" name="suburb" id="suburb" value="{{ $user-> suburb }}" /></td>
    </tr>
    <tr>
        <td>State</td>
        <td><input type="text" name="state" id="state" value="{{ $user-> state }}" /></td>
    </tr>
    <tr>
        <td>Postcode</td>
        <td><input type="text" name="postcode" id="postcode" value="{{ $user-> postcode}}" /></td>
    </tr>
</table>
<input type="button" name="submit" value='Save Edited' onclick="updateUserProfile()" />
@endsection