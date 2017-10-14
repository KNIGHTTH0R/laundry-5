@extends('layouts.app')

@section('title')
Admin Console
@endsection

@section('content')
<div class="left-img">
    <a href="admin/orders"><input type="button" title="check orders" class="button-order"></a>
</div>
<div class="right-img">
    <a href="admin/users"><input type="button" title="create orders" class="button-user"></a>
</div>
@endsection