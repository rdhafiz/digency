@extends('layouts.app')
@section('title', 'Creative Digital Agency Template')
    @section('content')
        <!--home-slider start-->
        <div class="home-slider" id="home">
            <div class="slider-wrap owl-carousel owl-theme">
                <!--each slider-->
                <div class="slider-item text-center position-relative overlay"
                     style="background-image: url({{asset('./images/home/bg1.jpg')}})">
                    <div class="slider-content">
                        <div class="overflow-hidden d-inline-block">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <h1 class="animate__animated animate__fadeInRight">We Are Creative Digital Agency!</h1>
                                    <p class="animate__animated animate__fadeInUp">We are a passionate digital design agency
                                        that specializes in beautiful and easy-to-use digital design &amp; web development
                                        services.</p>
                                    <a href="javascript:void(0)" class="btn mt-30 btn-theme">
                                        <span>Get started</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--each slider-->

                <!--each slider-->
                <div class="slider-item text-center position-relative overlay"
                     style="background-image: url({{asset('./images/home/bg2.jpg')}})">
                    <div class="slider-content">
                        <div class="overflow-hidden d-inline-block">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <h1 class="animate__animated animate__fadeInRight">We Are Creative Digital Agency!</h1>
                                    <p class="animate__animated animate__fadeInUp">We are a passionate digital design agency
                                        that specializes in beautiful and easy-to-use digital design &amp; web development
                                        services.</p>
                                    <a href="javascript:void(0)" class="btn mt-30 btn-theme">
                                        <span>Get started</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--each slider-->

                <!--each slider-->
                <div class="slider-item text-center position-relative overlay"
                     style="background-image: url({{asset('./images/home/bg1.jpg')}})">
                    <div class="slider-content">
                        <div class="overflow-hidden d-inline-block">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <h1 class="animate__animated animate__fadeInRight">We Are Creative Digital Agency!</h1>
                                    <p class="animate__animated animate__fadeInUp">We are a passionate digital design agency
                                        that specializes in beautiful and easy-to-use digital design &amp; web development
                                        services.</p>
                                    <a href="javascript:void(0)" class="btn mt-30 btn-theme">
                                        <span>Get started</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--each slider-->

            </div>
        </div>
        <!--home-slider end  -->

        <script src="{{asset('./js/plugins/owl.carousel.min.js')}}"></script>
        <script src="{{asset('./js/homepage.js')}}"></script>

    @endsection


