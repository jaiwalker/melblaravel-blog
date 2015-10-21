{{ $name =  isset($admin) ? 'layouts.admin.master' : 'layouts.master' }}
@extends($name)


@section('content')

    @include('blog.head')

    @include('blog.body')


@endsection