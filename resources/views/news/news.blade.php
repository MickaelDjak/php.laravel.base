<div class="news-panel">
    <section class="news-list">
        @for ($i = 0; $i < 10; $i++)
            @include("news.card")
        @endfor
    </section>
</div>
