@php($id =  uniqid())

<div class="gnc-preaching-card-25d4 gnc-date-wrapper-d4k4">
    <div class="gnc-date">
        <span class="day">12</span>
        <span class="month">Aug</span>
        <span class="year">2016</span>
    </div>
    <header class="gnc-preaching-card-25d4-header" style="background-image: url('{{ url($preaching->image) }}')"></header>

    <main  class="gnc-preaching-card-25d4-main">
        <h3 class="title"><a href="{{route('preaching_page', ['slug' => $preaching->slug])}}">{{ $preaching->title }}</a></h3>
        @include('blocks.tags.list',['tags' => $preaching->tags])
        <p>{{ $preaching->overview }}</p>
        <p><b>Кто:</b> Смоленников Валерий</p>
        <p><b>Отрывок:</b> Івана 21:1-19</p>
        <p><b>Длительность:</b> 41 мин.</p>

    </main>
    <nav class="gnc-preaching-card-25d4-nav">
        <a href="#"><label for="show-menu-{{$id}}-s0">Читать</label></a>
        <a href="#"><label for="show-menu-{{$id}}-s1">Слушать</label></a>
        <a href="#"><label for="show-menu-{{$id}}-s2">Смотреть</label></a>
        <a href="{{route('preaching_page', ['slug' => $preaching->slug])}}">Перейти</a>
    </nav>
    <ul class="gnc-preaching-card-25d4-content accordion">
        <li class="accordion-item">
            <input id="show-menu-{{$id}}-s0" class="hide" type="checkbox"/>
            <div class="accordion-child">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis ultrices
                nunc. Suspendisse a magna purus. In hac habitasse platea dictumst. Nullam sed nisl quis sem dignissim
                luctus. Etiam luctus mauris nulla, et efficitur massa efficitur ac.
            </div>
        </li>
        <li class="accordion-item">
            <input id="show-menu-{{$id}}-s1" class="hide" type="checkbox"/>
            <div class="accordion-child">
            	<audio controls>
					<source src="/{{ $preaching->audio }}" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio>
            </div>
        </li>
        <li class="accordion-item">
            <input id="show-menu-{{$id}}-s2" class="hide" type="checkbox"/>

            <p class="accordion-child">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis ultrices
                nunc. Suspendisse a magna purus. In hac habitasse platea dictumst. Nullam sed nisl quis sem dignissim
                luctus. Etiam luctus mauris nulla, et efficitur massa efficitur ac.</p>
        </li>
    </ul>
</div>
