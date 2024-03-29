@extends('layouts.dashboard')

@section('title-block', 'Административная панель')


@section('content')

    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Сувениров</div>
                <div class="number">{{ DB::table('souvenirs')->count() }}</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Админов</div>
                <div class="number">{{ DB::table('users')->count() }}</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bxs-cart-add cart two'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Количество сообщений</div>
                <div class="number">{{ DB::table('contacts')->count() }}</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-cart cart three'></i>
        </div>
    </div>

    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">Последний добавленный сувенир</div>
            @foreach ($souvenirs as $souvenir)
                <div class="sales-details">
                    <ul class="details">
                        <li class="topic">#</li>
                        <li>{{ $souvenir->id }}</li>
                    </ul>
                    <ul class="details">
                        <li class="topic">Название</li>
                        <li>{{ $souvenir->name }}</li>
                    </ul>
                    <ul class="details">
                        <li class="topic">Дата обновления</li>
                        <li>{{ date('d F Y', strtotime($souvenir->updated_at)) }}</li>
                    </ul>
                    <ul class="details">
                        <li class="topic">Дата создания</li>
                        <li>{{ date('d F Y', strtotime($souvenir->created_at)) }}</li>
                    </ul>
                </div>
            @endforeach
            <div class="button">
                <a href="{{ route('souvenirs.index') }}">Показать все</a>
            </div>
        </div>
        <div class="top-sales box">
            <div class="title">Последние сообщения</div>
            <ul class="top-sales-details">
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">Дата</span>
                </li>
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">$1567</span>
                </li>
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">$1234</span>
                </li>
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">$2312</span>
                </li>
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">$1456</span>
                </li>
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">$2345</span>
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">$2345</span>
                </li>
                <li>
                    <a href="#">
                        <img src="img/letter.png" alt="">
                        <span class="product">Сообщение</span>
                    </a>
                    <span class="price">$1245</span>
                </li>
            </ul>
        </div>
    </div>

@endsection
