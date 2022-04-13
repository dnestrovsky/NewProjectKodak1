@extends('layouts.app')


@section('title-block', 'Kodak ― Связь с нами')
@section('description-block', 'Все возможные контакты, которые предоставят связь с нами')

@section('content')

    <section id="works" class="dark1">
        <div class="inner-width">
            <!-- Contact -->
            <h2 class="section-title">@lang('main.cont')</h2>
            @include('inc.messages')
            <div class="contact-info">
                <div class="item">
                    <i class="fas fa-mobile-alt"></i>
                    @lang('main.cont_tel'): +373 (67) 358811
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

        </div>
        <div class="map">
            <iframe
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A3072969d27cf0140776cd65ccf4da041d5fdd341a441a7cce0f027ecdafed32f&amp;source=constructor"
                width="1063" height="583" frameborder="0"></iframe>
        </div>
    </section>



@endsection
