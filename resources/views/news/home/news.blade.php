<div class="card">
    <a href="{{ route('news_page') }}">
        <img src="https://volyn.com.ua/content/thumbs/750x500/q/iv/g2ywpg-cvm77xjc7st2xdnzc7qojl5dq7sblivq.jpg">
    </a>
    <div class="card-divider">
        @include('blocks.publish_type_and_date')
    </div>
    <div class="card-section">
        <a href="{{ route('news_page') }}">
            <h4>This is a card.</h4>
        </a>
        <p>It has an easy to override visual style, and is appropriately subdued.</p>
    </div>
</div>
