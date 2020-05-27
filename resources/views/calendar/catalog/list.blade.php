<div class="gnc-calendar-list">
    @foreach ($meetings ?? [] as $meeting)
        @component('calendar.catalog.item', ['meeting_list' => $meeting['list']])
            @slot('date')
                {{ $meeting['date'] }}
            @endslot

            @slot('name')
                {{ $meeting['name'] }}
            @endslot
        @endcomponent
    @endforeach
</div>
