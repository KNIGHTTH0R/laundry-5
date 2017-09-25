@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Order
                </div>
                <div class="panel-body">
                    <form action="{{ url('user/'.$user->id) }}" method="POST">
                        {{ method_field('PUT') }}
                        {!! csrf_field() !!}
                        <table>
                            <tr>
                            </tr>
                            <tr>
                                <td>Firstname</td>
                                <td><input type="text" name="firstname" value="{{ $user->firstname}}"></td>
                            </tr>
                            <tr>
                                <td>Lastname</td>
                                <td><input type="text" name="lastname" value="{{ $user->lastname}}"></td>
                            </tr>
                            <tr>
                                <td>Postcode</td>
                                <td><input type="text" name="postcode" value="{{ $user->postcode}}"></td>
                            </tr>
                            <tr>
                                <td>Suburb</td>
                                <td><input type="text" name="lastname" value="{{ $user->suburb}}"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Submit" /></td>
                            </tr>
                        </table>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection