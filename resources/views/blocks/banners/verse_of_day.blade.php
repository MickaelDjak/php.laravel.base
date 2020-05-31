<div class="gnc-verse-of-day">
    <div class="gnc-verse-of-day-section">
        <div class="gnc-verse-of-day-content">
            <i class="fa fa-3x fa-quote-right gnc-verse-of-day-quote"></i>
            <h5 class="gnc-verse-of-day-text">
                @foreach($goldenVerses as $verse)
                    {{$verse->verse_text}}
                @endforeach
            </h5>
            <i class="fa fa-3x fa-quote-right gnc-verse-of-day-quote"></i>
        </div>
        <a href="{{route('bible_page', ['translation' => 'rst66', 'book' =>  $goldenBook->type_code, 'chapter' => $goldenFragment,])}}"
           class="gnc-verse-of-day-link ">
            <p class="gnc-verse-of-day-source button">{{ $goldenBook->name }} {{$goldenFragment}}</p>
        </a>
    </div>
</div>
