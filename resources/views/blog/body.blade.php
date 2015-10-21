    <div class="row">
        <div class="col-sm-8 blog-main">

            @foreach($blogs as $blog)
                <div class="blog-post">
                    <h2 class="blog-post-title"> {{ $blog->title }}</h2>

                    <p class="blog-post-meta">posted {{ $blog->created_at->diffForHumans() }} by <a
                                href="/blogs/user/{{ $blog->user_id }}">{{ $blog->user->name }}</a></p>
                    {{  $blog->content  }}
                </div><!-- /.blog-post -->
            @endforeach
            {{-- Pangination --}}
            {!! $blogs->render() !!}
        </div>


    </div>