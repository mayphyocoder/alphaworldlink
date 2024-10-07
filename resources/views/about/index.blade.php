@extends('layouts.app')
@section('title', 'Company Profile')
@section('content')
    <section class="about-style1-area pdtop100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-style1-text-box pdtop0-r">
                        <div class="sec-title">
                            <h3>ABOUT COMPANY</h3>
                            <h2>
                                Alpha World Link Co.,Ltd
                                <br>
                                <span>
                                    Oversea Employment Agency
                                </span>
                            </h2>
                        </div>
                        <div class="inner-contant">
                            <div class="text">
                                <p style="text-align: justify">
                                    Alpha World Link Co.,Ltd is a leading Human Resource Recruitment firm based in Yangon,
                                    Myanmar. Having experience of ** years, we have grown over the years with a strong
                                    commitment, responsibility and transparency bound together by family values. We assist
                                    our candidates with sophisticated facilities and advance communication links.
                                </p>

                                <p style="text-align: justify">
                                    We believe in the concept of continual technical development. Our aim is to fully
                                    support employers whilst showcasing a job seekers skill, qualifications, and natural
                                    ability. Our ambition is to improve the quality of all workers lives and leading a
                                    better future.
                                </p>
                            </div>
                            <ul>
                                <li>To deliver the right jobs to the right people</li>
                                <li>To recruit, manage and retain the workforce using our outstanding knowledge</li>
                            </ul>
                            <div class="bottom-box">
                                <div class="left">
                                    <div class="button">
                                        <a class="btn-one" href="{{ route('contact.index') }}">
                                            <span class="txt">
                                                Contact Us
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="icon">
                                        <span class="flaticon-24-hours thm-clr"></span>
                                    </div>
                                    <div class="phone">
                                        <a href="tel:09 765 176 291">
                                            09 765 176 291
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style1-image-box clearfix">
                        <div class="image-box clearfix">
                            <div class="main-image">
                                <img src="{{ asset('data/about.jpeg') }}" alt="">
                            </div>
                            <div class="inner">
                                <img class="" src="{{ asset('data/w_map.png') }}" alt="Awesome Image">
                                <div class="icon" hidden>
                                    <span class="flaticon-people-1"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="whowe-are-area">
        <div class="layer-outer" style="background-image: url({{ asset('assets/images/shape/shape-2.png') }})"></div>
        <div class="container">
            <div class="sec-title text-center">
                <h3>WHO WE ARE</h3>
                <h2>OUR VISION MISSION & <span>SVALUES</span></h2>
            </div>
            <div class="row">
                <!--Start Single Featured Box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-featured-box text-center">
                        <div class="count-box">01</div>
                        <div class="inner-box">
                            <h3 style="color: white">
                                Our Vision
                            </h3>
                            <div class="border-box"></div>
                            <div class="text">
                                <p style="text-align: justify">
                                    To become the preferred source for employment and human resource services by maintaining
                                    our reputation as a trusted partner and a professional agency.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                        <div class="icon-holder">
                            <span class="flaticon-technology"></span>
                        </div>
                    </div>
                </div>
                <!--End Single Featured Box-->
                <!--Start Single Featured Box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-featured-box bg2 text-center">
                        <div class="count-box">02</div>
                        <div class="inner-box">
                            <h3>
                                Our Mission
                            </h3>
                            <div class="border-box"></div>
                            <div class="text">
                                <p style="text-align: justify">
                                    To connect great companies with great employees and opening up opportunities for both by
                                    partnering up with our clients.
                                    <br><br><br>
                                </p>
                            </div>
                        </div>
                        <div class="icon-holder">
                            <span class="flaticon-checking"></span>
                        </div>
                    </div>
                </div>
                <!--End Single Featured Box-->
                <!--Start Single Featured Box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-featured-box bg3 text-center">
                        <div class="count-box">03</div>
                        <div class="inner-box">
                            <h3 style="color: white">
                                Our Value
                            </h3>
                            <div class="border-box"></div>
                            <div class="text">
                                <p style="text-align: justify">
                                    We are a high performing organization dedicated to employment and human resource
                                    services by being a trusted partner and resource for our customers and our community.
                                </p>
                            </div>
                        </div>
                        <div class="icon-holder">
                            <span class="flaticon-people-1"></span>
                        </div>
                    </div>
                </div>
                <!--End Single Featured Box-->
            </div>
        </div>
    </section>


    <section class="choose-style2-area about-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="choose-content-box-style2">
                        <div class="sec-title">
                            <h3>Why Choose Us</h3>
                            <h2>
                                Alpha World Link Co.,Ltd
                                <br>
                                <span>
                                    Oversea Employment Agency
                                </span>
                            </h2>
                        </div>
                        <div class="inner-content clearfix">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-technology-1"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Collaborative</h3>
                                        <p>
                                            To cooperate and support each other by sharing ideas and listening. In order to
                                            create and expand success.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Can-Do Attitude</h3>
                                        <p>
                                            Using a positive and “Can-Do” attitude to seize the moment and realize the
                                            opportunity. Think of obstacles as challenges then strive for success.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-files"></span>
                                    </div>
                                    <div class="text">
                                        <h3>
                                            Learning and Development
                                        </h3>
                                        <p>
                                            Open mind to learn new things. Continuous self improvement with modern knowledge
                                            and skill set.
                                        </p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="video-holder-box style2" style="background-image: url({{ asset('data/why.png') }})">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
