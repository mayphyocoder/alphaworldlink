<div class="single-sidebar wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1200ms">
    <div class="title">
        <h3>Recent News</h3>
    </div>
    <ul class="recent-posts">
        @foreach ($recents_news as $recents_new)
            <li>
                <div class="img-box">
                    <img src="{{ $recents_new->photo }}" alt="post-thumb">
                    <div class="overlay-content">
                        <a href="{{ route('news.show', $recents_new->id) }}">
                            <i class="fa fa-link" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="title-box">
                    <h4>
                        <a href="{{ route('news.show', $recents_new->id) }}">{{ $recents_new->title_eng ?? '' }}</a>
                    </h4>
                    <p>
                        {{ Str::limit($recents_new->description_eng, 50) }}
                    </p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
