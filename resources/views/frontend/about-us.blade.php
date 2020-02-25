@extends('frontend.layout.master_layout')
@section('title','About Us')
@section('about-active','active')
@section('content')
    <!--====== About Section Area Start ======-->
    <div class="about-section-area">
        <!-- Hero Area Start -->
        <section class="hero-area" style="background: url({{asset('frontend/img/aboutUs_bg.jpg')}});background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="hero-info">
                            {{--<h2>About Us</h2>--}}
                            {{--<a href="index.html">Home <i class="fa fa-angle-right"></i></a><span>About us</span>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Area End -->

        <!-- About-us Area Start -->
        <section class="about-us-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="about-content">
                            <h5>About Us</h5>
                            <h2>History of the Company</h2>
                            <p style="text-align: justify">JAZZ Communications is a significant player in the International Wholesale Carrier business. We offer a reliable and high quality service to telecommunication providers. We not only work in partnership with telecommunication companies from all around the world acquiring interconnections and competitive routes from its global partners with the best terms and conditions, but also work with personal GSM-GOIP gateway owners around the world to have the direct voice terminations.  JAZZ Communications offers premium routing A-Z to carriers with our commitment to the highest standards of business conduct in dealing with distributors and consumers and to maximize profitability in their international voice operations. JAZZ Communications enables rapid direct IP interconnection of SIP services with a wide variety of gateways.  To maintain consistent standards of quality, our International Network Operation Center (NOC) monitors network quality 24 hours, 7 days a week to provide stable network performance for our global customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-us Area End -->

    </div>
    <!--====== About Section Area End ======-->

@stop
