@extends('layouts.catalog')


@section('title')
    @component('blocks.title.header_of_catalog')
        @slot('img')
            /img/undraw/undraw_blog_anyj.svg
        @endslot
        @slot('name')
            Блог
        @endslot
        @slot('description')
            Стрічка статей, конспекты проповедей.
        @endslot
    @endcomponent
@endsection

@section('content')
    @include('posts.post')
@endsection

@section('pagination')
    <div class="row ">
        <div class="column">
            @include('blocks.pagination.pagination')
        </div>
    </div>
@endsection
