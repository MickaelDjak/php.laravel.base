<div class="gnc-ministry-card">
    <div class="row">
        <div class="small-12 medium-3 columns flex-container align-middle">
            <img src="{{ $img  }}" alt="n"/>
        </div>

        <div class="small-12 medium-9 columns">
            <h4 class="article-title">
                <a href="{{ route('event_page') }}"> {{ $name }} </a>
            </h4>
            @include('blocks.marker.marker')
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat longshoreman... </p>
            <a href="{{ route('event_page') }}" class="read-more">Подробнее ... </a>
        </div>

    </div>
</div>
