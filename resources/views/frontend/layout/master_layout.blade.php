<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<link rel="icon" type="image/png" href="assets/img/safi-logo.png" />--}}
    {{--<link rel="apple-touch-icon" href="apple-touch-icon.png">--}}
    <!-- Place favicon.ico in the root directory -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!--font-family: 'Roboto', sans-serif;-->

    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

</head>
<body>

<!--====== Header Area Start ======-->
<header class="header-area">
    <div class="main-header">
        <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark main-nav">
            <div class="container">
                <a class="navbar-brand" href=""><img style="height: 64px" src="{{asset('frontend/img/logo.png')}}"><span style="font-size: 18px; font-weight: bold; padding-bottom: 0px; border-bottom: 1px solid #2b9cd2;"> Communications</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link @yield('home-active')" href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item drop-menu">
                            <a class="nav-link @yield('service-active')" href="{{route('services')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('about-active')" href="{{route('aboutUs')}}">About us</a>
                        </li>
                        <li class="nav-item drop-menu">
                            <a class="nav-link @yield('contact-active')" href="{{route('contactUs')}}">Contact us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--====== Header Area End ======-->
    @yield('content')

<!--====== Top to bottom Start ======-->
<div class="btn-set">
    <i class="fa fa-angle-double-up"></i>
</div>
<!--====== Top to bottom End ======-->


<!--====== Footer Area Start ======-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-info">
                    <a class="navbar-brand" href=""><img style="height: 64px" src="{{asset('frontend/img/logo.png')}}"><span style="font-size: 18px; font-weight: normal; color: #0b78ff; padding-bottom: 0px; border-bottom: 1px solid #2b9cd2;"> Communications</span></a>
                    <p style="text-align: justify;">JAZZ Communications <b>vision</b> to promote our products worldwide. Offers high quality of service to the customers.</p>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6"></div>
                <div class="footer-info">
                    <h3>Quick Links</h3>
                    <ul class="footer-link">
                        <li><a href="{{route('index')}}"><i class="fa fa-caret-right"></i>Home</a></li>
                        <li><a href="{{route('services')}}"><i class="fa fa-caret-right"></i>Services</a></li>
                        <li><a href="{{route('aboutUs')}}"><i class="fa fa-caret-right"></i>About us</a></li>
                        <li><a href="{{route('contactUs')}}"><i class="fa fa-caret-right"></i>Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-bottom">
                    <p class="text-center">copyright <i class="fa fa-copyright"></i><script>document.write(new Date().getFullYear())</script> <span><span style="font-size: 18px;">Jazz</span> <small>Communications</small></span> all rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== Footer Area End ======-->



<!-- all js here -->
<script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
@stack('js')
</body>
</html>
