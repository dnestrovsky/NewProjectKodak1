@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')

    <div class="row">
        <div class = "col">
            <a class="btn btn-outline-info mb-5" href = "{{route('souvenirs.create')}}" > + Добавить новый товар</a>
            <table>
                <tr><th>ID</th><th>Название</th><th>Добавлено</th><th>Изменено</th><th>Подробнее</th><th>Изменить</th><th>Удалить</th></tr>
                @foreach($souvenirs as $souvenir)
                    <form action="{{ route('souvenirs.destroy', $souvenir) }}" method="POST">
                <tr><td>{{$souvenir->id}}</td><td>{{$souvenir->name}}</td><td>{{$souvenir->created_at}}</td><td>{{$souvenir->updated_at}}</td>

                    <td><a class="btn btn-outline-info" href = "{{ route('souvenirs.show', $souvenir) }}" >Просмотреть</a></td>
                    <td><a class="btn btn-outline-warning" href = "{{ route('souvenirs.edit', $souvenir) }}" >Редактировать</a></td>
                    @csrf
                    @method('DELETE')
                    <td><input class="btn btn-outline-danger" type="submit" value="Удалить"></form></td>
                </tr>

                @endforeach
            </table>
            <div class="w-100">{{$souvenirs->links()}}</div>
        </div>

    </div>
@endsection
