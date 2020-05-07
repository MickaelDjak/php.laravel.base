<div class="news-panel">
    <section class="news-list">
        @for ($i = 0; $i < 10; $i++)
            @include("blocks.cards.post", [
                'src' => 'https://volyn.com.ua/content/thumbs/750x500/q/iv/g2ywpg-cvm77xjc7st2xdnzc7qojl5dq7sblivq.jpg'
            ])
        @endfor
    </section>
</div>
