@extends('layouts.dashboard')


@section('title-block', 'Messages')

@section('content')

    <!-- Home -->
    <section id="home">
                <div class="message-section">
                    <div class="message-width">
                        <ul class="breadcrumb">
                            <li><a href="/dashboard">Главная</a></li>
                            <li><a href="{{ route('messages-data') }}">Все сообщения</a></li>
                            <li>Сообщение</li>
                        </ul>
                        <div class="border"></div>
                        <div class="message-section-row">
                            <div class="message-section-col">
                                <div class="about">
                                    <p>
                                        {{$data->message}}
                                    </p>
                                    <a href="{{ route('delete-message', $data->id) }}" class="fas fa-trash"></a>
                                </div>
                            </div>
                            <div class="message-section-col">
                                <div class="skillsmessage">
                                    <div class="skillm">
                                        <div class="title">Имя: {{$data->name}}</div>
                                        <div class="progress">
                                            <div class="progress-bar p1"></div>
                                        </div>
                                    </div>

                                    <div class="skillm">
                                        <div class="title">email: {{$data->email}}</div>
                                        <div class="progress">
                                            <div class="progress-bar p2"></div>
                                        </div>
                                    </div>

                                    <div class="skillm">
                                        <div class="title">Телефон: {{$data->phone}}</div>
                                        <div class="progress">
                                            <div class="progress-bar p3"></div>
                                        </div>
                                    </div>
                                    <div class="skillm">
                                        <div class="title"><em>Дата: {{$data->created_at}}</em></div>
                                        <div class="progress">
                                            <div class="progress-bar p3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>
@endsection
