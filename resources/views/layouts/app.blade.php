<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QIXER - Service Based Business HTML Template</title>

    <link rel=icon href="favicons.ico" sizes="16x16" type="icon/ico">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="loader_bars">
                <span></span>
            </div>
        </div>
    </div>


    <header class="header-style-01">

        <nav class="navbar navbar-area navbar-two navbar-expand-lg navbar-bg-1">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <div class="container container-two nav-container">
                    <div class="responsive-mobile-menu">
                        <div class="logo-wrapper">
                            <a href="index.html" class="logo">
                                <img src="assets/img/logo-03.png" alt="">
                            </a>
                        </div>
                        <a href="#0" class="click_show_icon">
                            <i class="las la-ellipsis-v"></i>
                        </a>
                        <button class="navbar-toggler black-color" type="button" data-toggle="collapse"
                            data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                        <ul class="navbar-nav">
                            <li><a href="about">About</a></li>
                            <li><a href="service">Service</a></li>
                            <li><a href="category">Category</a></li>
                            <li><a href="faq">F & Q </a></li>
                            <li><a href="blog">Blog</a></li>
                            <li><a href="contact">contact</a></li>
                        </ul>
                    </div>
                    <div class="nav-right-content">
                        <div class="info-bar-item">
                            <div class="author-nav-content">
                                @if (Auth::user()->role === 1)
                                    <span class="title"><a href="dashboard">{{ Auth::user()->name }} </a></span>
                                @elseif (Auth::user()->role === 0)
                                    <span class="title"><a href="profile">{{ Auth::user()->name }}</a> </span>
                                @endif
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endguest

        </nav>

    </header>
    <div class="overlays"></div>

    <!-- Main Content -->
    <main>
        {{-- @include('partials.alert') --}}
        @yield('content')
    </main>

    <footer class="footer-area section-bg-2">
        <div class="footer-top padding-top-100 padding-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget ">
                            <div class="about_us_widget">
                                <a href="index.html" class="footer-logo"> <img src="assets/img/logo-footer.png"
                                        alt="footer logo"></a>
                            </div>
                            <div class="footer-inner">
                                <p class="footer-para">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <h6 class="widget-title">Contact Info</h6>
                            <div class="footer-inner">
                                <ul class="footer-link-address">
                                    <li class="list"><span class="address"> <i class="las la-map-marker-alt"></i>
                                            41/1,
                                            Hilton Mall, NY City New York </span></li>
                                    <li class="list"> <span class="address"> <a href="tel:+012-78901234"> <i
                                                    class="las la-mobile-alt"></i> +012-78901234</a> </span></li>
                                    <li class="list"> <span class="address"> <a
                                                href="https://bytesed.com/cdn-cgi/l/email-protection#8ce4e9e0fccce1ede5e0a2efe3e1">
                                                <i class="las la-envelope"></i> <span class="__cf_email__"
                                                    data-cfemail="731b161f03331e121a1f5d101c1e">[email&#160;protected]</span></a>
                                        </span></li>
                                </ul>
                                <div class="footer-socials">
                                    <ul class="footer-social-list">
                                        <li class="lists">
                                            <a class="facebook" href="#0"> <i class="lab la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="lists">
                                            <a class="twitter" href="#0"> <i class="lab la-twitter"></i> </a>
                                        </li>
                                        <li class="lists">
                                            <a class="instagram" href="#0"> <i class="lab la-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="lists">
                                            <a class="youtube" href="#0"> <i class="lab la-youtube"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <h4 class="widget-title">Recent News</h4>
                            <div class="footer-inner">
                                <div class="footer-recent-single">
                                    <div class="footer-recent-flex">
                                        <a href="javascript:void(0)" class="recents-thumbs">
                                            <img src="assets/img/footer/n1.jpg" alt="">
                                        </a>
                                        <div class="footer-recent-text">
                                            <a href="javascript:void(0)" class="footer-recent-para"> Everything opened
                                                for the sake of livelihood. </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-recent-single">
                                    <div class="footer-recent-flex">
                                        <a href="javascript:void(0)" class="recents-thumbs">
                                            <img src="assets/img/footer/n2.jpg" alt="">
                                        </a>
                                        <div class="footer-recent-text">
                                            <a href="javascript:void(0)" class="footer-recent-para"> Mary Lou Retton
                                                Is
                                                for the All About the Memories. </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <h4 class="widget-title">Subscribe Newsletter</h4>
                            <div class="footer-inner">
                                <p class="subscribe-para"> Get the latest creative news from Qixer template </p>
                                <div class="subscribe-form">
                                    <form class="widget-form-single" action="#">
                                        <input class="form--control" type="text" name="email"
                                            placeholder="Enter Email Address">
                                        <button type="submit" class="btn-subscribe"> <i
                                                class="las la-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area copyright-border">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <ul class="copyright-list">
                            <li class="list">
                                <a href="javascript:void(0)"> Privacy Policy </a>
                            </li>
                            <li class="list">
                                <a href="javascript:void(0)"> Terms & Conditions </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="copyright-contents">
                            <span> All copyright (C) 2022 Reserved </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="copyright-payment">
                            <ul class="payment-list">
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c1.png" alt="">
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c2.png" alt="">
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c3.png" alt="">
                                    </a>
                                </li>
                                <li class="list">
                                    <a href="javascript:void(0)"> <img src="assets/img/footer/c4.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="back-to-top">
        <span class="back-top"><i class="las la-angle-up"></i></span>
    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/jquery-migrate.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/slick.js"></script>

    <script src="assets/js/jquery.nice-select.js"></script>

    <script src="assets/js/jquery.nicescroll.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from bytesed.com/tf/qixer/qixer_html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 16:22:58 GMT -->

</html>

{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @if (Auth::user()->role === 1)
                                        <p>ADMIN</p>
                                    @elseif (Auth::user()->role === 0)
                                        <P>USER</P>
                                    @endif

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html> --}}
