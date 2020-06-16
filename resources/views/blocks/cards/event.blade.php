<div class="gnc-event-card-3g3f alt gnc-date-wrapper-d4k4">
    @include('blocks.dateMarker.dateMarker', ['dateTime' => $event->created_at])
    <div class="meta">
        <div class="photo" style="background-image: url({{url($event->image)}})"></div>
        <ul class="details"></ul>
    </div>
    <div class="description">
        <h1><a href="{{ route('resource_page', ['type' => 'event', 'slug' => $event->slug]) }}"> {{$event->title}}</a>
        </h1>
        @include('blocks.tags.list',['tags' => $event->tags])
        <p>{{$event->overview}}</p>
        <p class="read-more">
            <a href="{{ route('resource_page', ['type' => 'event', 'slug' => $event->slug]) }}">Узнать больше</a>
        </p>
    </div>
</div>
