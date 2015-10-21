@extends('layouts.master')

@section('content')
<form method="POST" action="/auth/login" class="form-signin">
   <h2 class="form-signin-heading">Please sign in</h2>
    {!! csrf_field() !!}
    <div class="form-group">
        Email
        <input type="email" class="form-control"  name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password"  class="form-control" name="password" id="password">
    </div>

    <div class="form-group">
        <input type="checkbox"  class="form-control" name="remember"> Remember Me
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>
    @include('layouts.formErrors')
@endsection