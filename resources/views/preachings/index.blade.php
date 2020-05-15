@extends('layouts.catalog')

@section('title')
    @component('blocks.title.header_of_catalog')
        @slot('img')
            /img/undraw/undraw_podcast_q6p7.svg
        @endslot
        @slot('name')
            Проповеди
        @endslot
        @slot('description')
            Стрічка проповедей в текстовом, аудио и видео формате.
        @endslot
    @endcomponent
@endsection

@section('content')
    @for ($i = 0; $i < 10; $i++)
        @include("preachings.card", [
            'src' => '/img/banners/podcast-1.png'
        ])
    @endfor

@endsection

@section('pagination')
    <div class="row ">
        <div class="column">
            @include('blocks.pagination.pagination')
        </div>
    </div>
@endsection
