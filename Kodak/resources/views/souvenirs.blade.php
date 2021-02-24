@extends('layouts.app')


@section('title-block', 'Kodak - Сувениры')
@section('title-page', 'Сувениры')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Сувениры</li>
        </ol>
    </nav>
<div class="row">
                <div class="post-wrap">
                    @foreach($data as $souvenir)
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <a href="" class="post-link">
                                <img src="{{Storage::url($souvenir->image)}}">
                                <div class="post-info">
                                    <div class="post-meta">
                                        <div class="post-date">{{ $souvenir->updated_at }}</div>
                                    </div>
                                    <h3 class="post-title">{{$souvenir->name}}</h3>
                                </div>
                            </a>
                        </div>
                        <a href="/contact" class="btn btn-outline-info btn-lg btn-block mt-2">
                            <strong>{{$souvenir->name }}</strong>
                        </a>
                    </div>
                    @endforeach
            </div>
</div>
@endsection
