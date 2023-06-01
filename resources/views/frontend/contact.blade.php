@extends('frontend.layouts.main')

@section('main-container')

    <!--header breadcrumb start-->
    <div class="header-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-bread-cont text-center">
                        <h2>Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="https://demos.devsnest.net/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

    <!--contact page wrap start-->
    <div class="contact-page-wrap px-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-maps-info">
                        <div class="row gy-4">
                            <div class="col-md-8">
                                <div class="mapouter h-100">
                                    <div class="gmap_canvas h-100">
                                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=141%20Leavesden%20road,watofrd&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="single-info-contct">
                                        <h3>Main Office</h3>
                                        <p>141 Leavesden road, Watford, WD24 5EP</p>
                                    </div><!--/.single-info-contct-->
                                    <div class="single-info-contct">
                                        <h3>Call Us Directly</h3>
                                        <p><a href="tel:12346">+(44) 1234567890</a>
                                            <a href="tel:123466">+(44) 1234567890</a> 
                                            </p>
                                    </div><!--/.single-info-contct-->
                                    <div class="single-info-contct">
                                        <h3>Opening Hours</h3>
                                        <p>Monday – Friday: 8:30am – 6pm
                                            Saturday: 10am – 2pm</p>
                                    </div><!--/.single-info-contct-->
                                </div>
                            </div>
                        </div>
                    </div><!--/.top-maps-info-->
                </div>
                <div class="col-12">
                    <div class="contact-page-form-wrap mt-120">
                        <div class="row gy-4">
                        <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="sec-title">
                                    <h4><img src="img/icon/title-icon.svg" data-aos="flip-left" data-aos-duration="1500" alt=""> Contact Us</h4>
                                    <h2>Get In Touch</h2>
                                </div>
                                <div class="from-inner-pg">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn1">Send Now</button>
                                        </div>
                                    </div>
                                </div><!--/.from-inner-pg-->
                            </div>
                            <div class="col-lg-2"></div>
                            <!-- <div class="col-lg-4">
                                <div class="right-content-contact-pg">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                          <button class="nav-link active" id="brandInfo_id-tab" data-bs-toggle="tab" data-bs-target="#brandInfo_id" type="button" role="tab" aria-controls="brandInfo_id" aria-selected="true">Brand Info</button>
                                          <button class="nav-link" id="eventInfo_id-tab" data-bs-toggle="tab" data-bs-target="#eventInfo_id" type="button" role="tab" aria-controls="eventInfo_id" aria-selected="false">Event Info</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="brandInfo_id" role="tabpanel" aria-labelledby="brandInfo_id-tab">
                                            <div class="inner">
                                                <div class="icon">
                                                    <img src="img/logo-brand.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <h4>Brand Info</h4>
                                                    <div class="info-txt">
                                                        <div class="d-flex ">
                                                            <span>Name:</span>
                                                            <h5>Innevent</h5>
                                                        </div>
                                                        <div class="d-flex ">
                                                            <span>Phone:</span>
                                                            <h5>+(256) 2597 2456</h5>
                                                        </div>
                                                        <div class="d-flex ">
                                                            <span>Email:</span>
                                                            <h5>info@evona.com</h5>
                                                        </div>
                                                        <div class="d-flex ">
                                                            <span>Location:</span>
                                                            <h5>27 NW New Vexmont, Portland Oregon 97209</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eventInfo_id" role="tabpanel" aria-labelledby="eventInfo_id-tab">
                                            <div class="inner">
                                                <div class="icon">
                                                    <img src="img/logo-brand.png" alt="">
                                                </div>
                                                <div class="info">
                                                    <h4>Event Info</h4>
                                                    <div class="info-txt">
                                                        <div class="d-flex ">
                                                            <span>Name:</span>
                                                            <h5>Innevent</h5>
                                                        </div>
                                                        <div class="d-flex ">
                                                            <span>Phone:</span>
                                                            <h5>+(256) 2597 2456</h5>
                                                        </div>
                                                        <div class="d-flex ">
                                                            <span>Email:</span>
                                                            <h5>info@evona.com</h5>
                                                        </div>
                                                        <div class="d-flex ">
                                                            <span>Location:</span>
                                                            <h5>27 NW New Vexmont, Portland Oregon 97209</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.right-content-contact-pg-->
                            </div> -->
                        </div>
                    </div><!--/.contact-page-form-wrap-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--contact page wrap end-->
    @endsection