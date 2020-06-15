<div class="gnc-event-card-3g3f alt gnc-date-wrapper-d4k4">
    <div class="gnc-date">
        <span class="day">12</span>
        <span class="month">Aug</span>
        <span class="year">2016</span>
    </div>
    <div class="meta">
        <div class="photo" style="background-image: url({{url($event->image)}})"></div>
        <ul class="details">

        </ul>
    </div>
    <div class="description">
        <h1> <a href="{{ route('event_page', ['slug' => $event->slug]) }}"> {{$event->title}}</a> </h1>
        @include('blocks.tags.list',['tags' => $event->tags])
        <p>{{$event->overview}}</p>
        <p class="read-more">
            <a href="{{ route('event_page', ['slug' => $event->slug]) }}">Узнать больше</a>
        </p>
    </div>
</div>
