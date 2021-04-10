@extends('layouts.dashboard')

@section('title-block', 'Административная панель')


@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <h1>Добро пожаловать в админ панель</h1>

                <div class="countdown-col col">
                    <div class="time middle">
                        <span>
                            <div id="d">{{ DB::table('contacts')->count() }}</div>
                            Сообщений
                        </span>
                            <span>
                        <div id="h">{{ DB::table('souvenirs')->count() }}</div>
                                Товаров
                            </span>
                    </div>
                </div>

                <div class="container">
                    <a href="#education">
                    <button class="btn btn1">Последние сообщения</button>
                    </a>
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
                            <a class="btn btn2" href="{{ route('messages-data-one', $el->id) }}" role="button">Подробнее</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
