@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')

    <section id="home">
        <div class="inner-width">
            <div class="content">
                <ul class="breadcrumb">
                    <li><a href="/dashboard">Главная</a></li>
                    <li><a href="{{route('souvenirs.index')}}">Все сувениры</a></li>
                    <li>Просмотр</li>
                </ul>
                <div class="about-section" style="background: url({{Storage::url($souvenir->image)}}) no-repeat left;">
                    <div class="inner-container">
                        <h3>{{$souvenir->name}}</h3>
                        <h3>{{$souvenir->name_ro}}</h3>
                        <p class="text">
                            {{ $souvenir->description}}
                        </p>

                        <p class="text">
                            {{ $souvenir->description_ro}}
                        </p>
                        <div class="skills">
                            <span>{{ $souvenir->updated_at }}</span>
                            <span>{{ $souvenir->created_at }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection



