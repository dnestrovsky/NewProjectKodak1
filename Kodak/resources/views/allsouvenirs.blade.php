@extends('layouts.dashboard')

@section('title-block', 'Все сувениры')


@section('content')

    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">Сувениры</div>
            <div class="table-wrapper">
                <table class="fl-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Название</th>
                            <th>Дата обновления</th>
                            <th>Действие</th>
                            <th>Действие</th>
                            <th>Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($souvenirs as $souvenir)
                            <tr>
                                <td>{{ $souvenir->id }}</td>
                                <td><a href="{{ route('souvenirs.show', $souvenir) }}">{{ $souvenir->name }}</a></td>
                                <td>{{ date('d F Y H:i:s', strtotime($souvenir->updated_at)) }}</td>
                                <td><a href="{{ route('souvenirs.edit', $souvenir) }}">Редактор</a></td>
                                <td><a href="{{ route('images.create', $souvenir) }}">Добавить фото</a></td>
                                <td>
                                    <form action="{{ route('souvenirs.destroy', $souvenir) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Удалить">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    <tbody>
                </table>
            </div>
            <div class="button">
                <a href="{{ route('souvenirs.create') }}">Добавить</a>
            </div>
        </div>


    @endsection
