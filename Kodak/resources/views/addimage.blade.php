@extends('layouts.dashboard')

@section('title-block', 'АП Добавление')


@section('content')

    <div class="container">
        <div class="title">Картинка к сувениру {{ $souvenir->name }}</div>
        <div class="content">
            <form name="addimagetoalbum" method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="souvenir_id" value="{{ $souvenir->id }}" />
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Описание</span>
                        <input name="description" type="text" placeholder="Описание" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Картинка товара</span>
                        <input type="file" name="image" id="image">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Добавить фото">
                </div>
            </form>
        </div>
    </div>

@endsection
