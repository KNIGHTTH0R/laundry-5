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
                        <table class="table1">
                            <tr class="tr1">
                                <td  class="td1">First name</td>
                                <td  class="td1"><input type="text" name="firstname" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Last name</td>
                                <td  class="td1"><input type="text" name="lastname" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Email</td>
                                <td  class="td1"><input type="text" name="email" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Password</td>
                                <td  class="td1"><input type="password" name="password" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Phone</td>
                                <td  class="td1"><input type="text" name="phone" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Addressline 1</td>
                                <td  class="td1"><input type="text" name="addressline1" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Addressline 2</td>
                                <td  class="td1"><input type="text" name="addressline2" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Suburb</td>
                                <td  class="td1"><input type="type" name="suburb" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">State</td>
                                <td  class="td1"><input type="text" name="state" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Postcode</td>
                                <td  class="td1"><input type="text" name="postcode" class="textbox1"></td>
                            </tr>
                            <tr class="tr1">
                                <td  class="td1">Country</td>
                                <td  class="td1"><input type="text" name="country" class="textbox1"></td>
                            </tr>
                        </table>

                        <input type="submit" name="submit" value="Submit">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection