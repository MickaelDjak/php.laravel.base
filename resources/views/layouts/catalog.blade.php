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

    <div class="row" id="content">
        <div class="small-7 medium-8 large-9 columns">
            @yield('content')
        </div>

        <div class="small-5 medium-4 large-3 columns" data-sticky-container>
            <div class="sticky" data-sticky data-anchor="content" data-margin-top="6">
                    @include('blocks.sidebar')
            </div>
        </div>
    </div>

    @section('pagination')
        <div class="row column">
            @include('blocks.pagination')
        </div>
    @show

    @include('blocks.footer')

    @include('blocks.script')
</div>
</body>
</html>
