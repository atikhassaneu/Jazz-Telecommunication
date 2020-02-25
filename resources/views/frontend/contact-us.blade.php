@extends('frontend.layout.master_layout')
@section('title','Contact Us')
@section('contact-active','active')
@section('content')
    <!-- Hero Area Start -->
    <section class="hero-area" style="background: url({{asset('frontend/img/contactUs_bg.jpg')}});background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="hero-info">
                        {{--<h2>Contact Us</h2>--}}
                        {{--<a href="{{route('index')}}">Home <i class="fa fa-angle-right"></i></a><span>Contact Us</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->


    <!-- Our Contact Area Start -->
    <section class="our-contact-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="project-title">
                        <h2><span>Contact </span>us</h2>
{{--                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac <br />turpis egestas. Maecenas volutpat placerat.</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-address-bar">
                        <i class="fa fa-phone"></i>
                        <div class="contact-text">
                            <h5>Phone</h5>
                            <p>+852 5803 1534</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-address-bar">
                        <i class="fa fa-envelope"></i>
                        <div class="contact-text">
                            <h5>Email</h5>
                            <p>info@jazzcomms.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-address-bar">
                        <i class="fa fa-globe"></i>
                        <div class="contact-text">
                            <h5>Website</h5>
                            <p>www.jazzcomms.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-address-bar">
                        <i class="fa fa-map-marker"></i>
                        <div class="contact-text">
                            <h5>Our Location</h5>
                            <p>9th Floor, Amtel Building, 148 Des Voeux Road Central, Central, Hong Kong</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Contact-Us Area End -->


    <!-- Contact-message Area Start -->
    <div class="contact-message pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form id="contact-form" action="{{route('contact.store')}}" class="form-group" method="post">
                            @csrf
                            <span style="color: red; padding: 5px 0px" class="err-name"></span><input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                            <span style="color: red; padding: 5px 0px" class="err-email"></span><input type="email" id="email" name="email" class="form-control" placeholder="Your E-mail">
                            <span style="color: red; padding: 5px 0px" class="err-message"></span><textarea name="message" id="message" placeholder="Write your message" class="form-control" rows="5"></textarea>
                            <button class="contact-btn message-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7897794489722!2d90.36391771409943!3d23.754874784587166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5090f6c15f%3A0x3407adee0220040a!2z4KaF4KeN4Kav4Ka-4Kaf4KeL4Kat4Ka-IOCmn-Cnh-CmleCmqOCni-CmsuCmnOCmvw!5e0!3m2!1sbn!2sbd!4v1556806327368!5m2!1sbn!2sbd"  width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Contact-message Area End -->

    <!--====== Services Section Area End ======-->


@stop

@push('js')
    <script>
        var isNameError = false;
        var isEmailError = false;
        var isMsgError = false;
        $(document).ready(function () {
            $('#name').keyup(function () {
                checkName();
            });

            $('#email').keyup(function () {
                checkEmail();
            });
            $('#message').keyup(function () {
                checkMsg();
            });


            $("#contact-form").submit(function (e) {
                 isNameError = false;
                 isEmailError = false;
                 isMsgError = false;

                 checkName();
                 checkEmail();
                 checkMsg();

                 if(isNameError || isEmailError || isMsgError){
                     e.preventDefault();
                     return false;
                 }
            });

            function checkName(){
                if($('#name').val() == undefined || $('#name').val() == '' || $('#name').length == 0){
                    $('.err-name').html("Field is required")
                    isNameError = true;
                }else if($('#name').val().length <4 ){
                    $('.err-name').html("Length is greater than 3 character");
                    isNameError = true;
                }else{
                    $('.err-name').html("");
                    isNameError = false;
                }
            }

            function checkMsg(){
                if($('#message').val() == undefined || $('#message').val() == '' || $('#message').length == 0){
                    $('.err-message').html("Field is required")
                    isMsgError = true;
                }else{
                    $('.err-message').html("");
                    isMsgError = false;
                }
            }

            function checkEmail(){
                if($('#email').val() == undefined || $('#email').val() == '' || $('#email').length == 0){
                    $('.err-email').html("Field is required");
                     isEmailError= true;
                }else if (!validateEmail($('#email').val())){
                    $('.err-email').html("Invalid Email");
                    isEmailError= true;
                }
                else{
                    $('.err-email').html("");
                     isEmailError= false;
                }
            }



            function validateEmail(email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }
        });

    </script>
@endpush
