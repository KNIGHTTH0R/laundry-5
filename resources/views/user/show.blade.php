@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create New User
                </div>
                <div class="panel-body">
                    <form action="{{ url('users') }}" method="GET">
                        <table>
                            <tr>
                                <td>First name</td>
                                <td><input type="text" name="firstname" value="{{ $user->firstname }}"></td>
                            </tr>
                            <tr>
                                <td>Last name</td
                                ><td><input type="text" name="lastname" value="{{ $user->lastname }}"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="{{ $user->email }}"></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="text" name="phone" value="{{ $user->phone }}"></td>
                            </tr>
                            <tr>
                                <td>Addressline 1</td>
                                <td><input type="text" name="addressline1" value="{{ $user->addressline1 }}"></td>
                            </tr>
                            <tr>
                                <td>Addressline 2</td>
                                <td><input type="text" name="addressline2" value="{{ $user->addressline2 }}"></td>
                            </tr>
                            <tr>
                                <td>Suburb</td>
                                <td><input type="type" name="suburb" value="{{ $user->suburb }}"></td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td><input type="text" name="state" value="{{ $user->state }}"></td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td><input type="text" name="postcode" value="{{ $user->postcode }}"></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><input type="text" name="country" value="{{ $user->country }}"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit" value="Submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection