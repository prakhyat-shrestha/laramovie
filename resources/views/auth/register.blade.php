<!-- resources/views/auth/register.blade.php -->

@extends('layouts.master-admin')

@section('content')

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" >
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group" >
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation">
    </div>

    
        <button type="submit" class="btn btn-primary">Register</button>
   
</form>

@endsection