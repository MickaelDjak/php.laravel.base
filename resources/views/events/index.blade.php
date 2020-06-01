@extends('layouts.catalog')

@section('title')
    @component('blocks.title.header_of_catalog')
        @slot('img')
            /img/undraw/undraw_events_2p66.svg
        @endslot
        @slot('name')
            Події
        @endslot
        @slot('description')
            Стрічка подій, які відбувалися в ІБЦ та матеріалів у даній категорії.
        @endslot
    @endcomponent

@endsection

@section('content')
    @each('events.card', $events, 'event')
@endsection


@section('pagination')
    <div class="row ">
        <div class="column">
            {{$events->links('blocks.pagination.index')}}
        </div>
    </div>
@endsection
