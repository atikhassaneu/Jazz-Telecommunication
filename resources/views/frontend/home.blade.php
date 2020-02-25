@extends('frontend.layout.master_layout')
@section('title','Welcome to JazzVoice')
@section('home-active','active')
@section('content')

    <!--====== Home Top slider Start======-->
    <section id="slider" class="owl-carousel owl-theme home-top-slider">
        @foreach($sliders as $slide)
        <div class="slider-content">
            <img src="{{asset("uploads/slider/".$slide->img_slug)}}">
        </div>
        @endforeach

    </section>
    <!--====== Home Top slider End ======-->

    <!--====== Market Project area Start ======-->
    <section class="services-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="project-title">
                        <h2><span>Our</span> Services</h2>
{{--                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac <br />turpis egestas. Maecenas volutpat placerat.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">



                    <div class="col-lg-4 col-md-4">
                        <div class="services-single-box wow fadeInLeft animated">
                            <div class="services-icon">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <h4>Premium Voice</h4>
                            <p>Ultimate solution for operators whose retail subscribers demand the premier quality and superior features (such as CLI) with competitive market rates.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="services-single-box wow fadeInLeft animated">
                            <div class="services-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h4>Standard Voice</h4>
                            <p>For A-Z Countries is designed for network operators whose retail subscribers expect high QoS at competitive market rates.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="services-single-box wow fadeInLeft animated">
                            <div class="services-icon">
                                <i class="fa fa-american-sign-language-interpreting"></i>
                            </div>
                            <h4>Wholesale Voice</h4>
                            <p>For the retailers or carriers who carry only retail calls, JAZZ Communications provides routes which are efficient to cater and terminate them to the routes known as Retail Routes.</p>
                        </div>
                    </div>


            </div>
        </div>
    </section>
    <!--====== Market Project area End ======-->

    <!--====== Counter Area Start ======-->
    <section class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-single-box text-center">
                        <i class="fa fa-desktop"></i>
                        <p>Projects <span>Done</span></p>
                        <h2 class="counter">300</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-single-box text-center">
                        <i class="fa fa-smile-o"></i>
                        <p>Happy<span>Clients</span></p>
                        <h2 class="counter">200</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-single-box text-center">
                        <i class="fa fa-users"></i>
                        <p>Empl<span>oyees</span></p>
                        <h2 class="counter">450</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter-single-box text-center">
                        <i class="fa fa-trophy"></i>
                        <p>Awa<span>rds</span></p>
                        <h2 class="counter">150</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Counter Area End ======-->

    <!--====== Mission Area Start ======-->
    <section class="mission-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mission-content">
                        <h2 style="color: #005dac;">Our mission</h2>
                        <p style="text-align: justify;">The mission of , JAZZ Communications is to provide the community with the most innovative, state-of-the-art, and comprehensive communications, information technology, and software system solutions through a highly motivated, creative, experienced and talented team of professionals contributing to the success of , JAZZ Communications itself and satisfaction of the industries and customers we serve. </p>

                    </div>
                </div>
                <div class="col-lg-6 pl-5">
                    <i style="font-size: 170px; padding-top: 30px;padding-left: 30px; color: #005dac;" class="fa fa-line-chart"></i>
                </div>
            </div>
        </div>
    </section>
    <!--====== Mission Area End ======-->

    <!--====== Company Logo Area Start ======-->
    {{--<div class="company-logo-area">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="logo-carousel owl-carousel owl-theme" id="client-logo">--}}
                    {{--<div class="item">--}}
                        {{--<div class="com-logo-info">--}}
                            {{--<a href="#"><img src="{{asset('frontend/img/client-logo.png')}}" alt="client-logo"></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!--====== Company Logo Area End ======-->

@stop
