@extends('layouts.dashboard')


@section('title-block', 'Messages')
@section('title-page', 'Сообщения от пользователей')

@section('content')
    <div class="row">
        <table>
            <tr><th>ID</th><th>Имя</th><th>Добавлено</th><th>Изменено</th><th>Подробнее</th></tr>
            @foreach($data as $el)
                <tr><td>{{$el->id}}</td><td>{{$el->name}}</td><td>{{$el->created_at}}</td><td>{{$el->updated_at}}</td>
                    <td><a class="btn btn-outline-info"  href="{{ route('messages-data-one', $el->id) }}" >Просмотреть</a></td>
                </tr>
            @endforeach
        </table>
    <div class="w-100">{{$data->links()}}</div>
@endsection
