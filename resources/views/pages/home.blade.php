@extends('layouts.index')

@section('banner')
    @include('blocks.banners.verse_of_day')
@endsection

@section('common_top')
    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.ministry')
        @endslot

        {{ route('ministry') }}
    @endcomponent

    @include('blocks.services.index')

    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.calendar')
        @endslot

        {{ route('calendar') }}
    @endcomponent

    @include('calendar.home.list')
@endsection

@section('content')
    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.events')
        @endslot

        {{ route('resource_list', ['type' => 'event']) }}
    @endcomponent

    <section class="row">
        @foreach ($events as $event)
            <div class="column small-12">
                @include('blocks.cards.event')
            </div>
        @endforeach
    </section>

    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.blog')
        @endslot

        {{ route('resource_list', ['type' => 'post'])  }}
    @endcomponent

    <div class="row">
        @foreach ($posts as $post)
            <div class="column small-12">
                @include("blocks.cards.post")
            </div>
        @endforeach
    </div>

    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.preaching')
        @endslot

        {{  route('resource_list', ['type' => 'preaching']) }}
    @endcomponent

    <div class="row ">
        @foreach ($preachings as $preaching)
            <div class="column small-12">
                @include("blocks.cards.preaching")
            </div>
        @endforeach
    </div>
@endsection

@section('common_bottom')
    <div class="gnc-form-box">
        @component('blocks.title.title')
            @slot('name')
                @lang('navigation.ask_question')
            @endslot
        @endcomponent

        @include('blocks.ask_question.ask_question')
    </div>
@endsection
