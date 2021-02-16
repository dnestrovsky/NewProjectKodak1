@extends('layouts.dashboard')


@section('title-block', 'Messages')

@section('content')
    <div class="row">
            <div class="alert alert-dark w-100" role="alert">
                <p class="lead">{{$data->message}}</p>
                <hr class="my-4">
                <div class="row">
                    <div class="col"><p>Имя: {{$data->name}}</p></div>
                    <div class="col"><p>Телефон: {{$data->phone}}</p></div>
                    <div class="col"><p>E-mail: {{$data->email}}</p></div>
                    <div class="col"><p>Отправлено: {{$data->created_at}}</p></div>
                </div>
                <p class="lead">
                    <a class="btn btn-outline-danger" href="{{ route('delete-message', $data->id) }}" role="button">Удалить</a>
                </p>
            </div>
    </div
@endsection
