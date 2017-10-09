@extends('layouts.app')

@section('content-heading')
    Order
@endsection

@section('content')
    <div class="container">

        <div class="main" >
            <div class="top" >
                Laundry Admin
            </div>

            <div class="top2">
                <ul>
                    <li><a href="../home">Back</a></li>
                </ul>
            </div>

            <div class="left">
                <a href="orders"><input type="button" title="check orders" class="mybutton1"></a>
            </div>

            <div class="center1">
                <a href="orders/create"><input type="button" title="create orders" class="mybutton2"></a>
            </div>
            <div class="center2">
                <a href="users"><input type="button" title="check users" class="mybutton3"></a>
            </div>
            <div class="right">
                <a href="users/create"><input type="button" title="create users" class="mybutton4"></a>
            </div>
        </div>


    </div>

@endsection
