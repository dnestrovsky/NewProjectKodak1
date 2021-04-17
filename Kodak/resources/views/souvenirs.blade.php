@extends('layouts.app')


@section('title-block', 'Сувениры')

@section('content')
    <!-- Works -->
    <section id="works" class="dark1">
        <div class="inner-width">
            <h1 class="section-title">@lang('main.suvenir')</h1>
            <div class="works">
                @foreach($data as $souvenir)
                <a href="{{ route('souvenir-data1', $souvenir->id) }}" class="work">
                    <img src="{{Storage::url($souvenir->image)}}" alt="">
                    <div class="info">
                        <h3>{{$souvenir->__('name')}}</h3>
                        <div class="cat">Сувениры на память</div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
