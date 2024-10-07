@extends('layouts.app')
@section('title', 'JOBS IN OVERSEAS')
@section('content')
    <section class="py-5" style="background-image: url({{ asset('assets/images/shape/shape-2.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="coaching-content-box">
                        <div class="sec-title">
                            <h2>JOBS IN OVERSEAS</h2>
                            <h3>Jobs Available In <span>{{ $country->country }}</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        @foreach ($jobs as $key => $job)
                            <div class="col-md-4 col-sm-12">
                                <a href="{{ route('cv.index') }}">
                                    <div class="alert alert-dismissible alert-primary">
                                        <strong>
                                            {{ $job->job_title ?? '' }}
                                        </strong>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
