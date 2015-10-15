
<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="/home">Home</a>
          @if (Auth::check())
                <a class="blog-nav-item pull-right" href="/auth/logout">logout </a>
                <li class="blog-nav-item pull-right">Hi {{ Auth::user()->name}}</li>
          @else
           <a class="blog-nav-item pull-right" href="auth/login">Login now!</a>
          @endif
        </nav>
      </div>
    </div>


