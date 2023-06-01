@extends('frontend.layouts.main')

@section('main-container')

    <!--header breadcrumb start-->
    <div class="header-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-bread-cont text-center">
                        <h2>Event Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="https://demos.devsnest.net/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Event Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
        <img src="img/testimonial-circle-shape.svg" class="shape-one-top" alt="">
        <img src="img/testimonial-circle-shape.svg" class="shape-one-right" alt="">
    </div>
    <!--header breadcrumb end-->

    <!--event details page start-->
    <section class="event-details-pg px-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="event-details-banner">
                        <div class="e-details-slider-js swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="img/event-details1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/event-details1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/event-details1.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-dot"></div>
                        </div><!--/.e-details-slider-js-->
                        <div class="event-dts-places">
                            <div class="row gy-5">
                                <div class="col-lg-8">
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <div class="icon">
                                                <img src="img/icon/event-details-1.svg" alt="">
                                            </div>
                                            <p>Date Conference</p>
                                            <h4>{{$event['date']}}</h4>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="img/icon/event-details-2.svg" alt="">
                                            </div>
                                            <p>Location</p>
                                            <h4>{{$event['city']}}, {{$event['post_code']}}</h4>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="img/icon/event-details-2.svg" alt="">
                                            </div>
                                            <p>Charges</p>
                                            <h4>${{$event['fee']}}</h4>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="event-maps-wrap">
                                        <iframe src="https://maps.google.com/maps?width=720&amp;height=550&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-50 d-flex flex-wrap align-items-center">
                            
                            </div>
                        </div><!--/,.event-dts-places-->
                    </div><!--/.event-details-banner-->
                    <div class="event-details-txt">
                        <h2>{{$event['title']}}</h2>
                        <p>{{$event['description']}}</p>
                    </div>
                    <div class="event-details-imgs d-flex flex-wrap gap-3 align-items-center">
                        <img src="img/event-details-2.jpg" alt="">
                        <img src="img/event-details-3.jpg" alt="">
                        <img src="img/event-details-4.jpg" alt="">
                    </div>
                    <form class="pt-3" method="POST" action="{{ route('payment') }}">
                                <input type="hidden" name="event_id" value="{{$event->id}}" />
                                @csrf
                                <div class="row">
                                    <div class="form-group" style="">
                                        <input type="number" name="numebr_of_seats" maxlength='5' minlenght="0" required class="form-control form-control-lg" placeholder="Enter Number of Seats">
                                        @if ($errors->has('numebr_of_seats'))
                                            <span class="text-danger">{{ $errors->first('numebr_of_seats') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn2">Buy Tickets</button>
                                    </div>
                                </div>
                            </form>
                    
                    
                </div>
            </div>
        </div><!--/.container-->
    </section>
    <!--event details page end-->

    @endsection