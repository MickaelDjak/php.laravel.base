@extends('layouts.article_page_real')

@section('headline')
    <h2>Familiarity Bias is Holding You Back: It’s Time to Embrace Arrow Functions</h2>
@endsection

@section('text')
    @foreach($verses as $verse)
        <p><small>{{$verse->verse_number}}</small> {{$verse->verse_text}}</p>
    @endforeach
@endsection
