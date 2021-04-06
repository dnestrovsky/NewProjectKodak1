@extends('layouts.app')


@section('title-block', 'Kodak - Главная страница')

@section('content')
    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <div class="countdown-col col">
                    <div class="time middle">
          <span>
            <div id="d">12</div>
            Days
          </span>
                        <span>
            <div id="h">06</div>
            Hours
          </span>
                        <span>
            <div id="m">35</div>
            Minutes
          </span>
                        <span>
            <div id="s">54</div>
            Seconds
          </span>
                    </div>
                </div>
                <h2>@lang('main.serv_main')</h2>
                <h1> </h1>
                <div class="sm">
                    <a href="#" class="fab fa-viber viber"></a>
                    <a href="#" class="fab fa-whatsapp whatsapp"></a>
                    <a href="#" class="fas fa-envelope"></a>
                </div>
                <div class="buttons">
                    <a href="/contact">@lang('main.cont')</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.info')</h1>
            <div class="about-content">
                <img src="img/pic.png" alt="" class="about-pic">
                <div class="about-text">
                    <h2>Palitra Kodak</h2>
                    <h3>
                        <span>Фото на документы</span>
                        <span>Альбомы и Фоторамки</span>
                        <span>Реставрация фото</span>
                    </h3>
                    <p>
                        Печать фотографий

                    </p>
                </div>
            </div>
        </div>
        <!-- Education -->
        <section id="education">
            <div class="inner-width">
                <h1 class="section-title">@lang('main.grafic')</h1>
                <div class="time-line">
                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>Вторник</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>Среда</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>Четверг</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>Пятница</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 14:00</h4>
                        <h3>Суббота</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 14:00</h4>
                        <h3>Воскресение</h3>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script type="text/javascript">

        var comingdate = new Date("apr 10, 2021 00:00:00");

        var d = document.getElementById('d');
        var h = document.getElementById('h');
        var m = document.getElementById('m');
        var s = document.getElementById('s');

        var x = setInterval(function(){
            var now = new Date();
            var des = comingdate.getTime() - now.getTime();
            var days = Math.floor(des/(1000 * 60 * 60 * 24));
            var hours = Math.floor(des%(1000 * 60 * 60 * 24) / (1000 * 60 *60));
            var mins = Math.floor(des%(1000 * 60 * 60) / (1000 * 60));
            var secs = Math.floor(des%(1000 * 60) / 1000);

            d.innerHTML = getTrueNumber(days);
            h.innerHTML = getTrueNumber(hours);
            m.innerHTML = getTrueNumber(mins);
            s.innerHTML = getTrueNumber(secs);

            if(des <= 0) clearInterval(x);

        },1000);

        function getTrueNumber(x) {
            if (x<10) return '0'+x;
            else return x;
        }

    </script>
@endsection
