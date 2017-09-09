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
                    <table>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?php echo $user->firstname; ?></td>
                                <td><?php echo $user->lastname; ?></td>
                                <td><?php echo $user->email; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection