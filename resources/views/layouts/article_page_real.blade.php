<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('blocks.head.head')
<body>
<div id="app">
    @include('blocks.header.header')

    <div class="gnc-article-container-6ld3">
        @yield('banner')

        <div class="row  align-center">
            <div class="large-12 columns post-article-title">
                <h3 class="article-title">
                    @yield('headline_main')
                </h3>
            </div>
        </div>

        @yield('marker')

        <div class="row post-article-content ">
            <div class="columns small-12 medium-8 article-content">
                @yield('headline')
                <div class="article-content">
                    @yield('tags')
                    @yield('slides')
                    @yield('video')
                    @yield('audio')
                </div>

                @yield('text')

                @yield('author')
            </div>

            <div class="columns small-12 medium-4 article-content">
                @section('sidebar')
                    @include('blocks.sidebar.articl')
                @show
            </div>
        </div>

        <div class="row">
            <div class="columns small-12 medium-8">
                @yield('comments')
                @yield('ask_question')
            </div>
        </div>
    </div>

    @include('blocks.scroll_to_top.button')

    @include('blocks.footer.footer')

    @include('blocks.footer.script')
</div>
</body>
</html>
