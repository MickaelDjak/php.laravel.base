@extends('layouts.index')

@section('banner')
    @include('blocks.banner')
@endsection

@section('content')
    @include('home.header', ['name' => 'Новости'])

    <section class="row small-up-1 medium-up-2 large-up-3">
        @for ($i = 0; $i < 3; $i++)
            @include('home.news')
        @endfor
    </section>

    @include('home.header', ['name' => 'Блог'])

    <div class="row" id="content">
        <div class="large-12">
            <div class="posts-panel grid">
                <div class="panel-content">
                    <section class="pinned-post">
                        @include('home.main_post')
                    </section>

                    <section class="posts-list">
                        @for ($i = 0; $i < 4; $i++)
                            @include('home.old_post')
                        @endfor
                    </section>
                </div>
            </div>
        </div>
    </div>

    @include('home.header', ['name' => 'Подкасты'])

    <div class="row medium-12 large-8 column align-center">
        @for ($i = 0; $i < 3; $i++)
            @include("home.podcast")
        @endfor
    </div>

    @include('home.header', ['name' => 'События'])

    <section class="row small-up-1 medium-up-3">
        @for ($i = 0; $i < 3; $i++)
            @include("home.event")
        @endfor
    </section>

    @include('home.header', ['name' => 'Ресурсы'])

    <section class="row small-up-1 medium-up-2 large-up-3">
        @for ($i = 0; $i < 3; $i++)
            @include("home.link")
        @endfor
    </section>
@endsection
