@extends('layouts.dashboard')


@section('title-page', 'Создать товар')


@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <div class="contact-section">

                    <h1>Добавить товар</h1>
                    <div class="border"></div>
                    <form class="contact-form" action="{{ route('souvenirs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" class="contact-form-text" id="name" placeholder="Название">
                        <textarea class="contact-form-text" name="description" id="description" placeholder="Описание"></textarea>
                        <label for="exampleFormControlFile1">Картинка товара</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                        <p style="border: 1px solid #210101; text-align: center;">Перетащите файлы или кликните для поиска (Форматы: .jpg, .jpeg, .heif, .png, .bmp и .jpf)</p>
                        <input type="submit" class="contact-form-btn" value="Добавить">
                    </form>
                </div>


            </div>
        </div>
    </section>
@endsection
