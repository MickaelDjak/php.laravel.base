<div class="news-item">
    <div class="row align-middle">
        <div class="small-12 medium-3 columns ">
            <a href="{{ route('news_page') }}">
                <img src="https://volyn.com.ua/content/thumbs/750x500/q/iv/g2ywpg-cvm77xjc7st2xdnzc7qojl5dq7sblivq.jpg"  alt="news">
            </a>
        </div>

        <div class="small-12 medium-9 columns podcast-card--summary">
            <h4>
                <a href="{{ route('news_page') }}">
                    Honing its dynamic pricing formula, Vacasa wants to make homeowners more cash than Airbnb
                </a>
            </h4>

            @include('blocks.publish_type_and_date')

            <p class="article-elipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat longshoreman... </p>

            <a href="{{ route('news_page') }}" class="read-more">Читать</a>
        </div>


    </div>

    <div class="row">
        <div class="small-12 columns podcast-card--meta">
            @include('blocks.author-data')
        </div>
    </div>
</div>
