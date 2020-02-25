@extends('frontend.layout.master_layout')
@section('title','Services')
@section('service-active','active')
@section('content')
    <!-- Hero Area Start -->
    <section class="hero-area" style="background: url({{asset('frontend/img/service_bg.jpg')}});background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="hero-info">
                        {{--<h2>Services</h2>--}}
                        {{--<a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Services</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->


    <!-- Services Area Start -->
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

                @foreach($services as $service)

                    <div class="col-lg-4 col-md-4">
                        <div class="services-single-box wow fadeInLeft animated">
                            <div class="services-icon">
                                <i class="fa {{$service->icon}}"></i>
                            </div>
                            <h4>{{$service->title}}</h4>
                            <p>{{substr($service->description,1,190)}}</p>
                            <div style="text-align: right"><a href="{{route('service.show',$service->id)}}">Read more</a></div>
                        </div>

                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!--====== Services Section Area End ======-->

@stop
