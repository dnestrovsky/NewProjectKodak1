@extends('layouts.app')


@section('title-block', 'Сувениры')

@section('content')

    <section id="works" class="dark1">
        <div class="inner-width">
            <!-- Contact -->
            <h2 class="section-title">{{$data->__('name')}}</h2>
            <div class="about-content">
                <img src="{{Storage::url($data->image)}}" alt="" class="about-pic">
                <div class="about-text">
                    <h3>
                        <span>{{ $data->__('description') }}</span>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Home -->
    <section id="about">
        <div class="inner-width">
            <h1 class="section-title">Примеры</h1>
            <div class="about-content">
                <img src="img/pic.png" alt="" class="about-pic">
                <div class="about-text">
                </div>
            </div>
        </div>
    </section>


@endsection
