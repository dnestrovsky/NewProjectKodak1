@extends('layouts.app')


@section('title-block','Kodak - Связь с нами')
@section('title-page','Связь с нами')

@section('content')

    <section id="works" class="dark1">
        <div class="inner-width">
            <!-- Contact -->
            <h2 class="section-title">@lang('main.cont')</h2>
            <div class="contact-info">
                <div class="item">
                    <i class="fas fa-mobile-alt"></i>
                    @lang('main.cont_tel'): +373 (67) 279199
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

                <input type="text" name="name" class="nameZone" id="name" placeholder="@lang('main.cont_name')">
                <input type="text" name="phone" class="emailZone" id="phone" placeholder="@lang('main.cont_number')">
                <input type="text" name="email" class="emailZone" id="email" placeholder="@lang('main.cont_email')">
                <textarea name="message" id="message" class="messageZone" placeholder="@lang('main.cont_message')"></textarea>
                <input type="submit" value="@lang('main.cont_send')" class="btn">
            </form>
        </div>
    </section>


    @include('inc.info')



@endsection
