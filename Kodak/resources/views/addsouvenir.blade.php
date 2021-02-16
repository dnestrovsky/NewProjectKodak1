@extends('layouts.dashboard')


@section('title-page', 'Создать товар')


@section('content')
    <form action="{{ route('souvenirs.store') }}" method="post" enctype="multipart/form-data" class="decor">
        @csrf
        <div class="container">
            <div class="form-inner">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Название" id="name" class="form-control">
                </div>
                <div class="form-group">
                <textarea name="description" id="description" placeholder="Описание" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка товара</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                    <p style="border: 1px solid #210101; text-align: center;">Перетащите файлы или кликните для поиска (Форматы: .jpg, .jpeg, .heif, .png, .bmp и .jpf)</p>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-success">Добавить</button>
            </div>
        </div>
    </form>
@endsection
