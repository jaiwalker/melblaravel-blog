
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Simple blog section </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/all.css">

    <!-- Custom styles for this template -->
    {{--<link href="/assets/css/dashboard.css" rel="stylesheet">--}}

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Hi,{{ Auth::user()->name }}</a></li>
            <li><a href="/auth/logout">logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="/blogs/adminPosts/{{ Auth::user()->id }}">My Blogs</a></li>
            <li><a href="/blogs/create">Create Blog</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           @yield('content')
          </div>
        </div>
      </div>
    </div>


  </body>
  <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://clouddelivery.textbox.io/1/getEditor?apiKey=x8j9xap6cxlytz9dgaq48iicay6lm3ge9cmoi5esrhtjlav1"></script>
<script>
      $( document ).ready(function() {
    var divEditor = textboxio.replace('#editableDiv');
    var divEditor2 = textboxio.replace('#editableDiv2');
});
</script>
</html>
