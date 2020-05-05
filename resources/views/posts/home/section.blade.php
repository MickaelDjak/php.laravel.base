<div class="row" id="content">
    <div class="large-12">
        <div class="posts-panel grid">
            <div class="panel-content">
                <section class="pinned-post">
                    @include('posts.home.first')
                </section>

                <section class="posts-list">
                    @for ($i = 0; $i < 3; $i++)
                        @include('posts.home.other')
                    @endfor
                </section>
            </div>
        </div>
    </div>
</div>
