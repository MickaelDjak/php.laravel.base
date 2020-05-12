@extends('layouts.catalog')

@section('title')
    @component('blocks.title.header_of_catalog')
        @slot('name')
            ПОДІЇ
        @endslot
        @slot('description')
            Стрічка подій, які відбувалися в ІБЦ та матеріалів у даній категорії.
        @endslot
    @endcomponent

@endsection

@section('content')
    @include('events.events')
@endsection


@section('pagination')
    <div class="row ">
        <div class="column">
            @include('blocks.pagination.pagination')
        </div>
    </div>
@endsection
