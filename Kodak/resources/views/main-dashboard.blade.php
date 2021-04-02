@extends('layouts.dashboard')

@section('title-page', 'Административная панель')


@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <h1>Добро пожаловать в админ панель</h1>

                <div class="container">
                    <div class="count">
                        <div class="countd">
                            <span id="days">{{ DB::table('contacts')->count() }}</span>
                            Сообщений
                        </div>

                        <div class="countd">
                            <span id="hours">00</span>
                            Заказов
                        </div>
                    </div>
                </div>

                <div class="container">
                    <button class="btn btn1">Последние сообщения</button>
                    <button class="btn btn1">Последние заказы</button>
                </div>
            </div>
        </div>
    </section>

    <section id="education">
        <div class="inner-width">
            <h1 class="section-title">Последние сообщения</h1>
            @foreach($data1 as $el)
                <div class="time-line">

                    <div class="block">
                        <h4>{{$el->name}}</h4>
                        <h3>Дата: {{$el->created_at}}</h3>
                        <p class="lead">
                            <a class="btn btn-outline-primary" href="{{ route('messages-data-one', $el->id) }}" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="dark">
        <div class="inner-width">
            <h1 class="section-title">Последние заказы</h1>
            <div class="services">
                <div class="service">
                    <a href="contact.html">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>Заказ N1</h4>
                        <p>Реставрация фото</p>
                    </a>
                </div>

                <div class="service">
                    <a href="contact.html">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>Заказ N1</h4>
                        <p>Реставрация фото</p>
                    </a>
                </div>

                <div class="service">
                    <a href="contact.html">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>Заказ N1</h4>
                        <p>Реставрация фото</p>
                    </a>
                </div>

                <div class="service">
                    <a href="contact.html">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>Заказ N1</h4>
                        <p>Реставрация фото</p>
                    </a>
                </div>

                <div class="service">
                    <a href="contact.html">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>Заказ N1</h4>
                        <p>Реставрация фото</p>
                    </a>
                </div>

                <div class="service">
                    <a href="contact.html">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>Заказ N1</h4>
                        <p>Реставрация фото</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
