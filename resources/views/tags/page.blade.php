@extends('layouts.catalog')

@section('title')
    <h3>Поиск по тегу: {{  $tagName }}</h3>
@endsection

@section('content')
    @foreach($articles as $article)
        @if($article->type === 'event')
            @include('events.card',['event' => $article])
        @endif

        @if($article->type === 'post')
            @include('posts.card',['post' => $article])
        @endif

        @if($article->type === 'preaching')
            @include('preachings.card',['preaching' => $article])
        @endif
    @endforeach
@endsection

@section('pagination')
    <div class="row ">
        <div class="column">
            {{$articles->links('blocks.pagination.index')}}
        </div>
    </div>
@endsection
