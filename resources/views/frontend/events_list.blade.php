@extends('frontend.layouts.main')

@section('main-container')

    <!--header breadcrumb start-->
    <div class="header-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-bread-cont text-center">
                        <h2>Event</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="https://demos.devsnest.net/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Event</li>
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

    <!--event schedule sec start-->
    <section class="event-schedule-sec light px-120">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12">
                    <div class="sec-title text-center">
                        <h4><img src="img/icon/title-icon.svg" data-aos="flip-left" data-aos-duration="1500" alt=""> Events Schedule</h4>
                        <h2>Program Events Schedule</h2>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="tab-content mt-3" id="myTabContent">
                        @foreach($events as $key => $event)
                        <div class="tab-pane fade show active" id="eventSchedule_tab{{$key}}" role="tabpanel" aria-labelledby="eventSchedule_tab{{$key}}-tab" style="margin-bottom: 20px;">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <div class="single-schedule-table">
                                        <div class="row gy-4 align-items-center">
                                            <div class="col-lg-3">
                                                <div class="ttl">
                                                    <h3><a href="{{ route('event_details', $event->id) }}">{{$event['title']}}</a></h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="tme">
                                                    <p><i class="fa-regular fa-clock"></i> {{$event['start_time']}} to {{$event['end_time']}}</p>
                                                    <p><i class="fa-solid fa-location-dot"></i> {{$event['post_code']}}, {{$event['city']}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="dts">
                                                    <p>{{$event['description']}}</p>
                                                    <div class="ovr">
                                                        <img src="img/event-host-img.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="imgs d-flex gap-3 justify-content-center">
                                                    <img src="img/event-host1.png" alt="">
                                                    <img src="img/event-host2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 text-end">
                                                <a href="{{ route('event_details', $event->id) }}" class="btn btn2">Details</a>
                                            </div>
                                        </div>
                                    </div><!--/.single-schedule-table-->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!--/.tab-content -->
                </div>
            </div>
        </div><!--/.container-->
        <img src="img/schedule-shape-2.png" class="shepe-left-schdl" alt="">
        <img src="img/schedule-shape-2.png" class="shepe-left-schd2" alt="">
    </section>
    <!--event schedule sec end-->

    @endsection