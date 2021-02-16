@extends('layouts.dashboard')


@section('title-page', 'Создать категорию')


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
                </div>
            </div>

            <button type="submit" class="btn btn-secondary btn-lg btn-block" style="background: #f69a73;">Добавить новый товар</button>
        </div>
    </form>
@endsection
