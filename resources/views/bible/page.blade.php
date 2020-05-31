@extends('layouts.article_page_real')

@section('headline')
    <h2>{{$bibleBook->name}} {{ $chapter }}</h2>

    <div class="row">
        <div class="column">
            <a class="button" href="{{route('bible_page',
['translation' => $bibleBook->translation_code,
 'book' =>  $bibleBook->type_code,
 'chapter' => $chapter - 1])}}">Предыдущая глава</a>
            <a class="button" href="{{route('bible_page',
['translation' => $bibleBook->translation_code,
 'book' =>  $bibleBook->type_code,
 'chapter' => $chapter + 1])}}">Следующая глава</a>
            <button class="button" type="button" data-toggle="select_other_chapter">Выбрать главу</button>
            <div class="dropdown-pane gnc-bible-chapter-list" id="select_other_chapter" data-dropdown>
                @foreach(range(1, $bibleBook->number_of_chapters) as $key => $chaptersNumber)
                    @if($key !== 0 && !($key % 10))
                        <br/>
                    @endif
                    <a class="gnc-bible-chapter-item" href="{{route('bible_page',
['translation' => $bibleBook->translation_code,
 'book' =>  $bibleBook->type_code,
 'chapter' => $chaptersNumber])}}">{{$chaptersNumber}}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('text')
    @foreach($verses as $verse)
        <p><small>{{ $verse->verse_number }}</small> {!!   $verse->verse_text !!}</p>
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
