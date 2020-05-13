<div class="row gnc-calendar-list-day">
    <div class="gnc-calendar-list-day--header small-3 medium-2 medium-offset-2">
        <div class="gnc-calendar-list-day--date">{{ $date }}</div>
        <div class="gnc-calendar-list-day--name">{{ $name }}</div>
    </div>
    <div class="gnc-calendar-list-day--details small-9 medium-6">
        @foreach($sheet as $item)
            <span class="gnc-calendar-list-day--point">
                <span class="gnc-calendar-list-day--time"> {{ $item['time'] }} </span>
                {{ $item['name'] }}
            </span>
        @endforeach
    </div>
</div>

