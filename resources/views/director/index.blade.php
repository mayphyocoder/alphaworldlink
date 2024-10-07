@extends('layouts.app')
@section('title', 'Director Message')
@section('content')
    <section class="job-information-area py-5"
        style="background-image:url({{ asset('assets/images/pattern/consultant-box-bg.png') }})">
        <div class="container col-md-offset-2">
            <div class="job-information">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>Director Message</h3>
                            <h2><span>Alpha World Link Co.,Ltd</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="who-we-are-img">
                            <img src="{{ asset('data/md.png') }}" alt="Image"
                                style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #458cd2; padding: 5px;">
                            <center>
                                <div class="blog-content" style="background-color: #6fd654; padding: 20px;">
                                    <span style="color: white">
                                        Daw
                                    </span>
                                    <br>
                                    <span style="color: white">
                                        Managing Director
                                    </span>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="who-we-are-content">
                            <h2 style="text-shadow: 2px 2px gray; color: #1d3fd9;">
                                MD’S MESSAGE
                            </h2>
                            <p style="text-align: justify">
                                In the current process of widespread globalization, we in Green Palace Oasis Co.,Ltd
                                understand that meeting our customer's requirement is essential to the success of our
                                organization.
                                <br><br>

                                Our professional activities and strategic principles of recruitment is mainly to supply
                                Myanmar workers, for those candidates with their qualification and relative experience in
                                search of Skill Workers, Training Workers, Technicians and Other Professionals to the Middle
                                East such as: <b style="color: blue;">Malaysia</b>. The
                                numbers of
                                workers we supplied to demanded countries, average numbers in yearly are at least
                                <b style="color: blue;">1000</b>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@section('script')
@endsection
