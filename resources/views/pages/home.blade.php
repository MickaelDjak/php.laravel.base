@extends('layouts.index')

@section('banner')
    @include('blocks.banners.banner')
@endsection

@section('content')



    @component('blocks.title.title', ['link' => url('/posts')])
        @slot('name')
            @lang('navigation.blog')
        @endslot
    @endcomponent

    @include('posts.home')

    @component('blocks.title.title', ['link' => url('/podcast')])
        @slot('name')
            @lang('navigation.podcast')
        @endslot
    @endcomponent

    @include("podcast.home")

    @component('blocks.title.title', ['link' => url('/events')])
        @slot('name')
            @lang('navigation.events')
        @endslot
    @endcomponent

    @include('events.home')

    <div class="hero-section">
        <div class="hero-section-text">
            <a href="{{ url('/about') }}"><h1>@lang('navigation.about_as')</h1></a>
            <h5>Вероучение</h5>
            <h5>Служения</h5>
            <h5>История церквей</h5>
            <h5>Фотогалереи</h5>
            <h5>Контакты</h5>
        </div>
    </div>

    @component('blocks.title.title', ['link' => '#'])
        @slot('name')
            @lang('navigation.resources')
        @endslot
    @endcomponent

    @include('blocks.resource.list')
@endsection
