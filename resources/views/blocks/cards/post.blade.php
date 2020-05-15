<div class="blog-post card">
    <div class="blog-post-banner">
        <a href="{{ route('post_page') }}">
            <img src="{{ $src }}" alt="post"/>
        </a>
    </div>

    <div class="card-divider">
        @include('blocks.marker.marker')
    </div>

    <div class="blog-post-summary">

        <a href="{{ route('post_page') }}">
            <h3 class="post-title">Post title place-holder</h3>
        </a>

        <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue.
            Donec</p>

        <div>
            <audio controls preload="none">
                <source src="/audio/song.mp3" type="audio/mpeg">
                <a href="audio/song.mp3">Скачайте музыку</a>.
            </audio>
        </div>

        <a href="{{ route('post_page') }}" class="post-read-more">Читать детальнее ...</a>
    </div>
</div>
