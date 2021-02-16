@extends('layouts.dashboard')


@section('title-block', 'Messages')
@section('title-page', 'Сообщения от пользователей')

@section('content')
    <div class="row">
        @foreach($data as $el)
            <div class="alert alert-dark w-100" role="alert">
                <p>Имя: {{$el->name}}</p> <p>Отправлено: {{$el->created_at}}</p>
                <p class="lead">
                    <a class="btn btn-outline-primary" href="{{ route('messages-data-one', $el->id) }}" role="button">Подробнее</a>
                </p>
            </div>
        @endforeach
    </div>
    <div class="w-100">{{$data->links()}}</div>
@endsection
