@extends('layouts.catalog')

@section('sidebar_top')
    <div class="gnc-sidebar-section gnc-form-box">
        <h4>  <a href="{{route('search')}}">Перейти к lw поиску</a></h4>
    </div>
@endsection

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
    @each("posts.card", $posts, 'post')
@endsection

@section('pagination')
    <div class="row ">
        <div class="column">
            {{$posts->links('blocks.pagination.index')}}
        </div>
    </div>
@endsection
