@extends('layouts.app')


@section('title-block', 'Kodak ― Связь с нами')
@section('description-block', 'Все возможные контакты, которые предоставят связь с нами')

@section('content')

    <section id="works">
        <div class="inner-width">
            <!-- Contact -->
            <h2 class="section-title">@lang('main.cont')</h2>
            <div class="contact-info">
                <div class="item">
                    <i class="fas fa-mobile-alt"></i>
                    +373 (67) 358811
                </div>

                <div class="item">
                    <i class="fas fa-envelope"></i>
                    kodak.floresti@mail.ru
                </div>

                <div class="item">
                    <i class="fas fa-map-marker-alt"></i>
                    Флорешть, str. 31 august 1989 26/a
                </div>
            </div>
        </div>
    </section>



@endsection
