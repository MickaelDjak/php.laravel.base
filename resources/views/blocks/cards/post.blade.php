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
            Donec
            congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac
            lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget
            luctus.</p>

        <a href="{{ route('post_page') }}" class="post-read-more">Читать детальнее ...</a>
    </div>
</div>
