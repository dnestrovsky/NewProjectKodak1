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
                <h2>Что мы делаем?</h2>
                <h1> </h1>
                <div class="sm">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-viber"></a>
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fas fa-envelope"></a>
                    <a href="#" class="fab fa-mail"></a>
                </div>
                <div class="buttons">
                    <a href="#">Связаться с нами</a>
                    <a href="#">Сделать заказ</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">О Нас</h1>
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
                <h1 class="section-title">График работы</h1>
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
@endsection
