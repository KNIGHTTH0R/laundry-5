@extends('layouts.app')

@section('title')
Edit User
@endsection

@section('content')
<a href="{{ url('admin/users/'.$user->id) }}" class="btn btn-default">Go Back</a>
<form action="{{ url('admin/users/'.$user->id) }}" method="POST">
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <table class="table1">
        <tr>
            <td>User ID<span style="color: red">*</span></td>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <td>Firstname<span style="color: red">*</span></td>
            <td><input type="text" name="firstname" value="{{ $user->firstname }}" /></td>
        </tr>
        <tr>
            <td>Lastname<span style="color: red">*</span></td>
            <td><input type="text" name="lastname" value="{{ $user->lastname }}" /></td>
        </tr>
        <tr>
            <td>Email<span style="color: red">*</span></td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Role<span style="color: red">*</span></td>
            <td>
                <input type="radio" name="role" value="customer" <?php echo $user->role == 'customer' ? 'checked' : ''; ?> />customer
                <input type="radio" name="role" value="staff" <?php echo $user->role == 'staff' ? 'checked' : ''; ?> />staff
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="{{ $user->phone }}" /></td>
        </tr>
        <tr>
            <td>Addressline 1</td>
            <td><input type="text" name="addressline1" value="{{ $user->addressline1 }}" /></td>
        </tr>
        <tr>
            <td>Addressline 2</td>
            <td><input type="text" name="addressline2" value="{{ $user->addressline2 }}" /></td>
        </tr>
        <tr>
            <td>Suburb</td>
            <td><input type="text" name="suburb" value="{{ $user->suburb }}" /></td>
        </tr>
        <tr>
            <td>Sate</td>
            <td><input type="text" name="state" value="{{ $user->state }}" /></td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td><input type="text" name="postcode" value="{{ $user->postcode }}" /></td>
        </tr>
    </table>
    <input type="submit" value="Submit" class="btn btn-default" />
</form>
@endsection