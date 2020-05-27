<a class="gnc-bible-book-item"
   href="{{route('bible_page', [$translationCode, $bookCode, 1])}}"
>
    {{ $bookName }}
    <span class="badge badge-default badge-pill gnc-bible-book-info">{{ $numberOfChapters }}</span>
</a>
