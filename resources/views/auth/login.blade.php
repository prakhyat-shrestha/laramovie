@extends('layouts.master-admin')


@section('content')


<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}


    <p>Admin Login</p>
    <div class="form-group">
       
        <input type="email" name="email" value="" class="form-control" placeholder="Email">
    </div>

    <div class="form-group">
        
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
    </div>

    <div class="checkbox">
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>

@endsection