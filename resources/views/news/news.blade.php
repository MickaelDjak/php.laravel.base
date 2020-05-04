<div class="posts-panel">
    <div class="panel-content">
        <section class="posts-list">
            @for ($i = 0; $i < 10; $i++)
                @include("news.one")
            @endfor
        </section>
    </div>
</div>
