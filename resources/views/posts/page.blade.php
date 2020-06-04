@extends('layouts.article_page_real')

@section('banner')
    <div class="post-article-image">
        <div class="article-image">
            <img src="https://i.imgur.com/0buQ75a.jpg" alt="Space">
        </div>
    </div>
@endsection

@section('headline')
    <h1>{{ $post->title }}</h1>
@endsection

@section('marker')
    <div class="row align-center">
        <div class="large-12 columns">
            Пост / {{ $post->created_at->format('Y-m-d') }}
        </div>
    </div>
@endsection

@section('author')
    <div class="row align-center">
        <div class="large-12 columns">
            @include('blocks.author.author_social')
        </div>
    </div>
@endsection

@section('slides')
{{--    @include('blocks.external.slides')--}}
@endsection

@section('video')
{{--    <iframe width="560" height="315" src="https://www.youtube.com/embed/8bFMj_6IMDQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
@endsection

@section('tags')
    @include('blocks.tags.list',['tags' => $post->tags])
@endsection

@section('text')
    {{ $post->detail_text }}
@endsection

@section('comments')
    @include('blocks.comments.list')
@endsection
