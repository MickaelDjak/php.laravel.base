<footer class="gnc-navigation-footer">
    <div class="row gnc-navigation-footer-data">
        <div class="large-4 medium-6 small-12 column">
            <h4 class="gnc-navigation-footer-title">@lang('navigation.name')</h4>
            <div class="gnc-navigation-footer-block">
                <p>@lang('navigation.address')</p>
            </div>
            <div class="gnc-navigation-footer-block">
                <p>+38 (095) 614-60-81</p>
            </div>
            <div class="gnc-navigation-footer-block">
                <p>goodnews.ecb@gmail.com</p>
            </div>
        </div>

        <div class="large-4 medium-6 small-12 column">
            <h4 class="gnc-navigation-footer-title">Навигация</h4>
            <ul class="menu vertical gnc-navigation-footer-menu">
                <li>
                    <a href="{{ url('/about') }}">@lang('navigation.about_as')</a>
                    <ul class="nested vertical menu">
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
        </div>

        <div class="large-4 medium-12 column">
            <h4 class="gnc-navigation-footer-title">@lang('navigation.mailing')</h4>
            <div class="gnc-navigation-footer-block">
                <p>@lang('navigation.mailing_text')</p>
                <input type="text" placeholder="@lang('navigation.mailing_input') е-mail"/>
                <a class="button expanded subscribe-button" href="#">@lang('navigation.subscribe')</a>
            </div>
        </div>
    </div>

    <div class="gnc-navigation-footer-right">
        <div class="row align-justify align-middle">
            <div class="column-8">© @lang('navigation.right') 2020</div>

            <ul class="menu column-4">
                @guest
                    <li>
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Выйти') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</footer>

