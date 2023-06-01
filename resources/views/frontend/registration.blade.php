@extends('frontend.layouts.main')

@section('main-container')

    <!--header breadcrumb start-->
    <div class="header-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-bread-cont text-center">
                        <h2>Registration</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="https://demos.devsnest.net/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
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

    <!--registration page start-->
    <div class="registration-sec-pg overflow-hidden px-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-registration-frm">
                        <div class="sec-title text-center">
                            <h4><img src="img/icon/title-icon.svg" data-aos="flip-left" data-aos-duration="1500" alt=""> Our Registrations</h4>
                            <h2>Fill-up Your Information</h2>
                        </div>
                        <div class="registration-form-wrap">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" placeholder="First Name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Your Email" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" placeholder="Your Phone" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" placeholder="Passwor" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" placeholder="Confirm Passwor" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select">
                                        <option>Please Select Your Security Question</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Enter Your Answer" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="inlineradio1" name="gender" value="option1">
                                        <label class="form-check-label" for="inlineradio1">Male</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="inlineradio2" value="option2">
                                        <label class="form-check-label" for="inlineradio2">Female</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn1">Register Now</button>
                                </div>
                            </div>
                        </div>
                        <img src="img/registration-tob.png" class="left-bottom d-none d-md-block" alt="">
                        <img src="img/registration-illus.png" class="right-bottom d-none d-md-block" alt="">
                    </div><!--/.inner-registration-frm-->
                </div>
            </div>
        </div><!--/.container-->
    </div>
    <!--registration page end-->


    @endsection