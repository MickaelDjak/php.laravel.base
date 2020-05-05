<div class="podcast-card">
    <div class="row align-middle">
        <div class="small-12 medium-9 columns podcast-card--summary">
            <h4>
                <a href="{{ route('podcast_page') }}">
                    Honing its dynamic pricing formula, Vacasa wants to make homeowners more cash than Airbnb
                </a>
            </h4>

            @include('blocks.publish_type_and_date')

            <p class="article-elipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat longshoreman... </p>

            <a href="{{ route('podcast_page') }}" class="read-more">Слушать</a>
        </div>

        <div class="small-12 medium-3 columns ">
            <img src="{{asset('img/banners/podcast-0.png')}}">
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns podcast-card--meta">
            @include('blocks.author-data')
        </div>
    </div>
</div>
