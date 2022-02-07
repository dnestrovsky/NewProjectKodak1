@extends('layouts.dashboard')

@section('title-block', 'Административная панель')


@section('content')
    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <h2>Приветствую вас, {{ Auth::user()->name }}</h2>
                <div class="services">
                    <div class="service">
                        <i class="icon fas fa-paint-brush"></i>
                        <h2>{{ DB::table('contacts')->count() }}</h2>
                        <p><em>Общее количество сообщений</em></p>
                    </div>

                    <div class="service">
                        <i class="icon fas fa-users"></i>
                        <h2>{{ DB::table('users')->count() }}</h2>
                        <p><em>Общее количество админов</em></p>
                    </div>
                    <div class="service">
                        <i class="icon fas fa-pager"></i>
                        <h2>{{ DB::table('souvenirs')->count() }}</h2>
                        <p><em>Общее количество товаров</em></p>
                    </div>
                </div>

                <div class="buttons">
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

@endsection
