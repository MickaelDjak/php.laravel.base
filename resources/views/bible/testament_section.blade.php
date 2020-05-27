<div class="column small-12 large-6">
    <h2 class="gnc-bible-book-testament-title">{{$testamentType}}</h2>

@foreach($sectionList as $section)
        <h3 class="gnc-bible-book-section-title">{{ $section->section->first()->name }}</h3>

        <div class="gnc-bible-book-group">
            @foreach($bootTypeList->filter(function($booType) use ($section) {
    return $booType->section_code === $section->code;
}) as $bootType)
                @include('bible.main_link',[
                    'translationCode' => $bootType->book->first()->translation_code,
                    'bookCode' => $bootType->code,
                    'bookName' =>  $bootType->book->first()->name,
                    'numberOfChapters' => $bootType->book->first()->number_of_chapters,
                    ])
            @endforeach
        </div>
    @endforeach
</div>
