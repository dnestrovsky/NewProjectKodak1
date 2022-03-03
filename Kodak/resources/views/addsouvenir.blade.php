@extends('layouts.dashboard')


@section('title-page', 'Создать товар')


@section('content')
    <div class="container">
        <div class="title">Добавление сувенира</div>
        <div class="content">
            <form action="{{ route('souvenirs.store') }}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Название</span>
                        <input name="name" id="name" type="text" placeholder="Название" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Название на румынском</span>
                        <input name="name_ro" id="name_ro" type="text" placeholder="Название на румынском" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Картинка товара</span>
                        <input type="file" name="image" id="image">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Добавить">
                </div>
            </form>
        </div>
    </div>
@endsection
