@extends('frontend.layout.master_layout')
@section('title','Services')
@section('service-active','active')
@section('content')

    <!-- Services Area Start -->
    <section class="services-area py-5">
        <div class="container">

                    <div class="col-lg-8 col-md-8 mx-auto">
                        <div class="services-single-box wow fadeInLeft animated">
                            <div class="services-icon">
                                <i class="fa {{$service->icon}}"></i>
                            </div>
                            <h4>{{$service->title}}</h4>
                            <p>{{$service->description}}</p>

                        </div>

                    </div>

            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!--====== Services Section Area End ======-->

@stop
