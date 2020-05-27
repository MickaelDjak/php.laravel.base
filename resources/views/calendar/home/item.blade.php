<div class="gnc-calendar-day">
    <div class="gnc-calendar-day--header">
        <div class="gnc-calendar-day--date">{{ $date  }}</div>
        <div class="gnc-calendar-day--name">{{ $name }}</div>
    </div>
    <div class="gnc-calendar-day--details">
        @foreach($sheet as $meeting)
            <span class="gnc-calendar-day--point">
                <span class="gnc-calendar-day--time">{{ $meeting->meeting_time->format('H:i') }}</span>
                {{$meeting->description}}
            </span>
        @endforeach
    </div>
</div>
