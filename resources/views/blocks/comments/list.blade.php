<div class="comment-section-container">
    <h3>Comments (5)</h3>

    @for ($i = 0; $i < 5; $i++)
        @include("blocks.comments.item")
    @endfor

    @include('blocks.comments.form')
</div>
