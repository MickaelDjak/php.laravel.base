<div class="column">
    <div class="news-card-tag">
        <span class="label"><a href="#">Angular 2</a></span>
        <span class="label"><a href="#">Angular 4</a></span>
    </div>
    <div class="card news-card">
        <a href="{{ route('event_page') }}">
            <img src="https://i.imgur.com/6jMbuU1.jpg">
        </a>
        <div class="card-section">
            <div class="news-card-date">Sunday, 16th April</div>
            <article class="news-card-article">
                <h4 class="news-card-title">
                    <a href="{{ route('event_page') }}"> 5 Features To Watch Out For in Angular v4</a>
                </h4>
                <p class="news-card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae facere, ipsam quae sit, eaque perferendis commodi!...</p>
            </article>
            <div class="news-card-author">
                @include('blocks.author-data-short')
            </div>
        </div>
    </div>
</div>
