<div class="title-bar" data-responsive-toggle="main-navigation-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="main-navigation-menu"></button>
    <div class="title-bar-title">Меню</div>
</div>

<div data-sticky-container>
    <div data-sticky data-options="marginTop:0;" id="main-navigation-menu"
         data-tab-bar="main-navigation-menu" data-responsive-toggle>
        <div class="gnc-navigation">
            <div class="gnc-navigation-top">
                <div class="row align-middle">
                    <div class="column shrink">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('/img/logo/logo_w.png') }}" alt="good news church logo text"
                                 class="gnc-navigation-logo">
                        </a>
                    </div>
                    <div class="column ">
                        <ul class="gnc-navigation-menu-links dropdown menu" data-dropdown-menu>
                            @include('blocks.navigation.links')

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
