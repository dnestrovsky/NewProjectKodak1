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
                        <input type="text" name="name_ro" class="contact-form-text" id="name_ro" placeholder="Название на румынском">
                        <textarea class="contact-form-text" name="description" id="description" placeholder="Описание"></textarea>
                        <textarea class="contact-form-text" name="description_ro" id="description_ro" placeholder="Описание на румынском"></textarea>
                        <label for="custom-file-input">Картинка товара</label>
                        <input type="file" name="image" class="contact-form-text" id="image">
                        <input type="submit" class="contact-form-btn" value="Добавить">
                    </form>
                </div>


            </div>
        </div>
    </section>
@endsection
