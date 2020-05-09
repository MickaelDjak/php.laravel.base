@extends('layouts.index')

@section('banner')
    @include('blocks.banners.banner')
@endsection

@section('content')
    @component('blocks.title.title', ['link' => url('/about')])
        @slot('name')
            Служение
        @endslot
    @endcomponent

    @include('blocks.services.index')

    @component('blocks.title.title', ['link' => url('/events')])
        @slot('name')
            @lang('navigation.events')
        @endslot
    @endcomponent

    @include('events.home')

    @component('blocks.title.title', ['link' => url('/posts')])
        @slot('name')
            @lang('navigation.blog')
        @endslot
    @endcomponent

    @include('posts.home')

    @component('blocks.title.title', ['link' => url('/preachings')])
        @slot('name')
            @lang('navigation.preaching')
        @endslot
    @endcomponent

    @include("preachings.home")

@endsection
