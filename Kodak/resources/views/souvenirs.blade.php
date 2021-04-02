@extends('layouts.app')


@section('title-block', 'Kodak - Сувениры')
@section('title-page', 'Сувениры')

@section('content')
    <!-- Works -->
    <section id="works" class="dark1">
        <div class="inner-width">
            <h1 class="section-title">Сувениры</h1>
            <div class="works">
                @foreach($data as $souvenir)
                <a href="{{Storage::url($souvenir->image)}}" class="work">
                    <img src="{{Storage::url($souvenir->image)}}" alt="">
                    <div class="info">
                        <h3>{{$souvenir->name}}</h3>
                        <div class="cat">Сувениры на память {{ $souvenir->updated_at }}</div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
