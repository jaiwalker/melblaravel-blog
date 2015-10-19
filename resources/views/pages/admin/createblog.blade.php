@extends('layouts.admin.master')


<!-- resources/views/auth/register.blade.php -->
@section('content')
<form method="POST" action="/blogs/store" class="form-signin">
    {!! csrf_field() !!}
     <h2 class="form-signin-heading">Create Blog</h2>
    <div class="form-group">
        <label for="title" class="">Title</label>
        <input type="text" class="form-group" name="title" value="{{ old('title') }}"  placeholder="Title">
    </div>

    <div class="form-group">
         <label for="extract" class="">Extract</label>
        <textarea class="form-group" name="extract" >{{  old('extact') }}</textarea>
    </div>
    
    <div class="form-group">
         <label for="Content" class="">Content</label>
        <textarea class="form-group" name="content" >{{  old('content') }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn">Create</button>
    </div>
</form>
@endsection('content')