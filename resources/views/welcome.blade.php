@extends('layouts.app')
@section('title', 'Home')
@section('content')

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


    <section class="visa-style2-area">
        <div class="container">
            <div class="sec-title text-center">
                <h3>Why Choose Us</h3>
                <h2>
                    Alpha World Link Co.,Ltd
                    <br>
                    <span>
                        Oversea Employment Agency
                    </span>
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="theme-carousel visa-carousel owl-carousel owl-theme owl-dot-style1"
                        data-options='{"loop":true, "margin":30, "autoheight":true, "nav":false, "dots":true, "autoplay":true, "stagePadding":0, "autoplayTimeout":10000, "smartSpeed":700, "responsive":{ "0":{"items": "1"}, "500":{"items": "1"}, "767":{"items": "2"}, "1199":{"items": "4"}, "1600":{"items": "4"} }}'>
                        <!--Start Single Visa Box Style2-->
                        <div class="single-visa-box-style2">
                            <div class="icon-holder"><span class="flaticon-technology thm-clr"></span></div>
                            <div class="text-holder">
                                <h3>Collaborative</h3>
                                <p>To cooperate and support each other by sharing ideas and listening. In order to
                                    create and expand success.
                                </p>
                                <br><br>
                            </div>
                        </div>
                        <!--End Single Visa Box-->
                        <!--Start Single Visa Box Style2-->
                        <div class="single-visa-box-style2">
                            <div class="icon-holder"><span class="flaticon-business-1 thm-clr"></span></div>
                            <div class="text-holder">
                                <h3>Can-Do Attitude</h3>
                                <p>Using a positive and “Can-Do” attitude to seize the moment and realize the
                                    opportunity. Think of obstacles as challenges then strive for success.</p>
                            </div>
                        </div>
                        <!--End Single Visa Box-->
                        <!--Start Single Visa Box Style2-->
                        <div class="single-visa-box-style2">
                            <div class="icon-holder"><span class="flaticon-electronics thm-clr"></span></div>
                            <div class="text-holder">
                                <h3>Learning and Development</h3>
                                <p>Open mind to learn new things. Continuous self improvement with modern knowledge
                                    and skill set.</p>
                                <br>
                            </div>
                        </div>
                        <!--End Single Visa Box-->
                        <!--Start Single Visa Box Style2-->
                        <div class="single-visa-box-style2">
                            <div class="icon-holder"><span class="flaticon-profession thm-clr"></span></div>
                            <div class="text-holder">
                                <h3>Customer Centric</h3>
                                <p>Being service minded. Emphasizing and adhering to the customer’s success is the first
                                    priority.</p>
                                <br><br>
                            </div>
                        </div>
                        <!--End Single Visa Box-->

                        <!--Start Single Visa Box Style2-->
                        <div class="single-visa-box-style2">
                            <div class="icon-holder"><span class="flaticon-technology thm-clr"></span></div>
                            <div class="text-holder">
                                <h3>Accountability</h3>
                                <p>Have responsibility and good conscience with awareness of the organization’s overall
                                    results with honesty and ethical standards.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--Start Slogan Area-->
        <div class="slogan-area style2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slogan-content wow slideInUp" data-wow-delay="100ms"
                            style="background-image: url({{ asset('assets/images/pattern/slogan-content-bg.jpg') }})">
                            <div class="left">
                                <div class="icon">
                                    <span class="flaticon-technology thm-clr"></span>
                                </div>
                                <div class="title">
                                    <p>JOIN US FOR MORE UPDATE</p>
                                    <h3 style="font-size: 16px;">
                                        Let's work with us to choose honest and hardworking candidates(staffs) for the right
                                        jobs.
                                    </h3>
                                </div>
                            </div>
                            <div class="right">
                                <div class="btns-box">
                                    <a class="btn-one style2" href="{{ route('contact.index') }}">
                                        <span class="txt">
                                            Contact Us
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Slogan Area-->
    </section>


    <section class="blog-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <h3>OUR NEWS</h3>
                <h2>Articles From Resources<br> <span>And Latest News.</span></h2>
            </div>
            <div class="row">
                @foreach ($news as $key => $new)
                    @if ($key == 3)
                        @php
                            break;
                        @endphp
                    @endif
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style1 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ $new->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 220px; background-size: center; object-fit: cover;">
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li>
                                        <span class="flaticon-user thm-clr"></span>
                                        <a href="{{ route('news.show', $new->id) }}">
                                            {{ $new->author ?? '' }}
                                        </a>
                                    </li>
                                    <li>
                                        <span class="flaticon-conversation thm-clr"></span>
                                        <a href="{{ route('news.show', $new->id) }}">
                                            Alpha World Link Co.,Ltd
                                        </a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ route('news.show', $new->id) }}">
                                        {{ $new->title_eng ?? '' }}
                                    </a>
                                </h3>
                                <p class="text-black py-2">
                                    {{ Str::limit($new->description_eng, 50) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-color" style="background-image: url({{ asset('assets/images/shape/shape-1.png') }})">
        <div class="container">
            <div class="sec-title text-center">
                <h3 style="font-size: 28px;">Activities</h3>
            </div>
            <div class="row">
                @foreach ($activities as $activitie)
                    <div class="col-md-12">
                        <div class="heading-line-bottom">
                            <h4 class="heading-title" style="text-shadow: 1px 2px gray; color:black;">
                                {{ $activitie->title }}
                            </h4>
                            <p>
                                {{ $activitie->description }}
                            </p>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            @php
                                $values = explode(',', $activitie->photo);
                            @endphp
                            @foreach ($values as $photo)
                                <div class="col-lg-3 col-md-3 col-sm-12" style="padding: 10px;">
                                    <div class="single-blog-post" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                        <div class="blog-img">
                                            <img title="Green Palace Oasis" data-enlargeable=""
                                                src="{{ $photo }}" alt="Image"
                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #336A38; padding: 5px;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
