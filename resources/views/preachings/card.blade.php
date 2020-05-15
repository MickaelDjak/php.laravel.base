<div class="gnc-preaching card">
    <div class="card-divider">
        @include('blocks.marker.marker')
    </div>

    <div class="gnc-preaching-summary">
        <h3 class="post-title">
            <a href="{{ route('preaching_page') }}">УСИНОВЛЕНИЙ НАВІЧНО, АБО ЄВАНГЕЛІЄ НАЗАВЖДИ!</a>
        </h3>

        <div class="row">
            <p class="column">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate accusantium unde culpa est
                dolorem earum in numquam accusamus, recusandae dolorum. Aperiam nesciunt iste numquam
                laboriosam, asperiores explicabo impedit laborum, non, it</p>
        </div>

        <div class="row align-middle">
            <div class="column medium-6">
                <p><b>Кто:</b> Смоленников Валерий</p>
                <p><b>Когда:</b> Май 04, 2020</p>
            </div>

            <div class="column medium-6">
                <p><b>Отрывок:</b> Івана 21:1-19</p>
                <p><b>Длительность:</b> 41 мин.</p>
            </div>
        </div>

        <section class="tag-cloud-section gnc-preaching-tags">
            <div class="tag-cloud tag-cloud-row">
                @each('blocks.tags.item', ['Видео', 'Аудио', 'Текст', 'Слайды', ], 'name')
            </div>
        </section>
    </div>
</div>
