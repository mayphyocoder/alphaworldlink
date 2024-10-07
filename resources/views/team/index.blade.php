@extends('layouts.app')
@section('title', 'Our Team')
@section('content')
    <section class="konnect-team py-5" style="background-image: url({{ asset('assets/images/shape/shape-1.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <h3>OUR Team</h3>
                        <h2>Team of <span>Alpha World Link Co.,Ltd</span></h2>
                    </div>
                </div>
                @foreach ($teams as $team)
                    <div class="col-md-3 col-sm-6 konnect-team-member">
                        <div class="text-center" style="background-color: #2d2f93;">
                            <img src="{{ $team->photo }}" alt="Royal Gate"
                                style="width: 100%; height: 230px; object-fit: cover; background-size: contain; background-position: top; object-position: center">
                            <br>
                            <p class="team-member-title" style="color: white;">
                                {{ $team->name }}
                                <br>
                                {{ $team->position }}
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
