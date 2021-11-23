@extends('layouts.app')


@section('title-block', 'Kodak - Главная страница')

@section('content')
    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                @include('inc.messages')
                <h2>@lang('main.serv_main')</h2>
                <h1> </h1>
                <div class="sm">
                    <a href="{{ route('contact') }}" class="fab fa-viber viber"></a>
                    <a href="{{ route('contact') }}" class="fas fa-envelope"></a>
                </div>
                <div class="buttons">
                    <a href="{{ route('contact') }}">@lang('main.cont')</a>
                    <a href="#about">@lang('main.info')</a>
                </div>
            </div>
        </div>
    </section>

 @include('inc.info')

        <!-- Education -->
        <section id="education">
            <div class="inner-width">
                <h1 class="section-title">@lang('main.grafic')</h1>
                <div class="time-line">
                <div class="block">
                        <h4>Выходной</h4>
                        <h3>@lang('main.grafic_1')</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>@lang('main.grafic_1')</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>@lang('main.grafic_2')</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>@lang('main.grafic_3')</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 16:00</h4>
                        <h3>@lang('main.grafic_4')</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 14:00</h4>
                        <h3>@lang('main.grafic_5')</h3>
                    </div>

                    <div class="block">
                        <h4>8:00 - 14:00</h4>
                        <h3>@lang('main.grafic_6')</h3>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
