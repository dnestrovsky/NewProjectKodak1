@extends('layouts.app')


@section('title-block', 'Kodak ― Главная страница')
@section('description-block', 'Palitra-Kodak - предоставляем фотоуслуги в городе Floresti уже на протяжении больше 10-ти
    лет')

@section('content')
    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                @include('inc.messages')
                <h1> </h1>

                <div class="icons">
                    <a href="viber://chat?number=37367358811" class="viber"><i class="fab fa-viber"></i></a>
                    <a href="whatsapp://send?phone=37367358811" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://telegram.me/palitra_kodak" class="telegram"><i class="fab fa-telegram"></i></a>
                </div>

                <div class="buttons">
                    <a href="{{ route('contact') }}">@lang('main.cont')</a>
                    <a href="#about">@lang('main.info')</a>
                    <a href="#orele">@lang('main.grafic')</a>
                </div>
            </div>
        </div>
    </section>

    @include('inc.info')

    <!-- Education -->
    <section id="orele">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.grafic')</h1>
            <div class="grafik-test">
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
    </section>
@endsection
