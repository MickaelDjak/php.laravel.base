@if($article->type === 'event')
    @include('blocks.cards.event', ['event' => $article])
@endif

@if($article->type === 'post')
    @include('blocks.cards.post', ['post' => $article])
@endif

@if($article->type === 'preaching')
    @include('blocks.cards.preaching', ['preaching' => $article])
@endif
