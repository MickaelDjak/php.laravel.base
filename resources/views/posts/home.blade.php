<div class="row" id="content">
    <div class="large-12">
        <div class="posts-panel grid">
            <div class="panel-content">
                <section class="pinned-post">
                    @include('posts.item')
                </section>

                <section class="posts-list">
                    @for ($i = 0; $i < 3; $i++)
                        @include('posts.item')
                    @endfor
                </section>
            </div>
        </div>
    </div>
</div>
