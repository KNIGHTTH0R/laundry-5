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
                    <form action="{{ url('users') }}" method="POST">
                        {!! csrf_field() !!}
                        <table>
                            <tr>
                                <td>First name</td>
                                <td><input type="text" name="firstname"></td>
                            </tr>
                            <tr>
                                <td>Last name</td
                                ><td><input type="text" name="lastname"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="text" name="phone"></td>
                            </tr>
                            <tr>
                                <td>Addressline 1</td>
                                <td><input type="text" name="addressline1"></td>
                            </tr>
                            <tr>
                                <td>Addressline 2</td>
                                <td><input type="text" name="addressline2"></td>
                            </tr>
                            <tr>
                                <td>Suburb</td>
                                <td><input type="type" name="suburb"></td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td><input type="text" name="state"></td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td><input type="text" name="postcode"></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><input type="text" name="country"></td>
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