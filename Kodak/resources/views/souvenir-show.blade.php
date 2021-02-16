@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')
        <div class = "col">
                <div class="alert alert-dark w-100" role="alert">
                    <p class="lead">{{ $souvenir->description }}</p>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col"><p>{{$souvenir->name}}</p></div>
                        <div class="col"><p>Добавлено: {{$souvenir->created_at}}</p></div>
                    </div>
                </div>
        </div>
@endsection
