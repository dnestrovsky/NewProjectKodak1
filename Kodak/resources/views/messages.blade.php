@extends('layouts.dashboard')



@section('title-block', 'Сообщения')

@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <ul class="breadcrumb">
                    <li><a href="/dashboard">Главная</a></li>
                    <li>Все сообщения</li>
                </ul>
                @if(count($data) === 0)
                    <h3>Сообщений пока нет</h3>
                @endif
                <div class="blog-posts">
                    @foreach($data as $el)
                    <div class="post">
                        <a  href="{{ route('messages-data-one', $el->id) }}">
                        <img src="img/letter.png" alt="" class="post-img">
                        <div class="post-content">
                            <h3>{{$el->name}}</h3>
                            <span class="date">Дата: {{$el->created_at}}</span>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div>{{$data->links('default')}}</div>
            </div>
        </div>
    </section>
@endsection
