<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('blocks.head.head')
</head>
<body>
<div id="app">
    @include('blocks.social_bar.social_bar')

    @section('navigation')
        @include('blocks.header.header')
    @show

    @yield('banner')

    @yield('content')

    @yield('comments')

    @yield('pagination')

    @include('blocks.scroll_to_top.button')

    @include('blocks.footer.footer')

    @include('blocks.footer.script')
</div>
</body>
</html>
