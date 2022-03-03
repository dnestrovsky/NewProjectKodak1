@extends('layouts.dashboard')

@section('title-block', 'Редактирование')


@section('content')
    <div class="container">
        <div class="title">Редактирование {{ $souvenir->name }}</div>
        <div class="content">
            <form action="{{ route('souvenirs.update', $souvenir) }}" method="post" enctype="multipart/form-data">

                @method('PUT')
                @csrf

                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Название товара</span>
                        <input name="name" id="name" type="text" placeholder="Описание" value="{{ $souvenir->name }}"
                            required>
                    </div>

                    <div class="input-box">
                        <span class="details">Название на румынском</span>
                        <input name="name_ro" id="name_ro" type="text" placeholder="Описание"
                            value="{{ $souvenir->name_ro }}" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Картинка товара</span>
                        <input type="file" name="image" id="image">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Применить изменения">
                </div>
            </form>
        </div>
    </div>
@endsection
