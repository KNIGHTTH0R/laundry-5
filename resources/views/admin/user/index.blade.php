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
                            <tr class="tr1">
                                <th class="td1">User ID</th>
                                <th class="td1">Firstname</th>
                                <th class="td1">Lastname</th>
                                <th class="td1">Email</th>
                            </tr>
                            <?php foreach ($users as $user) { ?>
                            <tr class="tr1">
                                <td class="td1">{{ $user->id }}</td>
                                <td class="td1">{{ $user->firstname }}</td>
                                <td class="td1">{{ $user->lastname }}</td>
                                <td class="td1">{{ $user->email }}</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection