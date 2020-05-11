@extends('layouts.data')

@section('content')
    <section class="gnc-contact-us">
        <div class="row medium-unstack">
            <div class="columns small-12 medium-6">
                <h3 class="gnc-contact-us-header">Церковь "Добрая весть"</h3>
                <div class="gnc-contact-us-section">
                    <img src="img/undraw/undraw_map_1r69.svg" alt="Kiwi standing on oval"/>
                    <p>г. Харьков, ул. Танкопия 88, 61000</p>
                </div>

                <div class="gnc-contact-us-section">
                    <img src="img/undraw/undraw_newsletter_vovu.svg" alt="Kiwi standing on oval"/>
                    <p><a href="mailto:">goodnews.ecb@gmail.com</a></p>
                </div>


                <div class="gnc-contact-us-section">
                    <img src="img/undraw/undraw_calling_kpbp.svg" alt="Kiwi standing on oval"/>
                    <p> Тел. : (095) 614-60-81 (Михаил)</p>
                </div>

                <h3>Как добраться</h3>

                <div class="gnc-contact-us-section">
                    <img src="img/undraw/undraw_navigator_a479.svg" alt="Kiwi standing on oval"/>
                    <p> от Транспорт: маршрут № 3 (Вокзал, Ірпінь – Вокзал, Буча), зупинка “Паспортний стіл”</p>
                </div>

            </div>
            <div class="columns small-12 medium-6">
                <h3>На карте</h3>
                <div class="gnc-contact-us-map">
                    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                        <script>(function () {
                                var setting = {
                                    "height": 550,
                                    "width": 1100,
                                    "zoom": 16,
                                    "queryString": "ул. Танкопия, 88, Харьков, Харьковская область, Украина",
                                    "place_id": "EmHRg9C7LiDQotCw0L3QutC-0L_QuNGPLCA4OCwg0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0LjQvdCwIjASLgoUChIJUy_cT64LJ0ER9wCeQWXKgiwQWCoUChIJrUds5lQKJ0ERnsH7-XNnYmU",
                                    "satellite": false,
                                    "centerCoord": [49.953006968893895, 36.338018850000005],
                                    "cid": "0xd083f3b83f7df2e8",
                                    "lang": "ru",
                                    "cityUrl": "/ukraine/kharkiv-19227",
                                    "cityAnchorText": "Карта [CITY1], Харьков, Украина",
                                    "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                    "embed_id": "207744"
                                };

                                var s = document.createElement('script');
                                s.src = 'https://1map.com/js/script-for-user.js?embed_id=207744';
                                s.async = true;
                                s.onload = function (e) {
                                    window.OneMap.initMap(setting)
                                };
                                var to = document.getElementsByTagName('script')[0];
                                to.parentNode.insertBefore(s, to);
                            })();</script>
                        <a href="https://1map.com/ru/map-embed">1 Map</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
