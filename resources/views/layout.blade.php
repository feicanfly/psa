<!DOCTYPE html>
<html>
<head>
	<title>遇见</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">遇见.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">所有好友</a></li>
            <li><a href="/friends/find">添加好友</a></li>
          </ul>
          @if (Auth::check())
              <p class="navbar-text navbar-right">
                    欢迎，{{ Auth::user()->name }}
              </p>
            @endif
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<div class="container">
	@yield('content')
</div>

</body>
</html>