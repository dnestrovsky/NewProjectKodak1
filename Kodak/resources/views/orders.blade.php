@extends('layouts.app')


@section('title-block','Заказы')
@section('title-page','Заказы')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Заказы</li>
        </ol>
    </nav>
  <form action="{{ route('contact-form') }}" method="post" class="decor">
    @csrf

    <div class="container">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
      <h3>Сделать заказ прямо сейчас</h3>
      <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
      <input type="text" name="phone" placeholder="Введите номер телефона" id="phone" class="form-control">
      <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
      <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control" rows="3"></textarea>
        <input type="file" class="upload" id="photo-upload" multiple=""/>
    </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block btn-warning" type="button">Заказать</button>
    </div>
  </form>
@endsection
