@extends('layouts.app')

@section('title') User @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Users
                </div>
                <div class="panel-body">
                    <table class="table1">
                        <tr>
                            <th>User ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href="{{ url('admin/users/'.$user->id) }}"><input type="button" value="Edit"></a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection