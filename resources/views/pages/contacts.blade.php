@extends('layouts.data')

@section('content')
    <section class="gnc-contact-us">
        <div class="row medium-unstack">
            <div class="columns small-12 gnc-contact-us-data">
                <h1 class="gnc-contact-us-header">Ірпінська Біблійна Церква</h1>
                <ul class="gnc-contact-us-list">
                    <li class="address">м. Ірпінь, вул. Соборна (ІІІ Інтернаціоналу), 1, 08200</li>
                    <li class="email"><a href="mailto:">irpinchurch@gmail.com</a></li>
                    <li class="phone"> Тел. : (04597) 6-25-61 (адміністратор Віталій Колесник) </li>
                </ul>

                <h2>Как добраться</h2>

                <p>Транспорт: маршрут № 3 (Вокзал, Ірпінь – Вокзал, Буча), зупинка “Паспортний стіл”</p>

                <p>маршурут № 420 (БКЗ, Ірпінь – Академмістечко, Київ), зупинка “Паспортний стіл”</p>

                <div class="gnc-contact-us-map">
                    <img src="https://maps.googleapis.com/maps/api/staticmap?center=campbell&zoom=13&scale=false&size=600x300&maptype=roadmap&sensor=false&format=png&visual_refresh=true" alt="Google Map of campbell" alt="" />
                </div>
            </div>
        </div>
    </section>
@endsection
