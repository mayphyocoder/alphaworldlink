@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <section class="py-5" style="background-image: url({{ asset('assets/images/shape/shape-2.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="coaching-content-box">
                        <div class="sec-title">
                            <h2>Our Blog and News</h2>
                            <h3>FOLLOW OUR INFOMATIVE BLOG <span>ARTICLES</span></h3>
                        </div>
                    </div>
                </div>

                @foreach ($news as $new)
                    <div class="col-md-3 col-sm-6">
                        <article>
                            <div class="news-post">
                                <div class="img-box">
                                    <img src="{{ $new->photo }}" alt="" class="img-responsive img-fullwidth"
                                        style="width: 100%; height: 220px; background-size: center; object-fit: cover;">
                                </div>
                                <div class="post-content-text" style="background-color: #2d2f93; padding: 10px;">
                                    <ul class="blog_info">
                                        <li style="color: white;">
                                            <i class="fa fa-user"></i>
                                            {{ $new->author ?? '' }}
                                        </li>
                                    </ul>
                                    <h5 class="text-white">
                                        {{ $new->title_eng ?? '' }}
                                    </h5>
                                    <p class="text-black py-2">
                                        {{ Str::limit($new->description_eng, 50) }}
                                    </p>
                                    <a class="konnect-button" href="{{ route('news.show', $new->id) }}">
                                        read more
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
