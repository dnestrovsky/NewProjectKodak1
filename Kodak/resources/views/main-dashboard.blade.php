@extends('layouts.dashboard')

@section('title-block', 'Административная панель')


@section('content')
    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <h1>Админ-панель</h1>
                <div class="services">
                    <div class="service">
                        <i class="icon fas fa-paint-brush"></i>
                        <h4>{{ DB::table('contacts')->count() }} Сообщений</h4>
                        <p>Общее количество сообщений</p>
                    </div>

                    <div class="service">
                        <i class="icon fas fa-pager"></i>
                        <h4>{{ DB::table('souvenirs')->count() }} Товаров</h4>
                        <p>Общее количество товаров</p>
                    </div>
                </div>

                <div class="buttons">
                    <a href="#education">Последние сообщения</a>
                    @if (Route::has('login'))
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Выйти</a>
                            </form>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </section>


    <!-- Education -->
    <section id="education">
        <div class="inner-width">
            <h1 class="section-title">Последние сообщения</h1>
            @if(count($data1) === 0)
                <h1 style="text-align: center">Сообщений пока нет</h1>
            @endif
            <div class="time-line">
                @foreach($data1 as $el)
                <div class="block">
                    <h4>Дата: {{$el->created_at}}</h4>
                    <h3>{{$el->message}}</h3>
                    <div class="buttons">
                        <a href="{{ route('messages-data-one', $el->id) }}" role="button">Подробнее</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
