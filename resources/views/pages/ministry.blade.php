@extends('layouts.catalog')

@section('content')

    @php($data = [
        [
            'name' => 'Подростковое служение',
            'img' => 'img/undraw/undraw_children_4rtb.svg'
        ],
        [
            'name' => 'Молодежное служение',
            'img' => 'img/undraw/undraw_people_tax5.svg'
        ],
        [
            'name' => 'Семейное служение',
            'img' => 'img/undraw/undraw_wedding_t1yl.svg'
        ],
        [
            'name' => 'Мужское служение',
            'img' => 'img/undraw/undraw_fatherhood_7i19.svg'
        ],
        [
            'name' => 'Женское служение',
            'img' => 'img/undraw/undraw_baby_ja7a.svg'
        ],
        [
            'name' => 'Малые группы по изучению Библии',
            'img' => 'img/undraw/undraw_team_spirit_hrr4.svg'
        ],
])

    @foreach ($data as $item)
        @component('blocks.cards.ministry')
            @slot("img")
                {{ $item['img'] }}
            @endslot

            @slot("name")
                {{ $item['name'] }}
            @endslot
        @endcomponent
    @endforeach

@endsection
