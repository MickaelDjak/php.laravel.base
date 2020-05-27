<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('blocks.head.head')
<body>
<div id="app">
    @section('navigation')
        @include('blocks.header.header')
    @show

    @yield('banner')

    @yield('common_top')

    <div id="content">
        <div class="row">
            <div class="small-12 medium-8 columns">
                @yield('content')
            </div>

            <div class="small-12 medium-4 columns">
                <div class="gnc-sidebar">
                    @include('blocks.sidebar.catalog')
                </div>
            </div>
        </div>

        @yield('pagination')
    </div>

    @yield('common_bottom')

    @include('blocks.footer.footer')

    @include('blocks.scroll_to_top.button')

    @include('blocks.footer.script')
</div>
</body>
</html>
