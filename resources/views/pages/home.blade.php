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

    @component('blocks.title.title', ['link' => '#'])
        @slot('name')
            Задать вопрос пастору
        @endslot
    @endcomponent

    <div class="login-box">
        <div class="row">
            <div class="small-12 medium-8 medium-offset-2 column ">
                <div class="login-box-form-section">
                    <h2 class="login-box-title"></h2>
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x">
                            <div class="medium-12 cell">
                                <label for="name">{{ __('Имя') }}</label>
                                <input class="login-box-input" id="name" type="text" name="name" required/>
                            </div>

                            <div class="medium-12 cell">
                                <label for="email">{{ __('E-Mail') }}</label>
                                <input class="login-box-input" id="email" type="email" required autocomplete="email">
                            </div>

                            <div class="medium-12 cell">
                                <label for="question">{{ __('Вопрос') }}</label>
                                <textarea class="login-box-input" id="question"></textarea>
                            </div>

                            <div class="medium-12 cell">
                                <button type="submit" class="button"> Задать вопрос</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
