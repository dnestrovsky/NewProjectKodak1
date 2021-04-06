@extends('layouts.dashboard')

@section('title-block', 'Редактировать товар ' . $souvenir->name)


@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <div class="contact-section">

                    <h1>Редактировать товар <b>{{ $souvenir->name }}</b></h1>
                    <div class="border"></div>
                    <form class="contact-form" action="{{ route('souvenirs.update', $souvenir) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="text" name="name" class="contact-form-text" id="name" placeholder="{{ $souvenir->name }}">
                        <textarea class="contact-form-text" name="description" id="description" placeholder="{{ $souvenir->description }}"></textarea>
                        <label for="exampleFormControlFile1">Картинка товара</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                        <p style="border: 1px solid #210101; text-align: center;">Перетащите файлы или кликните для поиска (Форматы: .jpg, .jpeg, .heif, .png, .bmp и .jpf)</p>
                        <input type="submit" class="contact-form-btn" value="Применить изменения">
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
