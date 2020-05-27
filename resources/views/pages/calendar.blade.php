@extends('layouts.index')


@section('content')

    @include('blocks.title.header_of_catalog', [
       'img' => '/img/undraw/undraw_calendar_dutt.svg',
       'name' => 'Календарь событий',
   ])

    @include('calendar.catalog.list')
@endsection
