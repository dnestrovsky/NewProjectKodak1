@extends('dashboard')


@section('title-block', 'Messages')

@section('content')
    <div class="row">
            <div class="alert alert-dark w-100" role="alert">
                <p class="lead">{{$data->message}}</p>
                <hr class="my-4">
                <p>Имя: {{$data->name}}</p>
                <p>Номер телефона: {{$data->phone}}</p>
                <p>E-mail: {{$data->email}}</p>
                <p>Отправлено: {{$data->created_at}}</p>
                <p class="lead">
                    <a class="btn btn-outline-danger" href="{{ route('delete-message', $data->id) }}" role="button">Удалить</a>
                </p>
            </div>
    </div
@endsection
