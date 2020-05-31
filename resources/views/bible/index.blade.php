@extends('layouts.index')

@section('content')
    <div class="gnc-bible-book">
        <div class="row">
            <div class="column">
                <h1 class="gnc-bible-book-translation">{{$translation->name}}</h1>
            </div>
        </div>

        <div class="row">
            @include('bible.testament_section', [
        'testamentType' => $oldTestamentName,
        'sectionList' => $oldSection,
        'bootTypeList' => $oldTestament
        ])
            @include('bible.testament_section', [
        'testamentType' => $newTestamentName,
        'sectionList' => $newSection,
        'bootTypeList' => $newTestament
        ])
        </div>
    </div>
@endsection

@section('sidebar_top')
    <div class="gnc-sidebar-section">
        <h4>Переводы</h4>
        @foreach($translations as $translationItem)
            <p><a href="{{ route('bible', [$translationItem->code])}}">{{$translationItem->name}}</a></p>
        @endforeach
    </div>
@endsection
