<div class="post-item">
    <a href="{{ route('post_page') }}" class="post-thumbnail">
        <img src="https://static.pexels.com/photos/33109/fall-autumn-red-season.jpg"
             alt="">
    </a>
    <div class="post-text">
        <a href="{{ route('post_page') }}">
            <h3 class="post-title">Post title place-holder</h3>
        </a>

        @include('blocks.publish_type_and_date')

        <div class="post-summary">
            <p>Your work is going to fill a large part of your life, and the only way to be
                truly satisfied is to do what you believe is great work. And the only way to do
                great work is to love what you do. If you haven't found it yet, keep looking.
                Don't settle. As with all matters of the heart, you'll know when you find it....

            </p>
        </div>
        <a href="{{ route('post_page') }}" class="post-read-more">Read more<span
                class="fa fa-chevron-circle-right" aria-hidden="true"></span></a>
    </div>
    <div class="post-meta">
        @include('blocks.author-data-short')
    </div>
</div>
