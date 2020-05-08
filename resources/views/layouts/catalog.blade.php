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
            <div class="small-7 medium-8 large-9 columns">
                @yield('content')
            </div>

            <div class="small-5 medium-4 large-3 columns" data-sticky-container>
                <div class="sticky" data-sticky data-anchor="content" data-margin-top="6">
                        @include('blocks.sidebar.sidebar')
                </div>
            </div>
        </div>

            @yield('pagination')

    </div>




    @include('blocks.footer.footer')

    @include('blocks.footer.script')
</div>
</body>
</html>