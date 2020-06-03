<section class="tag-cloud-section">
    <div class="tag-cloud">
        @foreach($tags  as $tag)
            <a class="tag-cloud-individual-tag" href="/tag/{{$tag->tag_id}}">{{$tag->name}}</a>
        @endforeach
    </div>
</section>

