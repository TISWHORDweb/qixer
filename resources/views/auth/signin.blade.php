@extends('templates.auth')


@section('content')
    <div class="banner-inner-area section-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-inner-contents">
                        <ul class="inner-menu">
                            <li class="list"><a href="index.html"> Home </a></li>
                            <li class="list">Sign Up</li>
                        </ul>
                        <h2 class="banner-inner-title"> Sign Up Page </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="signup-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="signup-wrapper">
                <div class="signup-contents">
                    <h3 class="signup-title"> Sign Up </h3>
                    <form class="signup-forms" action="#">
                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> User Name* </label>
                            <input class="form--control" type="text" name="name" placeholder="Type Name">
                        </div>
                        <div class="single-signup margin-top-30">
                            <label class="signup-label"> Password* </label>
                            <input class="form--control" type="password" name="Password" placeholder="Type Password">
                        </div>
                        <div class="signup-checkbox">
                            <div class="checkbox-inlines">
                                <input class="check-input" type="checkbox" id="check8">
                                <label class="checkbox-label" for="check8"> Remember me </label>
                            </div>
                            <div class="forgot-btn">
                                <a href="javascript:void(0)" class="forgot-pass"> Forgot Password </a>
                            </div>
                        </div>
                        <button type="submit"> Login Now </button>
                        <span class="bottom-register"> Don't have Account? <a class="resgister-link"
                                href="javascript:void(0)"> Register </a> </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
