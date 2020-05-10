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

    <div id="content">
        <div class="row">
            <div class="small-12  columns">
                @yield('content')
            </div>
        </div>
    </div>

    @include('blocks.scroll_to_top.button')

    @include('blocks.footer.footer')

    @include('blocks.footer.script')
</div>
</body>
</html>
