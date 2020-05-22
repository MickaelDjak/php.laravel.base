@include('blocks.search.index')

@yield('sidebar_top')

<div class="gnc-sidebar-section">
    <h4>Сегодня читаем</h4>
    <p>Біблія за два роки · Псалми 90-92</p>
    <a href="#">Читать</a>
</div>

<div class="gnc-sidebar-section">
    <h4>Сегодня молимся</h4>
    <p>Сьогодні молимось за місію і місіонерів: за утворення нових церков, за місіонерів у небезпеці, за особисте
        благовістя.</p>
    <a href="#">Молиться</a>
</div>

<div class="gnc-sidebar-section">
    <h4>Пожертвовать</h4>
    <p>Матеріальна участь у потребах громади..</p>
    <a href="#">Пожертвовать</a>
</div>

<div class="gnc-sidebar-section gnc-form-box">
    <h4><a href="{{ url('/subscribe') }}">@lang('navigation.subscribe')</a></h4>
    <p>Підпишіться на корисну розсилку новин та статей для Вашой душі!</p>
    <label for="subscribe_name">Звернемося до Вас за ім’ям</label>
    <input  id="subscribe_name" type="text" placeholder="Ім'я" class="gnc-form-box-input"/>
    <label for="subscribe_email">Ви будете отримувати свіжі новини</label>
    <input id="subscribe_email" type="text" placeholder="Ваша пошта" class="gnc-form-box-input"/>
    <a class="button expanded subscribe-button" href="#">@lang('navigation.subscribe')</a>
</div>


@yield('sidebar_bottom')

@yield('sidebar_tag_list')
