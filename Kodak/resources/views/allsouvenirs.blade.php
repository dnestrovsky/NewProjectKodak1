@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')

    <div class="row">
        <div class = "col">
            <h2>Все товары</h2>
            <a class="btn btn-outline-info mb-5" href = "{{route('souvenirs.create')}}" >Добавить новый товар</a>
            @foreach($souvenirs as $souvenir)
                <div class="alert alert-dark w-100" role="alert">
                    <p class="lead">{{$souvenir->description}}</p>
                    <hr class="my-4">
                    <div class="row">
                    <div class="col"><p>{{$souvenir->name}}</p></div>
                    <div class="col"><p>Добавлено: {{$souvenir->created_at}}</p></div>
                        <a class="btn btn-outline-info mb-5" href = "{{ route('souvenirs.show', $souvenir) }}" >Просмотреть</a>
                        <a class="btn btn-outline-info mb-5" href = "{{ route('souvenirs.edit', $souvenir) }}" >Редактировать</a>
                    </div>
                </div>
            @endforeach
            <div class="w-100">{{$souvenirs->links()}}</div>
        </div>

        <div class="col">
            <h2>Подсказки</h2>
        </div>
    </div>
@endsection
