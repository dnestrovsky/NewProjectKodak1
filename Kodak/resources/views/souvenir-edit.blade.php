@extends('layouts.dashboard')

@section('title-block', 'Редактировать товар ' . $souvenir->name)


@section('content')

    <!-- Home -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <div class="contact-section">

                    <h1>Редактировать товар</h1>
                    <h1><b>{{ $souvenir->name }}</b></h1>
                    <div class="border"></div>
                    <form class="contact-form" action="{{ route('souvenirs.update', $souvenir) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <label for="name">Название товара</label>
                        <input type="text" name="name" class="contact-form-text" id="name" value="{{ $souvenir->name }}">
                        <label for="name_ro">Название на румынском</label>
                        <input type="text" name="name_ro" class="contact-form-text" id="name_ro" value="{{ $souvenir->name_ro }}">
                        <label for="description">Описание</label>
                        <textarea class="contact-form-text" name="description" id="description">{{ $souvenir->description }}</textarea>
                        <label for="description_ro">Описание на румынском</label>
                        <textarea class="contact-form-text" name="description_ro" id="description_ro">{{ $souvenir->description_ro }}</textarea>
                        <label for="custom-file-input">Картинка товара</label>
                        <input type="file" name="image" class="contact-form-text" id="image">
                        <input type="submit" class="contact-form-btn" value="Применить изменения">
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
