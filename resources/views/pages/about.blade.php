@extends('layouts.catalog')

@section('title')
    @component('blocks.title.header_of_catalog')
        @slot('img')
            /img/undraw/undraw_team_ih79.svg
        @endslot
        @slot('name')
            Кто мы такие
        @endslot
        @slot('description')
            <p>Flank spare ribs capicola, strip steak biltong pancetta bresaola tri-tip cow landjaeger. Short ribs
                sirloin beef ribs, flank capicola ribeye turducken. Sirloin boudin andouille tail. Ham flank tail
                sausage t-bone, jerky landjaeger kevin porchetta ground round pork belly.</p>

            <p>Pork loin doner biltong shoulder meatball flank. Sirloin shankle ground round tail, short loin
                prosciutto
                beef ribs salami pork pancetta kielbasa. Brisket spare ribs jerky filet mignon flank. Turducken ham
                sausage pork loin salami. Ball tip meatloaf shank pancetta hamburger meatball. Jowl beef pork loin
                tenderloin turducken, pastrami capicola filet mignon ham hock pork belly t-bone jerky ball tip
                kevin.</p>
        @endslot
    @endcomponent
@endsection

@section('content')
{{--    @include('posts.card')--}}
@endsection
