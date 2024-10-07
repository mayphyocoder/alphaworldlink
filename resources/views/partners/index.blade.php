@extends('layouts.app')
@section('title', 'Our Partners')
@section('content')

    <section class="visa-area" style="background-image: url({{ asset('assets/images/shape/shape-1.png') }})">
        <div class="container">
            <div class="sec-title text-center">
                <h3>OUR PARTNERS</h3>
                <h2>Our Value <span>Partners</span></h2>
            </div>
            <div class="row">
                @foreach ($partners as $key => $partner)
                    <div class="col-md-3">
                        <div class="img-holder">
                            <div class="inner">
                                <img data-enlargeable="" src="{{ $partner->company_logo ?? '' }}" alt=""
                                    style="width: 100%; height: 130px; background-size: center; object-fit: cover;">
                            </div>
                        </div>
                        <div class="text-holder" style="background-color: #2d2f93;">
                            <p style="font-size: 15px; color: white; text-align: center">
                                {{ $partner->company ?? '' }}
                                <br>
                                {{ $partner->city ?? '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
