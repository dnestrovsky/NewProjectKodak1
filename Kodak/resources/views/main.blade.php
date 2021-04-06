@extends('layouts.app')


@section('title-block', 'Kodak - Главная страница')

@section('content')
    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <div class="container">
                    <h2>Ждем окончания разработки...</h2>

                    <div class="count">
                        <div class="countd">
                            <span id="days">00</span>
                            Дней
                        </div>

                        <div class="countd">
                            <span id="hours">00</span>
                            Часов
                        </div>

                        <div class="countd">
                            <span id="minutes">00</span>
                            Минут
                        </div>

                        <div class="countd">
                            <span id="seconds">00</span>
                            Секунд
                        </div>
                    </div>
                </div>
                <h2>@lang('main.serv_main')</h2>
                <h1> </h1>
                <div class="sm">
                    <a href="#" class="fab fa-viber"></a>
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fas fa-envelope"></a>
                </div>
                <div class="buttons">
                    <a href="#">@lang('main.cont')</a>
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
                        <span>Ретушь фото</span>
                    </h3>
                    <p>
                        Печать фотографий осуществляется в японской фотолаборатории Noritsu 2901QSS.

                        Эта фотолаборатория позволяет печатать фотографии высочайшего качества.

                        Фотографии печатаются в течении 24 часов с момента заказа.

                        фотография сохраняет свой цвет в течении 100 лет.

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

        var count = new Date("apr 10,2021 00:01:00").getTime();
        var x = setInterval(function() {
            var now = new Date().getTime();
            var d = count - now;

            var days = Math.floor(d/(1000*60*60*24));
            var hours = Math.floor((d%(1000*60*60*24))/(1000*60*60));
            var minutes = Math.floor((d%(1000*60*60))/(1000*60));
            var seconds = Math.floor((d%(1000*60))/1000);

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            if(d <= 0){
                clearInterval(x);
            }
        },1000);
    </script>
@endsection
