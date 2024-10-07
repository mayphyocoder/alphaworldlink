@extends('layouts.app')
@section('title', 'Activities')
@section('content')
    <section class="blog-area bg-color" style="background-image: url({{ asset('assets/images/shape/shape-1.png') }})">
        <div class="container">
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
                                            <img title="Green Palace Oasis" data-enlargeable="" src="{{ $photo }}"
                                                alt="Image"
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
@section('script')
@endsection
