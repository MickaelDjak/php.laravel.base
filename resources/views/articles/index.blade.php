@extends('layouts.catalog')

@section('title')
    @component('blocks.title.header_of_catalog')
        @slot('img')
            {{ $meta['img'] }}
        @endslot

        @slot('name')
            {{ $meta['name'] }}
        @endslot

        @slot('description')
            {{ $meta['description'] }}
        @endslot
    @endcomponent
@endsection

@section('content')
    @each('blocks.cards.article', $articles, 'article')
@endsection

@section('pagination')
    <div class="row ">
        <div class="column">
            {{$articles->links('blocks.pagination.index')}}
        </div>
    </div>
@endsection
