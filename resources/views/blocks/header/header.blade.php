<div data-sticky-container>
    <div data-sticky data-options="marginTop:0;"
         data-responsive-toggle>
        <div class="gnc-navigation">
            <nav class="top-bar gnc-navigation-container row">
                <div class="top-bar-title">
                    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
                        <button class="menu-icon" type="button" data-toggle></button>
                    </span>
                    <a href="{{ url('/') }}">
                        <img class="gnc-navigation-logo" src="{{ asset('/img/logo/logo_w.png') }}"
                             alt="good news church logo text"/>
                    </a>
                </div>
                <ul class="gnc-navigation-menu-links dropdown menu vertical medium-horizontal"
                    data-dropdown-menu id="topbar-responsive">
                    <li>
                        <a href="{{ url('/about') }}">@lang('navigation.about_as')</a>
                        <ul class="menu nested vertical gnc-navigation-nested">
                            <li><a href="{{ route('contacts') }}">Контакты</a></li>
                            <li><a href="{{ route('ministry') }}">Служение</a></li>
                            <li><a href="{{ route('calendar') }}">Календарь</a></li>
                            <li><a href="{{ route('credo') }}">Вероучение</a></li>
                            <li><a href="{{ route('gallery_list') }}">Галерея</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/events') }}">@lang('navigation.events')</a></li>
                    <li><a href="{{ url('/posts') }}">@lang('navigation.blog')</a></li>
                    <li><a href="{{ url('/preachings') }}">@lang('navigation.preaching')</a></li>
                    <li><a href="{{ url('/subscribe') }}">Присоединиться</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

