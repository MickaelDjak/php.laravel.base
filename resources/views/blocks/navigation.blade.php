<div class="title-bar" data-responsive-toggle="main-navigation-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="main-navigation-menu"></button>
    <div class="title-bar-title">Меню</div>
</div>

<div data-sticky-container>
    <div class="top-bar " data-sticky data-options="marginTop:0;" id="main-navigation-menu"
         data-tab-bar="main-navigation-menu" data-responsive-toggle>
        <div class="top-bar-left">
            <a href="{{ url('/') }}">
                <img src="{{ asset('/img/logo/text.png') }}" alt="good news church logo text" class="logo">
            </a>
        </div>

        <div class="top-bar-right">
            <ul class="menu">
                @include('blocks.section_links')
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
</div>
