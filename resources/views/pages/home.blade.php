@extends('layouts.index')

@section('banner')
    @include('blocks.banners.verse_of_day')
@endsection

@section('common_top')
    @component('blocks.title.title')
        @slot('name')
            Служения
        @endslot

        {{ url('/ministry') }}
    @endcomponent

    @include('blocks.services.index')

    @component('blocks.title.title')
        @slot('name')
            Календарь
        @endslot
        {{ url('/calendar') }}
    @endcomponent

    @include('calendar.home.list')
@endsection

@section('content')
    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.events')
        @endslot

        {{ url('/events') }}
    @endcomponent

    <section class="row">
        @foreach ($events as $event)
            <div class="column small-12">
                @include('events.card')
            </div>
        @endforeach
    </section>

    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.blog')
        @endslot

        {{ url('/posts')  }}
    @endcomponent

    <div class="row">
        @foreach ($posts as $post)
            <div class="column small-12">
                @include("posts.card")
            </div>
        @endforeach
    </div>

    @component('blocks.title.title')
        @slot('name')
            @lang('navigation.preaching')
        @endslot

        {{ url('/preachings') }}
    @endcomponent

    <div class="row ">
        @foreach ($preachings as $preaching)
            <div class="column small-12">
                @include("preachings.card")
            </div>
        @endforeach
    </div>
@endsection

@section('common_bottom')
    <div class="gnc-form-box">
        @component('blocks.title.title')
            @slot('name')
                Задать вопрос пастору
            @endslot
        @endcomponent

        <div class="row">
            <div class="small-12 medium-6 column ">
                <div class="gnc-form-box-info-graph">
                    <img src="img/undraw/undraw_faq_rjoy.svg" alt="Kiwi standing on oval"/>
                </div>
            </div>
            <div class="small-12 medium-6 column ">
                <h2 class="gnc-form-box-title"></h2>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-12 cell">
                            <label for="name">{{ __('Имя') }}</label>
                            <input class="gnc-form-box-input" id="name" type="text" name="name" required/>
                        </div>

                        <div class="medium-12 cell">
                            <label for="email">{{ __('E-Mail') }}</label>
                            <input class="gnc-form-box-input" id="email" type="email" required autocomplete="email">
                        </div>

                        <div class="medium-12 cell">
                            <label for="question">{{ __('Вопрос') }}</label>
                            <textarea class="gnc-form-box-input" id="question"></textarea>
                        </div>

                        <div class="medium-12 cell">
                            <button type="submit" class="button"> Задать вопрос</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
