@extends('layouts.index')

@section('banner')
    @include('blocks.banners.banner')
@endsection

@section('content')

    @include('home.header', ['name' => 'Блог'])

    @include('posts.home')

    @include('home.header', ['name' => 'Подкасты'])

    @include("podcast.home")

    @include('home.header', ['name' => 'События'])

    @include('events.home')

    @include('home.header', ['name' => 'Ресурсы'])

    <section class="row small-up-1 medium-up-2 large-up-3">
        @for ($i = 0; $i < 3; $i++)
            <div class="column">
                @include("home.link")
            </div>
        @endfor
    </section>
@endsection
