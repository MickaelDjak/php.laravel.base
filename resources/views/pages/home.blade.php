@extends('layouts.index')

@section('banner')
    @include('blocks.banners.verse_of_day')
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

    @component('blocks.title.title', ['link' => '#'])
        @slot('name')
            Задать вопрос пастору
        @endslot
    @endcomponent

    <div class="gnc-form-box">
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
