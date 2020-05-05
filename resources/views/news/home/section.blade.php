<section class="row small-up-1 medium-up-2 large-up-3">
    @for ($i = 0; $i < 3; $i++)
        <div class="column">
            @include('news.home.news')
        </div>
    @endfor
</section>
