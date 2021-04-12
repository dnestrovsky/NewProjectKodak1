@extends('layouts.dashboard')

@section('title-block', 'Все сувениры')


@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <a class="btn btn1" href = "{{route('souvenirs.create')}}" > + Добавить новый товар</a>
                <div class="containersouv">
                    @foreach($souvenirs as $souvenir)
                        <div class="pricing-table table1">
                            <div class="pricing-header">
                                <div class="price">Сувенир</div>
                                <div class="title">{{$souvenir->name}}</div>
                            </div>
                            <ul class="pricing-list">
                                <div class="border"></div>
                                <li><strong>Создано</strong></li>
                                <div class="border"></div>
                                <li>{{$souvenir->created_at}}</li>
                                <div class="border"></div>
                                <li><strong>Обновлено</strong></li>
                                <div class="border"></div>
                                <li>{{$souvenir->updated_at}}</li>
                            </ul>
                            <form action="{{ route('souvenirs.destroy', $souvenir) }}" method="POST">
                                <a href="{{ route('souvenirs.show', $souvenir) }}">Просмотреть</a>
                                <a href="{{ route('souvenirs.edit', $souvenir) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Удалить"></form>
                        </div>
                    @endforeach

                </div>
                <div>{{$souvenirs->links('default')}}</div>

            </div>
        </div>
    </section>

@endsection
