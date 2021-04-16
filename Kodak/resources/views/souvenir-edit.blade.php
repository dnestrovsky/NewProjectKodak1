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
                        <input type="text" name="name_ro" class="contact-form-text" id="name_ro" placeholder="{{ $souvenir->name_ro }}">
                        <textarea class="contact-form-text" name="description" id="description" placeholder="{{ $souvenir->description }}"></textarea>
                        <textarea class="contact-form-text" name="description_ro" id="description_ro" placeholder="{{ $souvenir->description_ro }}"></textarea>
                        <label for="custom-file-input">Картинка товара</label>
                        <input type="file" name="image" class="contact-form-text" id="image">
                        <input type="submit" class="contact-form-btn" value="Применить изменения">
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
