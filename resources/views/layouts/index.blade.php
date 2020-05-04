<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('blocks.head')
</head>
<body>
<div id="app">
    @section('navigation')
        @include('blocks.navigation')
    @show

    @yield('banner')

    @yield('content')

    @include('blocks.footer')

    @include('blocks.script')
</div>
</body>
</html>
