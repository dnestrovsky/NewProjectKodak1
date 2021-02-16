@extends('layouts.dashboard')

@section('title-page', 'Редактировать товар ' . $souvenir->name)


@section('content')
    <form action="{{ route('souvenirs.update', $souvenir) }}" method="post" enctype="multipart/form-data" class="decor">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="form-inner">
                    <h1>Редактировать товар <b>{{ $souvenir->name }}</b></h1>
                <div class="form-group">
                    <label for="name">Имя товара</label>
                    <input type="text" name="name" placeholder="{{ $souvenir->name }}" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Описание товара</label>
                    <textarea name="description" id="description" placeholder="{{ $souvenir->description }}" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка товара</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                    <p style="border: 1px solid #210101; text-align: center;">Перетащите файлы или кликните для поиска (Форматы: .jpg, .jpeg, .heif, .png, .bmp и .jpf)</p>
                </div>
            </div>
            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-success">Применить изменения</button>
            </div>
        </div>
    </form>
@endsection
