@extends('dashboard')

@section('title-page', 'Административная панель')


@section('content')

    <div class="row">
        <div class="col">
            <div class="alert alert-primary" role="alert">
                <h2>Последние сообщения</h2>
            @foreach($data1 as $el)
                <div class="alert alert-dark w-100" role="alert">
                    <p>Имя: {{$el->name}}</p> <p>Отправлено: {{$el->created_at}}</p>
                    <p class="lead">
                        <a class="btn btn-outline-primary" href="{{ route('messages-data-one', $el->id) }}" role="button">Подробнее</a>
                    </p>
                </div>
            @endforeach
            </div>
        </div>
        <div class="col">
            <h2>Последние заказы</h2>
        </div>
    </div>




@endsection
