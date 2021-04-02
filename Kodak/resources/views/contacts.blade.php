@extends('layouts.app')


@section('title-block','Kodak - Связь с нами')
@section('title-page','Связь с нами')

@section('content')

    <section id="works" class="dark1">
        <div class="inner-width">
            <!-- Contact -->
            <h2 class="section-title">Наши yt yfsgvsdg</h2>
            <div class="contact-info">
                <div class="item">
                    <i class="fas fa-mobile-alt"></i>
                    Мобильный: +373 (67) 279199
                </div>

                <div class="item">
                    <i class="fas fa-envelope"></i>
                    kodak.floresti@mail.ru
                    kodak.floresti.kodak@gmail.ru
                </div>

                <div class="item">
                    <i class="fas fa-map-marker-alt"></i>
                    Флорешть, str. 31 august 1989 26/a
                </div>
            </div>

            <form action="{{ route('contact-form') }}" method="post" class="contact-form">
                @csrf

                <input type="text" name="name" class="nameZone" id="name" placeholder="Your Full Name">
                <input type="text" name="phone" class="emailZone" id="phone" placeholder="введите номер телефона">
                <input type="text" name="email" class="emailZone" id="email" placeholder="Your Email">
                <textarea name="message" id="message" class="messageZone" placeholder="Message"></textarea>
                <input type="submit" value="Send Message" class="btn">
            </form>
        </div>
    </section>



    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">О Нас</h1>
            <div class="about-content">
                <img src="images/pic.png" alt="" class="about-pic">
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
    </section>



@endsection
