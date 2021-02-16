@extends('layouts.dashboard')


@section('title-block', 'Messages')

@section('content')
            <div class="card border-success mb-3" style="max-width: 500px;">
                <div class="card-header bg-transparent border-success">Имя: {{$data->name}}</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Сообщение</h5>
                    <p class="card-text">{{$data->message}}</p>
                </div>
                <div class="card-footer bg-transparent border-success">
                    <p>Телефон: {{$data->phone}}</p>
                    <p>E-mail: {{$data->email}}</p>
                    <p>Отправлено: {{$data->created_at}}</p>
                    <a class="btn btn-outline-danger" href="{{ route('delete-message', $data->id) }}" role="button">Удалить</a>
                </div>
            </div>
@endsection
