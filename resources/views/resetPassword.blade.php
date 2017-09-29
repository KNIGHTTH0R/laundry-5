@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Reset Password                  
                </div>
                <div class="panel-body">
                    <form action="reset" method="POST">
                        {!! csrf_field() !!}
                        <table>
                            <tr>
                                <td>Email:</td>
                                <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="firstname"></td>
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