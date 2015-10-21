@extends('layouts.master')


@section('content')

    @include('blog.head',['description'=>" All Blogs"])

    @include('blog.body')


@endsection