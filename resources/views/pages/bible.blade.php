@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="column">
            <h1>Русский синодальный перевод Синодальный <small>(66 книг)</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="column small-12 large-6">
            <h2 class="toc">Ветхий Завет</h2>
            <h3 class="toc">Пятикнижие</h3>
            <div class="list-group biblebooks">
                <a class="list-group-item"
                   href="https://bibleonline.ru/bible/rst66/gen/">Бытие
                    <span book="gen" min="1" max="50"
                          class="badge badge-default badge-pill">50</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/exo/">Исход
                    <span book="exo" min="1" max="40"
                          class="badge badge-default badge-pill">40</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/lev/">Левит
                    <span book="lev" min="1" max="27"
                          class="badge badge-default badge-pill">27</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/num/">Числа
                    <span book="num" min="1" max="36"
                          class="badge badge-default badge-pill">36</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/deu/">Второзаконие
                    <span book="deu" min="1" max="34"
                          class="badge badge-default badge-pill">34</span></a></div>
            <h3 class="toc">Исторические</h3>
            <div class="list-group biblebooks"><a class="list-group-item"
                                                  href="https://bibleonline.ru/bible/rst66/jos/">Иисус
                    Навин
                    <span book="jos" min="1" max="24"
                          class="badge badge-default badge-pill">24</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/jdg/">Судьи
                    <span book="jdg" min="1" max="21"
                          class="badge badge-default badge-pill">21</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/rut/">Руфь
                    <span book="rut" min="1" max="4" class="badge badge-default badge-pill">4</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1sa/">1 Царств
                    <span book="1sa" min="1" max="31"
                          class="badge badge-default badge-pill">31</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2sa/">2 Царств
                    <span book="2sa" min="1" max="24"
                          class="badge badge-default badge-pill">24</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1ki/">3 Царств
                    <span book="1ki" min="1" max="22"
                          class="badge badge-default badge-pill">22</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2ki/">4 Царств
                    <span book="2ki" min="1" max="25"
                          class="badge badge-default badge-pill">25</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1ch/">1
                    Паралипоменон
                    <span book="1ch" min="1" max="29"
                          class="badge badge-default badge-pill">29</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2ch/">2
                    Паралипоменон
                    <span book="2ch" min="1" max="36"
                          class="badge badge-default badge-pill">36</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/ezr/">Ездра
                    <span book="ezr" min="1" max="10"
                          class="badge badge-default badge-pill">10</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/neh/">Неемия
                    <span book="neh" min="1" max="13"
                          class="badge badge-default badge-pill">13</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/est/">Есфирь
                    <span book="est" min="1" max="10"
                          class="badge badge-default badge-pill">10</span></a></div>
            <h3 class="toc">Учительные</h3>
            <div class="list-group biblebooks"><a class="list-group-item"
                                                  href="https://bibleonline.ru/bible/rst66/job/">Иов
                    <span book="job" min="1" max="42"
                          class="badge badge-default badge-pill">42</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/psa/">Псалтирь
                    <span book="psa" min="1" max="150" class="badge badge-default badge-pill">150</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/pro/">Притчи
                    <span book="pro" min="1" max="31"
                          class="badge badge-default badge-pill">31</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/ecc/">Екклеcиаст
                    <span book="ecc" min="1" max="12"
                          class="badge badge-default badge-pill">12</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/sng/">Песня песней
                    <span book="sng" min="1" max="8" class="badge badge-default badge-pill">8</span></a>
            </div>
            <h3 class="toc">Большие пророки</h3>
            <div class="list-group biblebooks"><a class="list-group-item"
                                                  href="https://bibleonline.ru/bible/rst66/isa/">Исаия
                    <span book="isa" min="1" max="66"
                          class="badge badge-default badge-pill">66</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/jer/">Иеремия
                    <span book="jer" min="1" max="52"
                          class="badge badge-default badge-pill">52</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/lam/">Плач Иеремии
                    <span book="lam" min="1" max="5" class="badge badge-default badge-pill">5</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/ezk/">Иезекииль
                    <span book="ezk" min="1" max="48"
                          class="badge badge-default badge-pill">48</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/dan/">Даниил
                    <span book="dan" min="1" max="12"
                          class="badge badge-default badge-pill">12</span></a></div>
            <h3 class="toc">Малые пророки</h3>
            <div class="list-group biblebooks"><a class="list-group-item"
                                                  href="https://bibleonline.ru/bible/rst66/hos/">Осия
                    <span book="hos" min="1" max="14"
                          class="badge badge-default badge-pill">14</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/jol/">Иоиль
                    <span book="jol" min="1" max="3" class="badge badge-default badge-pill">3</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/amo/">Амос
                    <span book="amo" min="1" max="9" class="badge badge-default badge-pill">9</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/oba/">Авдий
                    <span book="oba" min="1" max="1" class="badge badge-default badge-pill">1</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/jon/">Иона
                    <span book="jon" min="1" max="4" class="badge badge-default badge-pill">4</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/mic/">Михей
                    <span book="mic" min="1" max="7" class="badge badge-default badge-pill">7</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/nam/">Наум
                    <span book="nam" min="1" max="3" class="badge badge-default badge-pill">3</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/hab/">Аввакум
                    <span book="hab" min="1" max="3" class="badge badge-default badge-pill">3</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/zep/">Софония
                    <span book="zep" min="1" max="3" class="badge badge-default badge-pill">3</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/hag/">Аггей
                    <span book="hag" min="1" max="2" class="badge badge-default badge-pill">2</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/zec/">Захария
                    <span book="zec" min="1" max="14"
                          class="badge badge-default badge-pill">14</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/mal/">Малахия
                    <span book="mal" min="1" max="4" class="badge badge-default badge-pill">4</span></a>
            </div>
        </div>
        <div class="column small-12 large-6">
            <h2 class="toc">Новый Завет</h2>
            <h3 class="toc">Евангелия и Деяния</h3>
            <div class="list-group biblebooks">
                <a class="list-group-item"
                   href="https://bibleonline.ru/bible/rst66/mat/">Матфея
                    <span book="mat" min="1" max="28"
                          class="badge badge-default badge-pill">28</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/mrk/">Марка
                    <span book="mrk" min="1" max="16"
                          class="badge badge-default badge-pill">16</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/luk/">Луки
                    <span book="luk" min="1" max="24"
                          class="badge badge-default badge-pill">24</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/jhn/">Иоанна
                    <span book="jhn" min="1" max="21"
                          class="badge badge-default badge-pill">21</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/act/">Деяния
                    <span book="act" min="1" max="28"
                          class="badge badge-default badge-pill">28</span></a></div>
            <h3 class="toc">Соборные послания</h3>
            <div class="list-group biblebooks"><a class="list-group-item"
                                                  href="https://bibleonline.ru/bible/rst66/jas/">Иакова
                    <span book="jas" min="1" max="5" class="badge badge-default badge-pill">5</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1pe/">1 Петра
                    <span book="1pe" min="1" max="5" class="badge badge-default badge-pill">5</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2pe/">2 Петра
                    <span book="2pe" min="1" max="3" class="badge badge-default badge-pill">3</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1jn/">1 Иоанна
                    <span book="1jn" min="1" max="5" class="badge badge-default badge-pill">5</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2jn/">2 Иоанна
                    <span book="2jn" min="1" max="1" class="badge badge-default badge-pill">1</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/3jn/">3 Иоанна
                    <span book="3jn" min="1" max="1" class="badge badge-default badge-pill">1</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/jud/">Иуда
                    <span book="jud" min="1" max="1" class="badge badge-default badge-pill">1</span></a>
            </div>
            <h3 class="toc">Послания Павла</h3>
            <div class="list-group biblebooks"><a class="list-group-item"
                                                  href="https://bibleonline.ru/bible/rst66/rom/">Римлянам
                    <span book="rom" min="1" max="16"
                          class="badge badge-default badge-pill">16</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1co/">1 Коринфянам
                    <span book="1co" min="1" max="16"
                          class="badge badge-default badge-pill">16</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2co/">2 Коринфянам
                    <span book="2co" min="1" max="13"
                          class="badge badge-default badge-pill">13</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/gal/">Галатам
                    <span book="gal" min="1" max="6" class="badge badge-default badge-pill">6</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/eph/">Ефесянам
                    <span book="eph" min="1" max="6" class="badge badge-default badge-pill">6</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/php/">Филиппийцам
                    <span book="php" min="1" max="4" class="badge badge-default badge-pill">4</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/col/">Колоссянам
                    <span book="col" min="1" max="4" class="badge badge-default badge-pill">4</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1th/">1
                    Фессалоникийцам
                    <span book="1th" min="1" max="5" class="badge badge-default badge-pill">5</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2th/">2
                    Фессалоникийцам
                    <span book="2th" min="1" max="3" class="badge badge-default badge-pill">3</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/1ti/">1 Тимофею
                    <span book="1ti" min="1" max="6" class="badge badge-default badge-pill">6</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/2ti/">2 Тимофею
                    <span book="2ti" min="1" max="4" class="badge badge-default badge-pill">4</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/tit/">Титу
                    <span book="tit" min="1" max="3" class="badge badge-default badge-pill">3</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/phm/">Филимону
                    <span book="phm" min="1" max="1" class="badge badge-default badge-pill">1</span></a>
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/heb/">Евреям
                    <span book="heb" min="1" max="13"
                          class="badge badge-default badge-pill">13</span></a></div>
            <h3 class="toc">Пророческие</h3>
            <div class="list-group biblebooks">
                <a class="list-group-item" href="https://bibleonline.ru/bible/rst66/rev/">Откровение
                    <span book="rev" min="1" max="22" class="badge badge-default badge-pill">22</span></a></div>
        </div>
    </div>
@endsection
