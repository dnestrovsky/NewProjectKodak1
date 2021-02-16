@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')
        <div class="card mb-3" style="max-width: 900px;">
            <div class="row g-0">
                <div class="col">
                    <img src="{{Storage::url($souvenir->image)}}"  alt="...">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">{{$souvenir->name}}</h5>
                        <hr class="my-2">
                        <p class="card-text">{{ $souvenir->description}}</p>
                        <hr class="my-2">
                        <p class="card-text"><small class="text-muted">Last updated {{ $souvenir->updated_at }}</small></p>
                    </div>
                </div>
            </div>
        </div>
@endsection
