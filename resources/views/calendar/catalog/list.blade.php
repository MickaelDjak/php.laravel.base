@php($data = [
    [
         'date' => '4.04',
         'name' => 'Суббота',
         'sheet' => [
            ['time' => '9:00', 'name' => 'Утренее собрание'],
            ['time' => '17:00', 'name' => 'Вечернее собрание']
       ]
    ],
    [
         'date' => '7.04',
         'name' => 'Четверг',
         'sheet' => [
            ['time' => '7:00', 'name' => 'Молитвенное собрание'],
            ['time' => '19:00', 'name' => 'Молитвенное собрание']
       ]
    ],
    [
         'date' => '8.04',
         'name' => 'Пятница',
         'sheet' => [
            ['time' => '19:00', 'name' => 'Спевка']
       ]
    ],
    [
         'date' => '4.04',
         'name' => 'Суббота',
         'sheet' => [
            ['time' => '9:00', 'name' => 'Утренее собрание'],
            ['time' => '17:00', 'name' => 'Вечернее собрание']
       ]
    ],
    [
         'date' => '7.04',
         'name' => 'Четверг',
         'sheet' => [
            ['time' => '7:00', 'name' => 'Молитвенное собрание'],
            ['time' => '19:00', 'name' => 'Молитвенное собрание']
       ]
    ],
    [
         'date' => '8.04',
         'name' => 'Пятница',
         'sheet' => [
            ['time' => '19:00', 'name' => 'Спевка']
       ]
    ],
])

<div class="gnc-calendar-list">
    @foreach ($data as $item)
        @component('calendar.catalog.item', ['sheet' => $item['sheet']])
            @slot('date')
                {{ $item['date'] }}
            @endslot

            @slot('name')
                {{ $item['name'] }}
            @endslot
        @endcomponent
    @endforeach
</div>
