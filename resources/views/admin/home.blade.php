@extends('layouts.app')

@section('title')
Admin Console
@endsection

@section('content')
<div class="container">
    <div class="main" >
        <div class="left">
            <a href="admin/orders"><input type="button" title="check orders" class="mybutton1"></a>
        </div>
        <div class="center1">
            <a href="admin/orders/create"><input type="button" title="create orders" class="mybutton2"></a>
        </div>
        <div class="center2">
            <a href="admin/users"><input type="button" title="check users" class="mybutton3"></a>
        </div>
        <div class="right">
            <a href="admin/users/create"><input type="button" title="create users" class="mybutton4"></a>
        </div>
    </div>
</div>
@endsection
