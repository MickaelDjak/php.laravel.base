@extends('layouts.article_page_real')

@section('banner')
    <div class="post-article-image">
        <div class="article-image">
            <img src="https://i.imgur.com/0buQ75a.jpg" alt="Space">
        </div>
    </div>
@endsection

@section('headline')
    <h2>Поиск по тегу: {{  $tagName }}</h2>
@endsection

@section('text')
    <div class="gnc-tag-review-34fe">
        @foreach($list as $model)
            <div class="gnc-tag-review-34fe-item">

                @if($model instanceof \App\Models\Event)
                    <h3><a href="{{route('event_page', ['slug' => $model->slug])}}">{{ $model->title }}</a></h3>
                    <p class="gnc-tag-review-34fe--type">Событие / {{ $model->created_at->diffForHumans() }}</p>
                @endif

                @if($model instanceof \App\Models\Post)
                    <h3><a href="{{route('post_page', ['slug' => $model->slug])}}">{{ $model->title }}</a></h3>
                    <p class="gnc-tag-review-34fe--type">Пост / {{ $model->created_at->diffForHumans() }}</p>
                @endif

                @if($model instanceof \App\Models\Preaching)
                    <h3><a href="{{route('preaching_page', ['slug' => $model->slug])}}">{{ $model->title }}</a></h3>
                    <p class="gnc-tag-review-34fe--type">Проповедь / {{ $model->created_at->diffForHumans() }}</p>
                @endif
                <p class="gnc-tag-review-34fe-description"> {{$model->preview_text}}</p>
            </div>
        @endforeach
    </div>
@endsection
