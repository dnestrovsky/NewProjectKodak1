@extends('layouts.dashboard')

@section('title-page', 'Редактировать категорию ' . $souvenir->name)


@section('content')
    <form action="{{ route('souvenirs.update', $souvenir) }}" method="post" enctype="multipart/form-data" class="decor">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="form-inner">
                    <h1>Редактировать Категорию <b>{{ $souvenir->name }}</b></h1>
                <div class="form-group">
                    <input type="text" name="name" placeholder="{{ $souvenir->name }}" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="description" id="description" placeholder="{{ $souvenir->description }}" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Картинка товара</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                </div>
            </div>

            <button type="submit" class="btn btn-secondary btn-lg btn-block" style="background: #f69a73;">Добавить новый товар</button>
        </div>
    </form>
@endsection
