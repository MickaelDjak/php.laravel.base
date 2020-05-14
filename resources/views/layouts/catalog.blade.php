<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('blocks.head.head')
</head>
<body>
<div id="app">
    @section('navigation')
        @include('blocks.header.header')
    @show

    <div id="content">
        <div class="row">
            <div class="small-12 medium-8 columns">
                @yield('title')
                @yield('content')
            </div>

            <div class="small-12 medium-4 columns">
                <div class="gnc-sidebar">
                    {{--            <div class="small-12 medium-4 large-3 columns" data-sticky-container>--}}
                    {{--                <div class="sticky" data-sticky data-anchor="content" data-margin-top="8">--}}
                    @include('blocks.sidebar.catalog')

                    @include('blocks.tags.tag')
                    {{--                </div>--}}
                </div>
            </div>
        </div>

        @yield('pagination')

    </div>

    @include('blocks.scroll_to_top.button')

    @include('blocks.footer.footer')

    @include('blocks.footer.script')
</div>
</body>
</html>
