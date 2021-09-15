@extends('layouts.app')


@section('title-block', 'Сувениры')

@section('content')

    <section id="works" class="dark1">
        <div class="inner-width">
            <!-- Contact -->
            <h2 class="section-title">{{$data->__('name')}}</h2>
            <div class="about-content">
                <div class="dbl-border">
                    <div class="image-wrapper">
                <img src="{{Storage::url($data->image)}}" alt="">
                    </div>
                </div>
                <div class="about-textsouv">

                <p class="descrip">{{ $data->__('description') }}</p>

                </div>
            </div>
        </div>
    </section>
    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.serv_exemplu')</h1>
            <div class="about-content">
                <div class="works">
                    <a href="#" class="work">
                        <img src="../img/Photo6.jpg" alt="">
                        <div class="info">
                            <h3>@lang('main.serv_exemplu')</h3>
                        </div>
                    </a>

                    <a href="#" class="work">
                        <img src="../img/Photo2.jpg" alt="">
                        <div class="info">
                            <h3>@lang('main.serv_exemplu')</h3>
                        </div>
                    </a>

                    <a href="#" class="work">
                        <img src="../img/Photo3.jpg" alt="">
                        <div class="info">
                            <h3>@lang('main.serv_exemplu')</h3>
                        </div>
                    </a>

                    <a href="#" class="work">
                        <img src="../img/Photo4.jpg" alt="">
                        <div class="info">
                            <h3>@lang('main.serv_exemplu')</h3>
                        </div>
                    </a>

                    <a href="#" class="work">
                        <img src="../img/Photo5.jpg" alt="">
                        <div class="info">
                            <h3>@lang('main.serv_exemplu')</h3>
                        </div>
                    </a>

                    <a href="#" class="work">
                        <img src="../img/Photo7.jpg" alt="">
                        <div class="info">
                            <h3>@lang('main.serv_exemplu')</h3>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </section>
@endsection
