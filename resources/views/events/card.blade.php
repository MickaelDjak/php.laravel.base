<div class="gnc-event-card-3g3f alt gnc-date-wrapper-d4k4">
    <div class="gnc-date">
        <span class="day">12</span>
        <span class="month">Aug</span>
        <span class="year">2016</span>
    </div>
    <div class="meta">
        <div class="photo" style="background-image: url({{$event->image}})"></div>
        <ul class="details">

        </ul>
    </div>
    <div class="description">
        <h1> <a href="{{ route('event_page', ['slug' => $event->slug]) }}"> {{$event->title}}</a> </h1>
        <section class="tag-cloud-section">
            <div class="tag-cloud">
                <a class="tag-cloud-individual-tag" href="#">Peanut</a>
                <a class="tag-cloud-individual-tag" href="#">Jelly</a>
                <a class="tag-cloud-individual-tag" href="#">Grapes</a>
            </div>
        </section>
        <p>{{$event->preview_text}}</p>
        <p class="read-more">
            <a href="{{ route('event_page', ['slug' => $event->slug]) }}">Узнать больше</a>
        </p>
    </div>
</div>
