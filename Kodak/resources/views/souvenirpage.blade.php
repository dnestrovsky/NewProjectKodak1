@extends('layouts.app')


@section('title-block', 'Сувениры')

@section('content')

    <section id="works" class="dark1">
        <div class="inner-width">
            <!-- Name -->
            <h2 class="section-title">{{$souvenir->__('name')}}</h2>

            </div>
        </div>
    </section>
    <!-- Examples -->
    <section id="about">
        <div class="gallery-sectionex">
            <div class="inner-width">
              <h1>@lang('main.serv_exemplu')</h1>
              <div class="border"></div>
              <div class="gallery">

                @foreach($souvenir->Photos as $photo)
                <a href="{{ Storage::url($photo->image) }}" class="image">
                    <img alt="{{$souvenir->name}}" src="{{ Storage::url($photo->image) }}">
                </a>
                @endforeach

              </div>
            </div>
          </div>
    </section>
@endsection
