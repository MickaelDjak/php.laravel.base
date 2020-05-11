
<div data-sticky-container>
    <div data-sticky data-options="marginTop:0;"
        data-responsive-toggle>
        <div class="gnc-navigation">

            <div class="gnc-navigation-top">

                <nav class="top-bar topbar-responsive row">
                    <div class="top-bar-title">
                        <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
                            <button class="menu-icon" type="button" data-toggle></button>
                        </span>
                        <a class="topbar-responsive-logo" href="{{ url('/') }}">
                            <img src="{{ asset('/img/logo/logo_w.png') }}" alt="good news church logo text"
                                 class="gnc-navigation-logo" style="width: 300px; height: auto">
                        </a>
                    </div>
                    <div id="topbar-responsive" class="topbar-responsive-links">
                        <div class="top-bar-right">
                            <ul class="gnc-navigation-menu-links dropdown menu vertical medium-horizontal" data-dropdown-menu>
                                @include('blocks.navigation.links')

                            </ul>

{{--                            <ul class="menu simple ">--}}
{{--                                @include('blocks.navigation.links')--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

