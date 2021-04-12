@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')

    <section id="home">
        <div class="inner-width">
            <div class="content">

                <div class="profile-card">
                    <div class="card-header">
                        <div class="pic">
                            <img src="{{Storage::url($souvenir->image)}}" alt="">
                        </div>
                        <div class="name">{{$souvenir->name}}</div>
                        <div class="name">{{$souvenir->name_ro}}</div>
                        <div class="desc">Сувенир</div>
                        <div class="sm">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-github"></a>
                            <a href="#" class="fab fa-youtube"></a>
                        </div>
                        <a href="#" class="contact-btn">{{ $souvenir->description}}</a>
                        <a href="#" class="contact-btn">{{ $souvenir->description_ro}}</a>
                    </div>
                    <div class="card-footer">
                        <div class="numbers">
                            <div class="border"></div>
                            <div class="item">
                                <span>{{ $souvenir->updated_at }}</span>
                                Обновлено
                            </div>
                            <div class="border"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
