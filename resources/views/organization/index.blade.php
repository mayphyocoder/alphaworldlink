@extends('layouts.app')
@section('title', 'Our Organization Chart')
@section('content')
    <section class="konnect-team py-5" style="background-image: url({{ asset('assets/images/shape/shape-1.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <h3>Our Organization Chart</h3>
                        <h2><span>Alpha World Link Co.,Ltd</span></h2>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="who-we-are-img">
                        <center>
                            <img src="https://www.insperity.com/wp-content/uploads/orgchart_successsionplan1200x630.png"
                                alt="Image">
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
