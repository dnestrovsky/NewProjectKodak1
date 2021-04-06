@extends('layouts.app')


@section('title-block','Услуги')

@section('content')
    <!-- Services -->
    <section id="services" class="dark1">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.servicii')</h1>
            <div class="services">
                <div class="service">
                    <a href="#rest">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>Реставрация</h4>
                        <p>Реставрация фото</p>
                    </a>
                </div>

                <div class="service">
                    <i class="icon fas fa-images"></i>
                    <h4>Фото на документы</h4>
                    <p>Фото на документы любых размеров за 5 минут</p>
                </div>

                <div class="service">
                    <i class="icon fas fa-photo-video"></i>
                    <h4>Коллажи</h4>
                    <p>Коллажи любой сложности</p>
                </div>

                <div class="service">
                    <i class="icon fas fa-images"></i>
                    <h4>Цифровая печать фото</h4>
                    <p>Печать фото любых размеров</p>
                </div>

                <div class="service">
                    <i class="icon far fa-file-image"></i>
                    <h4>Печать на холсте</h4>
                    <p>Печать фото болших размеров на холсте</p>
                </div>

                <div class="service">
                    <i class="icon fas fa-camera-retro"></i>
                    <h4>Альбомы и фоторамки</h4>
                    <p>Вы можете подобрать и приобрести различные аксессуары для фотографий их хранения</p>
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
    </section>

    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">Реставрация фото</h1>
            <div class="gallery-section">
                <div class="inner-width">
                    <h1>Примеры</h1>
                    <div class="border"></div>
                    <div class="gallery">

                        <a href="img/1.jpg" class="image">
                            <img src="img/1.jpg" alt="">
                        </a>

                        <a href="img/2.jpg" class="image">
                            <img src="img/2.jpg" alt="">
                        </a>

                    </div>
                    <div class="border"></div>
                    <div class="gallery">
                    <a href="img/3.jpg" class="image">
                        <img src="img/3.jpg" alt="">
                    </a>

                    <a href="img/4.jpg" class="image">
                        <img src="img/4.jpg" alt="">
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">Фото на документы</h1>
            <div class="about-content">
                <img src="img/pic.png" alt="" class="about-pic">
                <div class="about-text">
                    <p>
                        В нашем магазине Вы можете сделать фото на документы любого размера. Наш коллектив сделает Вам качественный снимок нужного ракурса, который будет распечатан на профессиональной фотобумаге.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(".gallery").magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{
                enabled: true
            }
        });
    </script>

@endsection
