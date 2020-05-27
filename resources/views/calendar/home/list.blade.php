<section id="gnc-calendar">
    <div class="row">
        <div class="large-12 columns">
            <div class="owl-carousel owl-theme gnc-calendar-data">

                @foreach ($meetings ?? [] as $meeting)
                    @component('calendar.home.item', ['sheet' => $meeting['list']])
                        @slot('date')
                            {{ $meeting['date'] }}
                        @endslot

                        @slot('name')
                            {{ $meeting['name'] }}
                        @endslot
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
</section>
