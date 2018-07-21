<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <link href="{{asset('css/metisMenu.css')}}" rel="stylesheet">
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="admin-page">
<div id="wrapper">
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
          </ul>
        </li>
      @endif
    </ul>
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </li>
          <li>
            <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
          </li>
          <li>
            <a href="/admin/products"><i class="fa fa-dashboard fa-fw"></i> Products</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Classifications<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="/admin/brands">Brand</a>
              </li>
              <li>
                <a href="/admin/category">Category</a>
              </li>
              <li>
                <a href="/admin/subcategory">Subcategory</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"></h1>
        @yield('content')
      </div>
    </div>
  </div>
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/metisMenu.js')}}"></script>
<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
@yield('footer')
</body>
</html>