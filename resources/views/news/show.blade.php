@extends('layouts.app')
@section('title', 'News')
@section('content')
    <section class="blog-area blog-single-area">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                    <div class="blog-post">
                        <div class="single-blog-style1 style1instyle3">
                            <div class="img-holder">
                                <div class="">
                                    <img src="{{ $details->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 350px; background-size: center; object-fit: cover;">
                                </div>
                            </div>
                            <div class="text-holder">
                                <ul class="meta-info">
                                    <li>
                                        <span class="flaticon-user thm-clr"></span>
                                        <a href="#">By {{ $details->author ?? '' }}</a>
                                    </li>
                                </ul>
                                <h3>{{ $details->title_eng ?? '' }}</h3>
                                <div class="text">
                                    <p>
                                        {{ $details->description_eng }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start sidebar Wrapper-->
                <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12">
                    <div class="sidebar-wrapper">
                        @include('news.recents_news')
                        @include('layouts.shared.quick_links')
                    </div>
                </div>
                <!--End Sidebar Wrapper-->
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
