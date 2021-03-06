<!DOCTYPE html>
<html lang="en">
<head>
    <title>Plvl</title>
    <meta charset="UTF-8">
    <meta name="description" content="pictures, laravel">
    <meta name="keywords" content="pictures, laravel">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/magnific-popup.css"/>
    <link rel="stylesheet" href="/css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>

-->


<!-- header section start -->
<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <div class="logo">
                    <h2 class="site-logo">Riddle</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-9">
                <nav class="main-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        @auth
                            <li><a href="/photos/create">New</a></li>
                        @endauth
                        <li><a href="/about">About</a></li>
                        <li><a href="/article/1">Work</a></li>


                        <li>
                            <i id="search" class="fa fa-search"></i>
                        </li>
                        <div id="searchdiv" style="position:absolute;">
                            <form id="searchform">
                                <input type="search" placeholder="Recherche" />
                            </form>
                        </div>
                        @guest
                            <li class="right">
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="right">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="right">
                                    {{ Auth::user()->name }}
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="nav-switch">
        <i class="fa fa-bars"></i>
    </div>
</header>
<!-- header section end -->


<div>
    @yield('content')
</div>


<!-- footer section start -->
<footer class="footer-section text-center">
    <div class="container">
        <div class="social-links">
            <a href=""><span class="fa fa-pinterest"></span></a>
            <a href=""><span class="fa fa-linkedin"></span></a>
            <a href=""><span class="fa fa-instagram"></span></a>
            <a href=""><span class="fa fa-facebook"></span></a>
            <a href=""><span class="fa fa-twitter"></span></a>
        </div>
        <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </div>
</footer>
<!-- footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/mixitup.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/divers.js"></script>

</body>
</html>