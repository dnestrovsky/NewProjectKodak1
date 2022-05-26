@extends('layouts.app')


@section('title-block', 'Kodak ― Главная страница')
@section('description-block',
    'Печать фотографий, фотосувениров, производство интерьерной и полиграфической продукции в
    городе Флорешть.',)

@section('content')
    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="landing-con-left">
                <div class="landing-con-container">
                    <h3>Фотосалон</h3>
                    <h2 class="red">Palitra</h2>
                    <h3>Kodak</h3>
                    <p>
                        Реставрация фото. Фото на документы. Цифровая печать фото. Ретушь
                        фото. Печать на кружках и тарелках. Пазлы. Печать на холсте
                    </p>
                    <div class="middle-main">
                        <a class="btn-main" href="viber://chat?number=37367358811">
                            <i class="fa-brands fa-viber"></i>
                        </a>
                        <a class="btn-main" href="whatsapp://send?phone=37367358811">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                        <a class="btn-main" href="https://telegram.me/palitra_kodak">
                            <i class="fa-brands fa-telegram"></i>
                        </a>
                        <a class="btn-main" href="https://www.facebook.com/palitra.kodak">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>
                    <div class="buttons">
                        <a href="{{ route('contact') }}">@lang('main.cont')</a>
                        <a href="#orele">@lang('main.grafic')</a>
                    </div>
                </div>
            </div>

            <div class="landing-con-right">
                <div class="landing-img-hero" style="
                            background: url(img/1581509785_IMG_1317043-removebg-preview.png)
                              no-repeat center;
                            background-size: contain;
                          "></div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.info')</h1>
            <div class="services-about">
                <div class="service-about">
                    <i class="icon fas fa-paint-brush"></i>
                    <h4>@lang('main.serv_collaj1')</h4>
                </div>

                <div class="service-about">
                    <i class="icon fas fa-images"></i>
                    <h4>@lang('main.serv_photo_dig')</h4>
                </div>

                <div class="service-about">
                    <i class="icon fas fa-panorama"></i>
                    <h4>@lang('main.serv_holst')</h4>
                </div>

                <div class="service-about">
                    <i class="icon fas fa-clone"></i>
                    <h4>@lang('main.main_info8')</h4>
                </div>

                <div class="service-about">
                    <i class="icon fas fa-user"></i>
                    <h4>@lang('main.main_info1')</h4>
                </div>

                <div class="service-about">
                    <i class="icon fas fa-image"></i>
                    <h4>@lang('main.main_info3')</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->

    <!-- Orele -->
    <section id="orele">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.grafic')</h1>
            <div class="grafik">
                <div data-day="1">
                    <h3>@lang('main.grafic_0')</h3><span>
                        <h4>@lang('main.liber')</h4>
                    </span>
                </div>
                <div data-day="2">
                    <h3>@lang('main.grafic_1')</h3><span>
                        <h4>8:00 – 16:00</h4>
                    </span>
                </div>
                <div data-day="3">
                    <h3>@lang('main.grafic_2')</h3><span>
                        <h4>8:00 – 16:00</h4>
                    </span>
                </div>
                <div data-day="4">
                    <h3>@lang('main.grafic_3')</h3><span>
                        <h4>8:00 – 16:00</h4>
                    </span>
                </div>
                <div data-day="5">
                    <h3>@lang('main.grafic_4')</h3><span>
                        <h4>8:00 – 16:00</h4>
                    </span>
                </div>
                <div data-day="6">
                    <h3>@lang('main.grafic_5')</h3><span>
                        <h4>8:00 – 14:00</h4>
                    </span>
                </div>
                <div data-day="7">
                    <h3>@lang('main.grafic_6')</h3><span>
                        <h4>8:00 – 14:00</h4>
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection
