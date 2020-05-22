<div class="row gnc-calendar-list-day">
    <div class="gnc-calendar-list-day--header small-12 medium-2 medium-offset-2">
        <div class="gnc-calendar-list-day--date">{{ $date }}</div>
        <div class="gnc-calendar-list-day--name">{{ $name }}</div>
    </div>
    <div class="gnc-calendar-list-day--details small-12 medium-6">
        @foreach($meeting_list ?? [] as $meeting)
            <span class="gnc-calendar-list-day--point">
                <span class="gnc-calendar-list-day--time"> {{ $meeting->meeting_time->format('H:i') }} </span>
                <span class="gnc-calendar-list-day--duration"> {{ $meeting->duration }}  </span>
                {{ $meeting->description }}
            </span>
        @endforeach
    </div>
</div>

