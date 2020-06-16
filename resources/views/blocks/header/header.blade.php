<div data-sticky-container>
    <div data-sticky data-options="marginTop:0;"
         data-responsive-toggle>
        <div class="gnc-navigation">
            <nav class="top-bar gnc-navigation-container row">
                <div class="top-bar-title">
                    <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
                        <button class="menu-icon" type="button" data-toggle></button>
                    </span>
                    <a href="{{ route('home') }}">
                        <img class="gnc-navigation-logo" src="{{ asset('/img/logo/logo_w.png') }}"
                             alt="good news church logo text"/>
                    </a>
                </div>
                <ul class="gnc-navigation-links dropdown menu vertical medium-horizontal"
                    data-dropdown-menu id="topbar-responsive">
                    <li>
                        <a href="{{ route('about') }}">@lang('navigation.about_as')</a>
                        <ul class="menu nested vertical gnc-navigation-nested">
                            <li><a href="{{ route('ministry') }}">@lang('navigation.ministry')</a></li>
                            <li><a href="{{ route('calendar') }}">@lang('navigation.calendar')</a></li>
                            <li><a href="{{ route('credo') }}">@lang('navigation.credo')</a></li>
                            <li><a href="{{ route('contacts') }}">@lang('navigation.contacts')</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">@lang('navigation.all_resources')</a>
                        <ul class="menu nested vertical gnc-navigation-nested">
                            <li><a href="{{ route('bible') }}">@lang('navigation.bible')</a></li>
                            <li><a href="{{ route('resource_list', ['type' => 'event']) }}">@lang('navigation.events')</a></li>
                            <li><a href="{{ route('resource_list', ['type' => 'post']) }}">@lang('navigation.blog')</a></li>
                            <li><a href="{{ route('resource_list', ['type' => 'preaching']) }}">@lang('navigation.preaching')</a></li>
                            <li><a href="{{ route('gallery_list') }}">@lang('navigation.gallery') </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">@lang('navigation.language')</a>
                        <ul class="menu nested vertical gnc-navigation-nested">
                            <li><a href="{{ route('setlocale', ['lang' => 'ru'])  }}">Русский</a></li>
                            <li><a href="{{ route('setlocale', ['lang' => 'uk'])  }}">Українська</a></li>
                            <li><a href="{{ route('setlocale', ['lang' => 'en'])  }}">English</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('search')}}">Поиск</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
