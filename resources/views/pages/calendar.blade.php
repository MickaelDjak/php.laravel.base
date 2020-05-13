@extends('layouts.data')

@section('title')
    @include('blocks.title.header_of_catalog', [
        'img' => '/img/undraw/undraw_calendar_dutt.svg',
        'name' => 'Календарь событий',
    ])
@endsection

@section('content')
    @include('calendar.catalog.list')
@endsection
