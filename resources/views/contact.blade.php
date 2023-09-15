@extends('layouts.app')

@section('content')
    <div class="">
        <div class="banner-inner-area section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-inner-contents">
                            <ul class="inner-menu">
                                <li class="list"><a href="index.html"> Home </a></li>
                                <li class="list"> Contact </li>
                            </ul>
                            <h2 class="banner-inner-title"> Contact Us </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="contact-promo-area padding-top-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 margin-top-30">
                        <div class="single-contacts wow fadeInUp" data-wow-delay=".2s">
                            <div class="contact-icon">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="contacts-contents">
                                <h4 class="title"> Call Us </h4>
                                <div class="item-contents">
                                    <span class="item"> <a href="tel:412-723-5750"> 412-723-5750 </a> </span>
                                    <span class="item"> <a href="tel:978-488-6321"> 978-488-6321 </a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 margin-top-30">
                        <div class="single-contacts wow fadeInDown" data-wow-delay=".2s">
                            <div class="contact-icon">
                                <i class="las la-envelope"></i>
                            </div>
                            <div class="contacts-contents">
                                <h4 class="title"> Mail Address </h4>
                                <div class="item-contents">
                                    <span class="item"> <a
                                            href="https://bytesed.com/cdn-cgi/l/email-protection#df9cb0b1abbebcab9fb2beb6b3f1bcb0b2">
                                            <span class="__cf_email__"
                                                data-cfemail="4605292832272532062b272f2a6825292b">[email&#160;protected]</span>
                                        </a> </span>
                                    <span class="item"> <a
                                            href="https://bytesed.com/cdn-cgi/l/email-protection#6635131616091412260b070f0a4805090b">
                                            <span class="__cf_email__"
                                                data-cfemail="0a597f7a7a65787e4a676b636624696567">[email&#160;protected]</span>
                                        </a> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 margin-top-30">
                        <div class="single-contacts wow fadeInUp" data-wow-delay=".2s">
                            <div class="contact-icon">
                                <i class="las la-headset"></i>
                            </div>
                            <div class="contacts-contents">
                                <h4 class="title"> Support Time </h4>
                                <div class="item-contents">
                                    <span class="item"> 08.00am to 11.00pm </span>
                                    <span class="item"> Saturday to Thursday </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact-area padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-two">
                            <h3 class="title"> Get In Touch </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 padding-top-20">
                        <div class="details-comment-content">
                            <div class="comments-flex-item">
                                <div class="single-commetns">
                                    <label class="comment-label"> Your Name* </label>
                                    <input type="text" class="form--control" name="name" placeholder="Type Name">
                                </div>
                                <div class="single-commetns">
                                    <label class="comment-label"> Email Address* </label>
                                    <input type="text" class="form--control" name="email" placeholder="Type Email">
                                </div>
                            </div>
                            <div class="comments-flex-item">
                                <div class="single-commetns">
                                    <label class="comment-label"> Phone Number* </label>
                                    <input type="tel" class="form--control" name="phone" placeholder="Type Number">
                                </div>
                                <div class="single-commetns">
                                    <label class="comment-label"> Address* </label>
                                    <input type="text" class="form--control" name="email" placeholder="Type Address">
                                </div>
                            </div>
                            <div class="single-commetns">
                                <label class="comment-label"> Comments* </label>
                                <textarea name="message" class="form--control form--message" placeholder="Post Comments"></textarea>
                            </div>
                            <button type="submit"> Send Message </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
