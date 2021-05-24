@extends('layouts.dashboard')

@section('title-block', 'Все сувениры')


@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <h2>Все сувениры</h2>

                <div class="containersouv">
                    @foreach($souvenirs as $souvenir)

                        <div class="pricing-table table3">
                            <div class="pricing-header">
                                <div class="price">Сувенир</div>
                                <div class="titlesouv">{{$souvenir->name}}</div>
                            </div>
                            <ul class="pricing-list">
                                <strong>Обновлено</strong>
                                <div class="border"></div>
                                {{$souvenir->updated_at}}
                            </ul>
                            <form action="{{ route('souvenirs.destroy', $souvenir) }}" method="POST">
                                <a href="{{ route('souvenirs.show', $souvenir) }}"><i class="far fa-eye"></i>Просмотреть</a>
                                <a href="{{ route('souvenirs.edit', $souvenir) }}"><i class="fas fa-pen"></i>Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Удалить"></form>
                        </div>
                    @endforeach

                </div>


                <div>{{$souvenirs->links('default')}}</div>
                <div class="buttons">
                    <a href = "{{route('souvenirs.create')}}" > <i class="fas fa-plus"></i> Добавить</a>
                </div>
            </div>
        </div>
    </section>

@endsection
