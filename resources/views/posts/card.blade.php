<article class="blog-card gnc-date-wrapper-d4k4">
    <div class="gnc-date">
        <span class="day">12</span>
        <span class="month">Aug</span>
        <span class="year">2016</span>
    </div>
    <div class="blog-card__background">
        <div class="card__background--wrapper">
            <div class="card__background--main" style="background-image: url('{{ $post->image }}');" >
                <div class="card__background--layer"></div>
            </div>
        </div>
    </div>
    <div class="blog-card__head"></div>
    <div class="blog-card__info">
        <h5><a href="{{ route('post_page') }}">{{ $post->title }}</a></h5>
        <p>
            <a href="#" class="icon-link mr-3"><i class="fa fa-pencil-square-o"></i> Tony Jahson</a>
            <a href="#" class="icon-link"><i class="fa fa-comments-o"></i> 150</a>
        </p>
        <p>{{ $post->preview_text }}</p>
        <a href="{{ route('post_page') }}" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i>Читать полностью</a>
    </div>
</article>
