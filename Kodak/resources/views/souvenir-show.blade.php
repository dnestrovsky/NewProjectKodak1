@extends('layouts.dashboard')

@section('title-page', 'Все сувениры')


@section('content')

    <div class="sectionim">

        <div class="image-gallery">
            <header>Примеры фото {{ $souvenir->name }}</header>
            <div class="image-container">
                @foreach ($souvenir->Photos as $photo)
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
                                    <form action="{{ route('images.destroy', $photo) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btnbtn-danger btn-small"
                                            onclick="return confirm('Подтвердите?')">Удалить</button>
                                    </form>
                                </div>
                            </div>
                            <div class="showImg">
                                <div class="image">
                                    <img src="images/img1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-box">
                        <img class="gImg" src="{{ Storage::url($photo->image) }}" alt="">
                        <div class="logo_icons">
                            <a href="#">
                                <img class="logoImg" src="/img/logo.png" alt="">
                                <div class="text_content">
                                    <span class="name">Palitra-Kodak</span>
                                    <span class="followers">Дата: {{ date('d F Y', strtotime($photo->created_at)) }} в
                                        {{ date('H:i:s', strtotime($photo->created_at)) }}</span>
                                </div>
                            </a>
                            <div class="icons">
                                <form action="{{ route('images.destroy', $photo) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btnbtn-danger btn-small"
                                        onclick="return confirm('Подтвердите?')">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
