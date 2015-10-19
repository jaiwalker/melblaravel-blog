@extends('layouts.master')


@section('content')

   <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
  </div>

  <div class="row">
        <div class="col-sm-8 blog-main">
            
    @foreach($blogs as $blog)
          <div class="blog-post">
            <h2 class="blog-post-title"> {{ $blog->title }}</h2>
             <p class="blog-post-meta">posted {{ $blog->created_at->diffForHumans() }} by <a href="#">{{ $blog->user->name }}</a></p>
             {{  $blog->content  }}
        </div><!-- /.blog-post -->    
   @endforeach  
               {!! $blogs->render() !!}
  </div>
  
    
  </div>
           
        
   
@endsection