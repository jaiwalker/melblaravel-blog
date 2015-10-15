@extends('layouts.master')


<!-- resources/views/auth/register.blade.php -->
@section('content')
<form method="POST" action="/auth/register" class="form-signin">
    {!! csrf_field() !!}
     <h2 class="form-signin-heading">Please Register</h2>
    <div class="form-group">
        <label for="name" class="sr-only">Name</label>
        <input type="text" class="form-group" name="name" value="{{ old('name') }}"  placeholder="Name">
    </div>

    <div class="form-group">
         <label for="email" class="sr-only">Email</label>
        <input type="email" class="form-group" name="email" value="{{ old('email') }}"  placeholder="Email">
    </div>

    <div class="form-group">
         <label for="password" class="sr-only">password</label>
        <input type="password" class="form-group" name="password"  placeholder="Password ">
    </div>

    <div class="form-group">
         <label for="password_confirmation" class="sr-only">Password Confirmation</label>
        <input type="password" class="form-group" name="password_confirmation" placeholder="Password Confirmation">
    </div>

    <div class="form-group">
        <button type="submit" class="btn">Register</button>
    </div>
</form>
@endsection('content')