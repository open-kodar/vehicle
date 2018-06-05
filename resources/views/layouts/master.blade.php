<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

            <!-- Owl carousel -->
        <link href="css/owl.carousel.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="css/font-awesome.css" rel="stylesheet">

        <!-- Custom Style -->
        <link href="css/main.css" rel="stylesheet">


</head>
<body>
    <div id="app">

    <div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="{{ url('/')}}" class="logo"><img src="images/logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              
                <li><a href="{{ url('/used-car')}}">Used Vehicles</a></li>
                <li><a href="{{ url('/new-car')}}">New Vehicles</a></li>
                <li class="active"><a href="{{ url('/post-ad') }}">Post an Ad</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/my-ads') }}">My ads </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>

            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
  <!-- Header container end --> 
</div>

        @yield('content')
    </div>

<!--Copyright-->
<div class="copyright">
  <div class="container">
    <div class="bttxt">Garialvai.com.bd. All Rights Reserved.</div>
  </div>
</div>

<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Flex slider --> 
<script src="js/jquery.flexslider.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>
</html>
