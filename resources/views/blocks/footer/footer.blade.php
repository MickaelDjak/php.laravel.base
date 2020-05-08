<footer class="gnc-navigation">
    <div class="row gnc-navigation-data">
        <div class="medium-3 small-12 column">
            <h4 class="gnc-navigation-title">@lang('navigation.name')</h4>
            <p>@lang('navigation.description')</p>
        </div>
        <div class="medium-3 small-12 column">
            <h4 class="gnc-navigation-title">@lang("navigation.contacts")</h4>
            <div class="gnc-navigation-block">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p>@lang('navigation.address')</p>
            </div>
            <div class="gnc-navigation-block">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>+38 (095) 614-60-81</p>
            </div>
            <div class="gnc-navigation-block">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <p>goodnews.ecb@gmail.com</p>
            </div>
        </div>

        <div class="medium-2 small-12 column">
            <h4 class="gnc-navigation-title">Навигация</h4>
            <ul class="menu vertical  gnc-navigation-menu-links">
                @include('blocks.navigation.links')
            </ul>
        </div>

        <div class="medium-4 small-12 column">
            <h4 class="gnc-navigation-title">@lang('navigation.mailing')</h4>
            <p>@lang('navigation.mailing_text')</p>
            <input type="text" placeholder="@lang('navigation.mailing_input') е-mail"/>
            <a class="button expanded subscribe-button" href="#">@lang('navigation.subscribe')</a>
        </div>
    </div>

    <div class="gnc-navigation-right">
        <div class="row">
            <p class="column">© @lang('navigation.right') 2020</p>
        </div>
    </div>
</footer>

