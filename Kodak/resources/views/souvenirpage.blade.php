@extends('layouts.app')


@section('title-block', 'Сувениры')

@section('content')

    <section id="works">
        <div class="inner-width">
            <!-- Name -->
            <h2 class="section-title">{{ $souvenir->__('name') }}</h2>

        </div>
        </div>
    </section>

    <div class="sectionim">
        <div class="lightBox">
            <div class="lightBox_content">
                <i class="fas fa-times close"></i>
                <div class="logo_icons">
                    <a href="#">
                        <img class="logoImg" src="/img/logo.png" alt="">
                        <div class="text_content">
                            <span class="name">Palitra-Kodak</span>
                            <span class="followers">Фотосалон Флорешть</span>
                        </div>
                    </a>
                    <div class="icons">
                        <i class="fas fa-arrow-down"></i>
                    </div>
                </div>
                <div class="showImg">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="image-gallery">
            <header>Галлерея</header>
            <div class="image-container">
                @foreach ($souvenir->Photos as $photo)
                    <div class="image-box">
                        <img class="gImg" src="{{ Storage::url($photo->image) }}" alt="">
                        <div class="logo_icons">
                            <a href="#">
                                <img class="logoImg" src="/img/logo.png" alt="">
                                <div class="text_content">
                                    <span class="name">Palitra-Kodak</span>
                                    <span class="followers">Фотосалон Флорешть</span>
                                </div>
                            </a>
                            <div class="icons">
                                <i class="fas fa-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
