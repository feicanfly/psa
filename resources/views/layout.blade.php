<!DOCTYPE html>
<html>
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>遇见</title>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/libs.css">
  <link rel="apple-touch-icon" href="/image/logo.png" />
  <link rel="icon" href="/image/logo.png" type=" image/png" >
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
          <a class="navbar-brand" href="/">遇见.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is( '/') ? 'active' : '' }}"><a href="/">在线好友</a></li>
            <li class="{{ Request::is( 'friends/all') ? 'active' : '' }}"><a href="/friends/all">所有好友</a></li>
            <li class="{{ Request::is( 'friends/find') ? 'active' : '' }}"><a href="/friends/find">添加好友</a></li>
            <li class="{{ Request::is( 'friends/around') ? 'active' : '' }}"><a href="/friends/around">附近的车</a></li>
          </ul>
          @if (Auth::check())
              <p class="navbar-text navbar-right">
                    <a href="/auth/logout">退出</a>
              </p>
              
              <p class="navbar-text navbar-right">
                    <a href="/setting">设置</a>
              </p>

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

<!-- footer -->
<div class="row">
<footer class="footer eye-protector-processed" style="transition: background 0.3s ease; background-color: rgb(245, 245, 245);">
      <div class="container">
        <p class="text-muted">© 2015 Wang Pengfei. .  <span style="margin-left:50px"></span>
        </p>
      </div>
 </footer>
</div>  
<script type="text/javascript" src="/js/libs.js"></script>
@include('flash')

</body>
</html>