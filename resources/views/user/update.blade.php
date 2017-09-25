@extends('layouts.app')

@section('title') User @endsection

@section('content')
<form>
    <table>
        <tr>
            <td>First Name</td>
            <td>{{ $user->firstname}}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="" name=""></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="" name=""></td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td><input type="" name=""></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="" name=""></td>
        </tr>
        <tr>
            <td><input type="submit" name="Update"></td>
        </tr>
    </table>    
</form>
@endsection
