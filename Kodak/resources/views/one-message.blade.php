@extends('layouts.dashboard')


@section('title-block', 'Messages')

@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">

                <div class="profile-card">
                    <div class="card-header">
                        <div class="pic">
                            <img src="../img/pic.png" alt="">
                        </div>
                        <div class="name">{{$data->name}}</div>
                        <div class="desc">Пользователь</div>
                        <div class="sm">
                            <a href="{{ route('delete-message', $data->id) }}" class="fas fa-trash"></a>
                        </div>
                        <a href="#" class="contact-btn">{{$data->message}}</a>
                    </div>
                    <div class="card-footer">
                        <div class="numbers">
                            <div class="item">
                                <span>{{$data->phone}}</span>
                                Телефон
                            </div>
                            <div class="border"></div>
                            <div class="item">
                                <span>{{$data->email}}</span>
                                E-mail
                            </div>
                            <div class="border"></div>
                            <div class="item">
                                <span>{{$data->created_at}}</span>
                                Отправлено
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
