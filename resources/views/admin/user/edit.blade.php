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
                    <form action="{{ url('users/'.$user->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
                        <table class="table1">
                            <tr>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Firstname</td>
                                <td class="td1"><input type="text" name="firstname" value="{{ $user->firstname}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Lastname</td>
                                <td class="td1"><input type="text" name="lastname" value="{{ $user->lastname}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Email</td>
                                <td class="td1"><input type="text" name="email" value="{{ $user->email}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Phone Number</td>
                                <td class="td1"><input type="text" name="phone" value="{{ $user->phone}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Address 1</td>
                                <td class="td1"><input type="text" name="addressline1" value="{{ $user->addressline1}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Address 2</td>
                                <td class="td1"><input type="text" name="addressline2" value="{{ $user->addressline2}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Suburb</td>
                                <td class="td1"><input type="text" name="suburb" value="{{ $user->suburb}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Sate</td>
                                <td class="td1"><input type="text" name="state" value="{{ $user->state}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Postcode</td>
                                <td class="td1"><input type="text" name="postcode" value="{{ $user->postcode}}" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td class="td1">Country</td>
                                <td class="td1"><input type="text" name="country" value="{{ $user->country}}" class="textbox1"></td>
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