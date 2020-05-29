<div class="gnc-sidebar-section">
    <h4>Читаем Библию</h4>
    @foreach($dailyBibleReadingFragments->groupBy('part_of_day') as $fragmentsGroupedByDay)
        <p>{{$fragmentsGroupedByDay->first()->part_of_day}}
            @foreach($fragmentsGroupedByDay->groupBy('book_shortcut') as $fragmentsGroupedByBook)
                @foreach($fragmentsGroupedByBook as $fragment)
                    <a target="_blank" href="/bible/rst66/{{$fragment->bible_book_type}}/{{$fragment->text_fragment}}">
                        @if ($loop->first)
                            {{ $dailyBibleReadingFragmentBooks[$fragment->bible_book_type] }} {{$fragment->text_fragment}}
                        @else
                            {{$fragment->text_fragment}}
                        @endif
                    </a>
                @endforeach
            @endforeach
        </p>
    @endforeach
</div>
