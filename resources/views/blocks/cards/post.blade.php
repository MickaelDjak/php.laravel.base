<article class="blog-card gnc-date-wrapper-d4k4">
    @include('blocks.dateMarker.dateMarker', ['dateTime' => $post->created_at])
    <div class="blog-card__background">
        <div class="card__background--wrapper">
            <div class="card__background--main" style="background-image: url('{{ url($post->image) }}');">
                <div class="card__background--layer"></div>
            </div>
        </div>
    </div>
    <div class="blog-card__head"></div>
    <div class="blog-card__info">
        <h5><a href="{{ route('resource_page', ['type' => 'post', 'slug' => $post->slug]) }}">{{ $post->title }}</a></h5>
        @include('blocks.tags.list',['tags' => $post->tags])
        <p>
            <a href="#" class="icon-link mr-3"><i class="fa fa-pencil-square-o"></i> Tony Jahson</a>
            <a href="#" class="icon-link"><i class="fa fa-comments-o"></i> 150</a>
        </p>
        <p>{{ $post->overview }}</p>
        <a href="{{ route('resource_page', ['type' => 'post','slug' => $post->slug]) }}" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i>Читать
            полностью</a>
    </div>
</article>
