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

        <nav class="navbar navbar-area white nav-absolute navbar-expand-lg navbar-border">
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
                                <img src="assets/img/logo-01.png" alt="">
                            </a>
                        </div>
                        <a href="#0" class="click_show_icon">
                            <i class="las la-ellipsis-v"></i>
                        </a>
                        <button class="navbar-toggler " type="button" data-toggle="collapse"
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

    <div class="banner-area home-one-banner bg-image" style="background-image:url(assets/img/banner/banner-bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="banner-contents">
                        <span class="title-top"> Order any service, anytime from anywhere </span>
                        <h2 class="banner-title"> One-stop solution for your <span class="title-span"> services </span>
                        </h2>
                        <div class="banner-bottom-content">
                            <form action="#" class="banner-search-form">
                                <div class="banner-address-select">
                                    <select>
                                        <option value="1">New York</option>
                                        <option value="2">London</option>
                                        <option value="2">Eden Garden</option>
                                        <option value="2">Paris</option>
                                        <option value="2">Barcelona</option>
                                    </select>
                                </div>
                                <div class="single-input">
                                    <input class="form--control" type="text" placeholder="What are you look for">
                                    <div class="icon-search">
                                        <i class="las la-search"></i>
                                    </div>
                                    <button type="submit"> <i class="las la-search"></i> </button>
                                </div>
                            </form>
                            <div class="banner-keywords">
                                <span class="keyword-title"> Popular: </span>
                                <ul class="keyword-tag">
                                    <li>
                                        <a href="javascript:void(0)"> Electrician </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Cleaner </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Painting </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Saloon </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Home Move </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="category-area section-bg-1 padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title">
                        <h2 class="title"> Browse <span class="title-color"> Categories </span> </h2>
                        <span class="section-para"> It is a long established fact that a reader will be distracted by
                            the readable content of a page when looking at its layout. </span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-50">
                <div class="col-lg-12">
                    <div class="category-slider dot-style-one">
                        <div class="single-category-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-category">
                                <div class="icon">
                                    <i class="flaticon-mop"></i>
                                </div>
                                <div class="category-contents">
                                    <h4 class="category-title"> <a href="category.html"> Cleaning </a> </h4>
                                    <span class="category-para"> 36+ Service </span>
                                </div>
                            </div>
                        </div>
                        <div class="single-category-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-category">
                                <div class="icon">
                                    <i class="flaticon-electrician"></i>
                                </div>
                                <div class="category-contents">
                                    <h4 class="category-title"> <a href="category.html"> Electric </a> </h4>
                                    <span class="category-para"> 36+ Service </span>
                                </div>
                            </div>
                        </div>
                        <div class="single-category-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-category">
                                <div class="icon">
                                    <i class="flaticon-moving-truck"></i>
                                </div>
                                <div class="category-contents">
                                    <h4 class="category-title"> <a href="category.html"> Home Move </a> </h4>
                                    <span class="category-para"> 36+ Service </span>
                                </div>
                            </div>
                        </div>
                        <div class="single-category-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-category">
                                <div class="icon">
                                    <i class="flaticon-beauty-saloon"></i>
                                </div>
                                <div class="category-contents">
                                    <h4 class="category-title"> <a href="category.html"> Saloon & Spa </a> </h4>
                                    <span class="category-para"> 36+ Service </span>
                                </div>
                            </div>
                        </div>
                        <div class="single-category-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-category">
                                <div class="icon">
                                    <i class="flaticon-paint-roller-1"></i>
                                </div>
                                <div class="category-contents">
                                    <h4 class="category-title"> <a href="category.html"> Painting </a> </h4>
                                    <span class="category-para"> 36+ Service </span>
                                </div>
                            </div>
                        </div>
                        <div class="single-category-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-category">
                                <div class="icon">
                                    <i class="flaticon-cleaning"></i>
                                </div>
                                <div class="category-contents">
                                    <h4 class="category-title"> <a href="category.html"> Cleaning </a> </h4>
                                    <span class="category-para"> 36+ Service </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title">
                        <h2 class="title"> <span class="title-color"> Featured </span> Services </h2>
                        <span class="section-para"> It is a long established fact that a reader will be distracted by
                            the readable content of a page when looking at its layout. </span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-50">
                <div class="col-lg-12">
                    <div class="services-slider dot-style-one">
                        <div class="single-services-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-service">
                                <a href="service_details.html" class="service-thumb">
                                    <img src="assets/img/service/fs1.jpg" alt="">
                                    <div class="award-icons">
                                        <i class="las la-award"></i>
                                    </div>
                                </a>
                                <div class="services-contents">
                                    <ul class="author-tag">
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <div class="authors">
                                                    <div class="thumb">
                                                        <img src="assets/img/service/author.jpg" alt="">
                                                        <span class="notification-dot"></span>
                                                    </div>
                                                    <span class="author-title"> Riyad Hossain </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <span class="icon"> <i class="las la-star"></i> </span>
                                                <span class="reviews"> 4.9 (231) </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a href="service_details.html"> All Painting &
                                            Renovation Service </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                    <div class="service-price mt-3">
                                        <span class="starting"> Starting at </span>
                                        <span class="prices color-3"> $80.00 </span>
                                    </div>
                                    <div class="btn-wrapper mt-4">
                                        <a href="multistep_form.html" class="cmn-btn btn-appoinment btn-outline-1">
                                            Book Appoinment </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-services-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-service">
                                <a href="service_details.html" class="service-thumb">
                                    <img src="assets/img/service/fs2.jpg" alt="">
                                    <div class="award-icons">
                                        <i class="las la-award"></i>
                                    </div>
                                </a>
                                <div class="services-contents">
                                    <ul class="author-tag">
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <div class="authors">
                                                    <div class="thumb">
                                                        <img src="assets/img/service/author2.jpg" alt="">
                                                        <span class="notification-dot"></span>
                                                    </div>
                                                    <span class="author-title"> Arafat Hossain </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <span class="icon"> <i class="las la-star"></i> </span>
                                                <span class="reviews"> 4.9 (351) </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a href="service_details.html"> All Emergency
                                            Electrical Supports </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                    <div class="service-price mt-3">
                                        <span class="starting"> Starting at </span>
                                        <span class="prices color-3"> $60.00 </span>
                                    </div>
                                    <div class="btn-wrapper mt-4">
                                        <a href="multistep_form.html" class="cmn-btn btn-appoinment btn-outline-1">
                                            Book Appoinment </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-services-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-service">
                                <a href="service_details.html" class="service-thumb">
                                    <img src="assets/img/service/fs3.jpg" alt="">
                                    <div class="award-icons">
                                        <i class="las la-award"></i>
                                    </div>
                                </a>
                                <div class="services-contents">
                                    <ul class="author-tag">
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <div class="authors">
                                                    <div class="thumb">
                                                        <img src="assets/img/service/author3.jpg" alt="">
                                                        <span class="notification-dot"></span>
                                                    </div>
                                                    <span class="author-title"> Shafiq Islam </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <span class="icon"> <i class="las la-star"></i> </span>
                                                <span class="reviews"> 4.8 (271) </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a
                                            href="https://bytesed.com/our-products/saimon-personal-portfolio-html-template/">
                                            All Hair Cut & Hair Color Service </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                    <div class="service-price mt-3">
                                        <span class="starting"> Starting at </span>
                                        <span class="prices color-3"> $70.00 </span>
                                    </div>
                                    <div class="btn-wrapper mt-4">
                                        <a href="multistep_form.html" class="cmn-btn btn-appoinment btn-outline-1">
                                            Book Appoinment </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-services-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-service">
                                <a href="service_details.html" class="service-thumb">
                                    <img src="assets/img/service/fs2.jpg" alt="">
                                    <div class="award-icons">
                                        <i class="las la-award"></i>
                                    </div>
                                </a>
                                <div class="services-contents">
                                    <ul class="author-tag">
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <div class="authors">
                                                    <div class="thumb">
                                                        <img src="assets/img/service/author4.jpg" alt="">
                                                        <span class="notification-dot"></span>
                                                    </div>
                                                    <span class="author-title"> Sharif Ahmed </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <span class="icon"> <i class="las la-star"></i> </span>
                                                <span class="reviews"> 4.7 (331) </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a href="service_details.html"> All Emergency
                                            Electrical Services </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                    <div class="service-price mt-3">
                                        <span class="starting"> Starting at </span>
                                        <span class="prices color-3"> $90.00 </span>
                                    </div>
                                    <div class="btn-wrapper mt-4">
                                        <a href="multistep_form.html" class="cmn-btn btn-appoinment btn-outline-1">
                                            Book Appoinment </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area padding-top-100 padding-bottom-100 section-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title">
                        <h2 class="title"> <span class="title-color"> Popular </span> Services </h2>
                        <span class="section-para"> It is a long established fact that a reader will be distracted by
                            the readable content of a page when looking at its layout. </span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-xl-4 col-md-6 margin-top-30">
                    <div class="single-service service-two wow fadeInUp" data-wow-delay=".2s">
                        <a href="service_details.html" class="service-thumb">
                            <img src="assets/img/service/s1.jpg" alt="">
                        </a>
                        <div class="services-contents">
                            <ul class="author-tag">
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <div class="authors">
                                            <div class="thumb">
                                                <img src="assets/img/service/author.jpg" alt="">
                                                <span class="notification-dot"></span>
                                            </div>
                                            <span class="author-title"> Riyad Hossain </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <span class="icon"> <i class="las la-star"></i> </span>
                                        <span class="reviews"> 4.9 (371) </span>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="common-title-two"> <a href="service_details.html"> All Painting & Renovation
                                    Service </a> </h4>
                            <div class="service-price-wrapper mt-4">
                                <div class="service-price style-02">
                                    <span class="starting"> Starting at </span>
                                    <span class="prices color-3"> $90.00 </span>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="multistep_form.html" class="cmn-btn btn-bg-1 btn-medium"> Book Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 margin-top-30">
                    <div class="single-service service-two wow fadeInDown" data-wow-delay=".2s">
                        <a href="service_details.html" class="service-thumb">
                            <img src="assets/img/service/s2.jpg" alt="">
                        </a>
                        <div class="services-contents">
                            <ul class="author-tag">
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <div class="authors">
                                            <div class="thumb">
                                                <img src="assets/img/service/author2.jpg" alt="">
                                                <span class="notification-dot"></span>
                                            </div>
                                            <span class="author-title"> Arafat Hossain </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <span class="icon"> <i class="las la-star"></i> </span>
                                        <span class="reviews"> 4.8 (199) </span>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="common-title-two"> <a href="service_details.html"> All Emergency Electrical
                                    Support </a> </h4>
                            <div class="service-price-wrapper mt-4">
                                <div class="service-price style-02">
                                    <span class="starting"> Starting at </span>
                                    <span class="prices color-3"> $95.00 </span>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="multistep_form.html" class="cmn-btn btn-bg-1 btn-medium"> Book Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 margin-top-30">
                    <div class="single-service service-two wow fadeInUp" data-wow-delay=".2s">
                        <a href="service_details.html" class="service-thumb">
                            <img src="assets/img/service/s3.jpg" alt="">
                        </a>
                        <div class="services-contents">
                            <ul class="author-tag">
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <div class="authors">
                                            <div class="thumb">
                                                <img src="assets/img/service/author3.jpg" alt="">
                                                <span class="notification-dot"></span>
                                            </div>
                                            <span class="author-title"> Shafiq Islam </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <span class="icon"> <i class="las la-star"></i> </span>
                                        <span class="reviews"> 4.9 (314) </span>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="common-title-two"> <a href="service_details.html"> All Hair Cut & Hair Color
                                    Service </a> </h4>
                            <div class="service-price-wrapper mt-4">
                                <div class="service-price style-02">
                                    <span class="starting"> Starting at </span>
                                    <span class="prices color-3"> $85.00 </span>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="multistep_form.html" class="cmn-btn btn-bg-1 btn-medium"> Book Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 margin-top-30">
                    <div class="single-service service-two wow fadeInDown" data-wow-delay=".2s">
                        <a href="service_details.html" class="service-thumb">
                            <img src="assets/img/service/s4.jpg" alt="">
                        </a>
                        <div class="services-contents">
                            <ul class="author-tag">
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <div class="authors">
                                            <div class="thumb">
                                                <img src="assets/img/service/author4.jpg" alt="">
                                                <span class="notification-dot"></span>
                                            </div>
                                            <span class="author-title"> Sharif Ahmed </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <span class="icon"> <i class="las la-star"></i> </span>
                                        <span class="reviews"> 4.9 (261) </span>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="common-title-two"> <a href="service_details.html"> All Painting & Renovation
                                    Service </a> </h4>
                            <div class="service-price-wrapper mt-4">
                                <div class="service-price style-02">
                                    <span class="starting"> Starting at </span>
                                    <span class="prices color-3"> $90.00 </span>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="multistep_form.html" class="cmn-btn btn-bg-1 btn-medium"> Book Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 margin-top-30">
                    <div class="single-service service-two wow fadeInUp" data-wow-delay=".2s">
                        <a href="service_details.html" class="service-thumb">
                            <img src="assets/img/service/s5.jpg" alt="">
                        </a>
                        <div class="services-contents">
                            <ul class="author-tag">
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <div class="authors">
                                            <div class="thumb">
                                                <img src="assets/img/service/author5.jpg" alt="">
                                                <span class="notification-dot"></span>
                                            </div>
                                            <span class="author-title"> Ab Kalam </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <span class="icon"> <i class="las la-star"></i> </span>
                                        <span class="reviews"> 4.9 (243) </span>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="common-title-two"> <a href="service_details.html"> House Moving & Shifting
                                    Services </a> </h4>
                            <div class="service-price-wrapper mt-4">
                                <div class="service-price style-02">
                                    <span class="starting"> Starting at </span>
                                    <span class="prices color-3"> $75.00 </span>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="multistep_form.html" class="cmn-btn btn-bg-1 btn-medium"> Book Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 margin-top-30">
                    <div class="single-service service-two wow fadeInDown" data-wow-delay=".2s">
                        <a href="service_details.html" class="service-thumb">
                            <img src="assets/img/service/s6.jpg" alt="">
                        </a>
                        <div class="services-contents">
                            <ul class="author-tag">
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <div class="authors">
                                            <div class="thumb">
                                                <img src="assets/img/service/author6.jpg" alt="">
                                                <span class="notification-dot"></span>
                                            </div>
                                            <span class="author-title"> Md Shiblo </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="tag-list">
                                    <a href="javascript:void(0)">
                                        <span class="icon"> <i class="las la-star"></i> </span>
                                        <span class="reviews"> 4.9 (307) </span>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="common-title-two"> <a href="service_details.html"> Home & All Others Cleaning
                                    Service </a> </h4>
                            <div class="service-price-wrapper mt-4">
                                <div class="service-price style-02">
                                    <span class="starting"> Starting at </span>
                                    <span class="prices color-3"> $90.00 </span>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="multistep_form.html" class="cmn-btn btn-bg-1 btn-medium"> Book Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="explore-btn">
                    <div class="btn-wrapper">
                        <a href="javascript:void(0)" class="cmn-btn btn-outline-1"> Explore More </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="margketplace-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title">
                        <h2 class="title"> Why Our <span class="title-color"> Marketplace? </span> </h2>
                        <span class="section-para"> It is a long established fact that a reader will be distracted by
                            the readable content of a page when looking at its layout. </span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-lg-4 col-md-6 margin-top-30 marketplace-child">
                    <div class="single-marketplace wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="las la-tools"></i>
                        </div>
                        <div class="marketplace-contents">
                            <h4 class="common-title-two"> <a href="javascript:void(0)"> Service Commitment </a> </h4>
                            <p class="common-para"> It is a long established fact that a reader will be distracted by
                                the readable. It is a long established fact that a reader. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-top-30 marketplace-child">
                    <div class="single-marketplace wow fadeInDown" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="las la-users-cog"></i>
                        </div>
                        <div class="marketplace-contents">
                            <h4 class="common-title-two"> <a href="javascript:void(0)"> Super Experience </a> </h4>
                            <p class="common-para"> It is a long established fact that a reader will be distracted by
                                the readable. It is a long established fact that a reader. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-top-30 marketplace-child">
                    <div class="single-marketplace wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="las la-shield-alt"></i>
                        </div>
                        <div class="marketplace-contents">
                            <h4 class="common-title-two"> <a href="javascript:void(0)"> User Data Secure </a> </h4>
                            <p class="common-para"> It is a long established fact that a reader will be distracted by
                                the readable. It is a long established fact that a reader. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-top-30 marketplace-child">
                    <div class="single-marketplace wow fadeInDown" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="las la-stopwatch"></i>
                        </div>
                        <div class="marketplace-contents">
                            <h4 class="common-title-two"> <a href="javascript:void(0)"> Fast Service </a> </h4>
                            <p class="common-para"> It is a long established fact that a reader will be distracted by
                                the readable. It is a long established fact that a reader. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-top-30 marketplace-child">
                    <div class="single-marketplace wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                        <div class="marketplace-contents">
                            <h4 class="common-title-two"> <a href="javascript:void(0)"> Secure Payment </a> </h4>
                            <p class="common-para"> It is a long established fact that a reader will be distracted by
                                the readable. It is a long established fact that a reader. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 margin-top-30 marketplace-child">
                    <div class="single-marketplace wow fadeInDown" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="las la-headset"></i>
                        </div>
                        <div class="marketplace-contents">
                            <h4 class="common-title-two"> <a href="javascript:void(0)"> Dedicated Support </a> </h4>
                            <p class="common-para"> It is a long established fact that a reader will be distracted by
                                the readable. It is a long established fact that a reader. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="professional-area section-bg-1 padding-top-100 padding-bottom-100 section-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="title"> Popular <span class="title-color"> Professional Services </span> </h2>
                        <span class="section-para extra-padding"> It is a long established fact that a reader will be
                            distracted by the readable content of a page when looking at its layout. </span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-50">
                <div class="col-lg-12">
                    <div class="professional-slider nav-style-one">
                        <div class="single-professional-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-professional">
                                <a href="javascript:void(0)" class="professional-thumb">
                                    <img src="assets/img/service/ps1.jpg" alt="">
                                </a>
                                <div class="professional-contents">
                                    <h6 class="professional-title"> <a href="javascript:void(0)"> Cleaning </a> </h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-professional-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-professional">
                                <a href="javascript:void(0)" class="professional-thumb">
                                    <img src="assets/img/service/ps2.jpg" alt="">
                                </a>
                                <div class="professional-contents">
                                    <h6 class="professional-title"> <a href="javascript:void(0)"> Moving </a> </h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-professional-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-professional">
                                <a href="javascript:void(0)" class="professional-thumb">
                                    <img src="assets/img/service/ps3.jpg" alt="">
                                </a>
                                <div class="professional-contents">
                                    <h6 class="professional-title"> <a href="javascript:void(0)"> Painting </a> </h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-professional-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-professional">
                                <a href="javascript:void(0)" class="professional-thumb">
                                    <img src="assets/img/service/ps4.jpg" alt="">
                                </a>
                                <div class="professional-contents">
                                    <h6 class="professional-title"> <a href="javascript:void(0)"> Electrician </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-professional-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-professional">
                                <a href="javascript:void(0)" class="professional-thumb">
                                    <img src="assets/img/service/ps5.jpg" alt="">
                                </a>
                                <div class="professional-contents">
                                    <h6 class="professional-title"> <a href="javascript:void(0)"> Saloon </a> </h6>
                                </div>
                            </div>
                        </div>
                        <div class="single-professional-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-professional">
                                <a href="javascript:void(0)" class="professional-thumb">
                                    <img src="assets/img/service/ps2.jpg" alt="">
                                </a>
                                <div class="professional-contents">
                                    <h6 class="professional-title"> <a href="javascript:void(0)"> Moving </a> </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="seller-area padding-top-70 padding-bottom-100">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row align-items-center">
                <div class="col-lg-6 margin-top-30">
                    <div class="seller-wrapper">
                        <div class="section-title text-left">
                            <h2 class="title"> Start As <span class="title-color"> Seller </span> </h2>
                            <span class="section-para"> It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout. It is a long established
                                fact that a reader will be distracted by the readable content of a page when
                                looking at its layout. </span>
                        </div>
                        <div class="seller-contents">
                            <ul class="seller-list">
                                <li class="list">
                                    <span class="span-list"> It is a long established fact that a reader will be
                                        distracted by the readable content of a page. </span>
                                </li>
                                <li class="list">
                                    <span class="span-list"> It is a long established fact that a reader will be
                                        distracted by the readable content of a page. </span>
                                </li>
                            </ul>
                            <div class="btn-wrapper">
                                <a href="javascript:void(0)" class="cmn-btn btn-bg-1"> Become a Seller </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin-top-30">
                    <div class="seller-thumbs wow slideInRight" data-wow-delay=".2s">
                        <img src="assets/img/seller/seller.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area padding-top-100 padding-bottom-100 section-bg-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title">
                        <h2 class="title"> Recent <span class="title-color"> Blog & Articles </span> </h2>
                        <span class="section-para"> It is a long established fact that a reader will be distracted by
                            the readable content of a page when looking at its layout. </span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-50">
                <div class="col-lg-12">
                    <div class="services-slider dot-style-one dot-02">
                        <div class="single-blog-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-blog">
                                <a href="blog_details.html" class="blog-thumb">
                                    <img src="assets/img/blog/b1.jpg" alt="">
                                </a>
                                <div class="blog-contents">
                                    <ul class="tags">
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-clock"></i> 14 Feb 2022
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-tag"></i> Painting </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a href="blog_details.html"> All Painting &
                                            Renovation Service </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-blog">
                                <a href="blog_details.html" class="blog-thumb">
                                    <img src="assets/img/blog/b2.jpg" alt="">
                                </a>
                                <div class="blog-contents">
                                    <ul class="tags">
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-clock"></i> 16 Feb 2022
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-tag"></i> Electrical </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a href="blog_details.html"> All Emergency
                                            Electrical Support </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-blog">
                                <a href="blog_details.html" class="blog-thumb">
                                    <img src="assets/img/blog/b3.jpg" alt="">
                                </a>
                                <div class="blog-contents">
                                    <ul class="tags">
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-clock"></i> 18 Feb 2022
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-tag"></i> Cleaning </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a href="blog_details.html"> Home & All Other
                                            Cleaning Service </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-blog-item wow fadeInDown" data-wow-delay=".2s">
                            <div class="single-blog">
                                <a href="blog_details.html" class="blog-thumb">
                                    <img src="assets/img/blog/b2.jpg" alt="">
                                </a>
                                <div class="blog-contents">
                                    <ul class="tags">
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-clock"></i> 19 Feb 2022
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"> <i class="las la-tag"></i> Electrical </a>
                                        </li>
                                    </ul>
                                    <h4 class="common-title-two"> <a href="blog_details.html"> Electric & Renovation
                                            Service </a> </h4>
                                    <p class="common-para"> It is a long established fact that a reader will be
                                        distracted by the readable </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-area">
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
                                <p class="footer-para">It is a long established fact that a reader will be distracted
                                    by the readable content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <h6 class="widget-title">Contact Info</h6>
                            <div class="footer-inner">
                                <ul class="footer-link-address">
                                    <li class="list"><span class="address"> <i class="las la-map-marker-alt"></i>
                                            41/1, Hilton Mall, NY City New York </span></li>
                                    <li class="list"> <span class="address"> <a href="tel:+012-78901234"> <i
                                                    class="las la-mobile-alt"></i> +012-78901234</a> </span></li>
                                    <li class="list"> <span class="address"> <a
                                                href="https://bytesed.com/cdn-cgi/l/email-protection#deb6bbb2ae9eb3bfb7b2f0bdb1b3">
                                                <i class="las la-envelope"></i> <span class="__cf_email__"
                                                    data-cfemail="c3aba6afb383aea2aaafeda0acae">[email&#160;protected]</span></a>
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
                                                Is for the All About the Memories. </a>
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
                                                class="las la-paper-plane"></i> </button>
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

<!-- Mirrored from bytesed.com/tf/qixer/qixer_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 16:22:32 GMT -->

</html>
