@extends('layouts.article_page_real')

@section('headline')
    <h2>{{$bibleBook->name}} {{ $chapter }}</h2>

    <div class="row">
        <div class="column">
            <a class="button" href="/bible/{{$bibleBook->translation_code}}/{{$bibleBook->type_code}}/{{($chapter - 1)}}">Предыдущая глава</a>
            <a class="button"  href="/bible/{{$bibleBook->translation_code}}/{{$bibleBook->type_code}}/{{($chapter + 1)}}">Следующая глава</a>
        </div>
    </div>
@endsection

@section('text')
    @foreach($verses as $verse)
        <p><small>{{ $verse->verse_number }}</small> {{ $verse->verse_text }}</p>
    @endforeach
@endsection

@section('sidebar_top')
    <div class="gnc-sidebar-section">
        <h4>Переводы</h4>
        @foreach($translations as $translationItem)
            <p><a href="{{ route('bible', [$translationItem->code])}}">{{$translationItem->name}}</a></p>
        @endforeach
    </div>
@endsection
