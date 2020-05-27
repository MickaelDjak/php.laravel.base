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
        'testamentType' => 'Ветхий Завет',
        'sectionList' => $oldSection,
        'bootTypeList' => $oldTestament
        ])
            @include('bible.testament_section', [
        'testamentType' => 'Новый Завет',
        'sectionList' => $newSection,
        'bootTypeList' => $newTestament
        ])
        </div>
    </div>
@endsection
