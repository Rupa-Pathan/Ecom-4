@extends('frontend.master')

@section('content')
<section class="banner-19">
        <div class="banner-layer">
            <video autoplay muted loop id="myVideo">
                <source src="assets/videos/video.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                        <h4>Laundry & Dry Cleaning Services</h4>
                        <p class="mt-3">Irferendis repudandae fugia rchitecto beatae rederit svitae recusa ndae
                            debitifacere uiimi placeat maxienui </p>
                        <a href="about.html" class="btn btn-style mt-md-5 mt-4">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- banner bottom section -->
    <section class="w3l-bottom-grids-6 py-5">
        <div class="container pt-lg-5 pt-md-4 pt-2">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="area-box">
                        <i class="fas fa-stopwatch-20"></i>
                        <h4><a href="about.html" class="title-head">Save Time and Money</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed et dolor amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-comments-dollar"></i>
                        <h4><a href="about.html" class="title-head">Pay Online in Seconds</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-thumbs-up"></i>
                        <h4><a href="about.html" class="title-head">Satisfaction Guarantee</a></h4>
                        <p class="">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis
                            sed dolor et amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner bottom section -->

    <!-- about section -->
    <section class="w3l-about-2 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row justify-content-between align-items-center pb-lg-5">
                <div class="col-lg-6 about-2-secs-right mb-lg-0 mb-5">
                    <div class="image-box inverse position-relative">
                        <div class="image-box__static">
                            <img src="{{asset('frontend/assets/images/about1.jpg')}}" alt="" width="364" height="459">
                        </div>
                        <div class="image-box__float">
                            <img src="{{asset('frontend/assets/images/about2.jpg')}}" alt="" width="364" height="459">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-2-secs-left ps-lg-5 mt-lg-4 mt-5">
                    <h5 class="sub-title">More than 25 Years of Experience</h5>
                    <h3 class="title-style">We are passionate about Laundry</h3>
                    <p class="mt-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum
                        deleniti similique sunt in culpa qui officia</p>
                    <ul class="mt-4 list-style-lis">
                        <li><i class="fas fa-check-circle"></i>100% Customer Satisfaction</li>
                        <li><i class="fas fa-check-circle"></i>Free Collection & Delivery</li>
                        <li><i class="fas fa-check-circle"></i>Affordable Prices</li>
                    </ul>
                    <a href="about.html" class="btn btn-style mt-5">Discover More</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('service')
<div class="w3l-grids-block-5 pb-5 pt-md-2 pt-4">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h5 class="sub-title">What We Offer</h5>
                <h3 class="title-style">Our Services</h3>
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="servicecard-single">
                        <div class="grids5-info position-relative">
                            <img src="{{asset('frontend/assets/images/service1.jpg')}}" alt="" class="img-fluid" />
                        </div>
                        <div class="content-main-top">
                            <h4><a href="services.html">Laundry Services</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna.
                            </p>
                            <a class="btn btn-style mt-4" href="services.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="servicecard-single">
                        <div class="grids5-info position-relative">
                            <img src="{{asset('frontend/assets/images/service2.jpg')}}" alt="" class="img-fluid" />
                        </div>
                        <div class="content-main-top">
                            <h4><a href="services.html">Dry Cleaning</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna.
                            </p>
                            <a class="btn btn-style mt-4" href="services.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="servicecard-single">
                        <div class="grids5-info position-relative">
                            <img src="{{asset('frontend/assets/images/service3.jpg')}}" alt="" class="img-fluid" />
                        </div>
                        <div class="content-main-top">
                            <h4><a href="services.html">Steam Iron</a></h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua labore et dolore magna.
                            </p>
                            <a class="btn btn-style mt-4" href="services.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services section -->

    <!-- image with content section -->
    <section class="home-block-3 py-xl-4 py-2">
        <div class="row m-0 align-items-center">
            <div class="col-lg-6 left-w3l-img p-0">
                <img src="{{asset('frontend/assets/images/about3.jpg')}}" alt="card-image" class="img-fluid">
            </div>
            <div class="col-lg-6 right-w3l-img mt-lg-0 mt-sm-4 mt-5">
                <div class="p-xl-5 p-sm-4 mx-xl-3">
                    <h5 class="sub-title">Get 30% Discount</h5>
                    <h3 class="title-style">Book Our Laundry Services</h3>
                    <p class="sub-title mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices inligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetures
                        adipisicing elit.</p>
                    <div class="row mt-5 pt-xl-4">
                        <div class="col-sm-6 icon-style">
                            <i class="fas fa-tshirt"></i>
                            <div class="ab-detail">
                                <h4 class="title-head mb-sm-3 mb-2"><a href="services.html">Clean Result</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 icon-style mt-sm-0 mt-4">
                            <i class="fas fa-shipping-fast"></i>
                            <div class="ab-detail">
                                <h4 class="title-head mb-sm-3 mb-2"><a href="services.html">Fast Delivery</a></h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
    
