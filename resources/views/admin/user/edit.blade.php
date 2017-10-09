@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit User
                </div>
                <div class="panel-body">
                    <form action="{{ url('admin/users/'.$user->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
                        <table class="table1">
                            <tr>
                                <td>Firstname</td>
                                <td><input type="text" name="firstname" value="{{ $user->firstname}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Lastname</td>
                                <td><input type="text" name="lastname" value="{{ $user->lastname}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="{{ $user->email}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><input type="text" name="phone" value="{{ $user->phone}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Address 1</td>
                                <td><input type="text" name="addressline1" value="{{ $user->addressline1}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Address 2</td>
                                <td><input type="text" name="addressline2" value="{{ $user->addressline2}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Suburb</td>
                                <td><input type="text" name="suburb" value="{{ $user->suburb}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Sate</td>
                                <td><input type="text" name="state" value="{{ $user->state}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td><input type="text" name="postcode" value="{{ $user->postcode}}" class="textbox1"></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><input type="text" name="country" value="{{ $user->country}}" class="textbox1"></td>
                            </tr>
                        </table>
                        <input type="submit" value="Submit" />
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection