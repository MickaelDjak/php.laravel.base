@php($id =  uniqid())

<div class="gnc-preaching-card-25d4 gnc-date-wrapper-d4k4">
    <div class="wrapper" style="background-image: url('{{ $preaching->image }}')">
        <div class="gnc-date">
            <span class="day">12</span>
            <span class="month">Aug</span>
            <span class="year">2016</span>
        </div>
        <div class="data">
            <div class="content">
                {{--                <span class="author">Jane Doe</span>--}}
                <h3 class="title"><a href="{{route('preaching_page')}}">{{ $preaching->title }}</a></h3>
                <div class="row align-middle">
                    <div class="column medium-6 small-12">
                        <p><b>Кто:</b> Смоленников Валерий</p>
                        <p><b>Когда:</b> Май 04, 2020</p>
                    </div>

                    <div class="column medium-6 small-12">
                        <p><b>Отрывок:</b> Івана 21:1-19</p>
                        <p><b>Длительность:</b> 41 мин.</p>
                    </div>
                </div>
                <p class="text">{{ $preaching->preview_text }}</p>

                <label for="show-menu-{{$id}}" class="menu-button"><i class="fa fa-2x fa-headphones"></i></label>
            </div>
            <input type="checkbox" id="show-menu-{{$id}}"/>
            <div class="menu-content">
                <audio controls src="{{ $preaching->audio_url }}"></audio>
            </div>
        </div>
    </div>
</div>


<div class="accordion">
    <div class="accordion-item">
        <a>Why is the moon sometimes out during the day?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse
                potenti.</p>
        </div>
    </div>
    <div class="accordion-item">
        <a>Why is the sky blue?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse
                potenti.</p>
        </div>
    </div>
    <div class="accordion-item">
        <a>Will we ever discover aliens?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse
                potenti.</p>
        </div>
    </div>
    <div class="accordion-item">
        <a>How much does the Earth weigh?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse
                potenti.</p>
        </div>
    </div>
    <div class="accordion-item">
        <a>How do airplanes stay up?</a>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse
                potenti.</p>
        </div>
    </div>
</div>
