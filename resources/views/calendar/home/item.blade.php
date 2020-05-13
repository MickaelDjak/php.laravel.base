<div class="gnc-calendar-day">
    <div class="gnc-calendar-day--header">
        <div class="gnc-calendar-day--date">{{ $date  }}</div>
        <div class="gnc-calendar-day--name">{{ $name }}</div>
    </div>
    <div class="gnc-calendar-day--details">
        @foreach($sheet as $item)
            <span class="gnc-calendar-day--point">
                <span class="gnc-calendar-day--time">{{ $item['time'] }}</span>
                {{$item['name']}}
            </span>
        @endforeach
    </div>
</div>
