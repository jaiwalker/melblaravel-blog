@extends('layouts.admin.master')

        <!-- resources/views/auth/register.blade.php -->
@section('content')
   <div class="col-xs-6 col-sm-3">

        <form method="POST" action="/blogs" class="form-horizontal">
            {!! csrf_field() !!}
            <h2 class="form-signin-heading">Create Blog</h2>
            <div class="form-group">
                <label for="title" class="">Title</label>
                <input type="text" class="form-group" name="title" value="{{ old('title') }}" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="extract" class="">Extract</label>
                <textarea id="editableDiv"  class="form-group textbox" name="extract">{{  old('extact') }}</textarea>
            </div>
            <div class="form-group">
                <label for="Content" class="">Content</label>
                <textarea class="form-group textbox" id="editableDiv2"  name="content">{{  old('content') }}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Create</button>
            </div>
        </form>
     @include('layouts.formErrors')
</div>
@endsection('content')