<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="{{asset('/backend/css/bootstrap-theme.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('backend/css/theme.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('/backend/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}">Cafe</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li  class="{{ route('dashboard') === URL::current() ? 'active' : '' }}"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="{{ route('producttype') === URL::current() ? 'active' : '' }}"><a href="{{route('producttype')}}">Quản lý danh mục</a></li>
            <li class="{{ route('products') === URL::current() ? 'active' : '' }}"><a href="{{route('products')}}">Quản lý sản phẩm</a></li>
            <li class="{{ route('images') === URL::current() ? 'active' : '' }}"><a href="{{route('images')}}">Quản lý hình ảnh</a></li>
            <li class="{{ route('contacts') === URL::current() ? 'active' : '' }}"><a href="{{route('contacts')}}">Liên hệ</a></li>
            <li class="{{ route('setting') === URL::current() ? 'active' : '' }}"><a href="{{route('setting')}}">Cài đặt</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="{{ route('setting') === URL::current() ? 'active' : '' }}"><a href="#">Thông tin tài khoản</a></li>
                <li><a href="{{ url('/auth/logout') }}">Đăng xuất</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
     <div class="page-header">
        <h1>{{ Request::url() }}</h1>
     </div>
        @yield('contents')

    

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{asset('/backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/backend/js/docs.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('/backend/js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
